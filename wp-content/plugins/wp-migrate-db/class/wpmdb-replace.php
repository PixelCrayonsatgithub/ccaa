<?php

final class WPMDB_Replace {
	protected $search;
	protected $replace;
	protected $subdomain_replaces_on;
	protected $wpmdb;

	private $table;
	private $column;
	private $row;

	function __construct( $table, $search, $replace, $wpmdb ) {
		$this->table   = $table;
		$this->search  = $search;
		$this->replace = $replace;
		$this->wpmdb   = $wpmdb;
	}

	/**
	 * Determine whether to apply a subdomain replace over each value in the database.
	 *
	 * @return bool
	 */
	function is_subdomain_replaces_on() {
		if ( ! isset( $this->subdomain_replaces_on ) ) {
			$this->subdomain_replaces_on = ( is_multisite() && defined( 'SUBDOMAIN_INSTALL' ) && SUBDOMAIN_INSTALL && apply_filters( 'wpmdb_subdomain_replace', true ) );
		}

		return $this->subdomain_replaces_on;
	}

	/**
	 * Automatically replace URLs for subdomain based multisite installations
	 * e.g. //site1.example.com -> //site1.example.local for site with domain example.com
	 * NB: only handles the current network site, does not work for additional networks / mapped domains
	 *
	 * @param $new
	 *
	 * @return mixed
	 */
	function subdomain_replaces( $new ) {
		$domain_replace = $this->wpmdb->get_domain_replace();

		if ( empty( $domain_replace ) ) {
			return $new;
		}

		$pattern     = '|//(.*?)\\.' . preg_quote( $this->wpmdb->get_domain_current_site(), '|' ) . '|';
		$replacement = '//$1.' . trim( $domain_replace );
		$new         = preg_replace( $pattern, $replacement, $new );

		return $new;
	}

	/**
	 * Applies find/replace pairs to a given string.
	 *
	 * @param string $subject
	 *
	 * @return string
	 */
	function apply_replaces( $subject ) {
		$new = str_ireplace( $this->search, $this->replace, $subject, $count );
		if ( $this->is_subdomain_replaces_on() ) {
			$new = $this->subdomain_replaces( $new );
		}

		return $new;
	}

	/**
	 * Take a serialized array and unserialize it replacing elements as needed and
	 * unserialising any subordinate arrays and performing the replace on those too.
	 *
	 * Mostly from https://github.com/interconnectit/Search-Replace-DB
	 *
	 * @param array $data              Used to pass any subordinate arrays back to in.
	 * @param bool  $serialized        Does the array passed via $data need serialising.
	 * @param bool  $parent_serialized Passes whether the original data passed in was serialized
	 *
	 * @return array    The original array with all elements replaced as needed.
	 */
	function recursive_unserialize_replace( $data, $serialized = false, $parent_serialized = false ) {
		$pre = apply_filters( 'wpmdb_pre_recursive_unserialize_replace', false, $data, $this );
		if ( false !== $pre ) {
			return $pre;
		}

		$is_json = false;
		// some unserialized data cannot be re-serialized eg. SimpleXMLElements
		try {
			if ( is_string( $data ) && ( $unserialized = @unserialize( $data ) ) !== false ) {
				// PHP currently has a bug that doesn't allow you to clone the DateInterval / DatePeriod classes.
				// We skip them here as they probably won't need data to be replaced anyway
				if ( is_object( $unserialized ) ) {
					if ( $unserialized instanceof DateInterval || $unserialized instanceof DatePeriod ) {
						return $data;
					}
				}
				$data = $this->recursive_unserialize_replace( $unserialized, true, true );
			} elseif ( is_array( $data ) ) {
				$_tmp = array();
				foreach ( $data as $key => $value ) {
					$_tmp[ $key ] = $this->recursive_unserialize_replace( $value, false, $parent_serialized );
				}

				$data = $_tmp;
				unset( $_tmp );
			} elseif ( is_object( $data ) ) { // Submitted by Tina Matter
				$_tmp = clone $data;
				foreach ( $data as $key => $value ) {
					$_tmp->$key = $this->recursive_unserialize_replace( $value, false, $parent_serialized );
				}

				$data = $_tmp;
				unset( $_tmp );
			} elseif ( $this->wpmdb->is_json( $data, true ) ) {
				$_tmp = array();
				$data = json_decode( $data, true );

				foreach ( $data as $key => $value ) {
					$_tmp[ $key ] = $this->recursive_unserialize_replace( $value, false, $parent_serialized );
				}

				$data = $_tmp;
				unset( $_tmp );
				$is_json = true;
			} elseif ( is_string( $data ) ) {
				list( $data, $do_replace ) = apply_filters( 'wpmdb_replace_custom_data', array( $data, true ), $this );

				if ( $do_replace ) {
					$data = $this->apply_replaces( $data );
				}
			}

			if ( $serialized ) {
				return serialize( $data );
			}

			if ( $is_json ) {
				return json_encode( $data );
			}
		} catch ( Exception $error ) {
			$error_msg     = __( 'Failed attempting to do the recursive unserialize replace. Please contact support.', 'wp-migrate-db' );
			$error_details = $error->getMessage() . "\n\n";
			$error_details .= var_export( $data, true );
			$this->wpmdb->log_error( $error_msg, $error_details );
		}

		return $data;
	}

	/**
	 * Getter for the $table class property.
	 *
	 * @return string Name of the table currently being processed in the migration.
	 */
	public function get_table() {
		return $this->table;
	}

	/**
	 * Getter for the $column class property.
	 *
	 * @return string Name of the column currently being processed in the migration.
	 */
	public function get_column() {
		return $this->column;
	}

	/**
	 * Getter for the $row class property.
	 *
	 * @return string Name of the row currently being processed in the migration.
	 */
	public function get_row() {
		return $this->row;
	}

	/**
	 * Setter for the $column class property.
	 *
	 * @param string $column Name of the column currently being processed in the migration.
	 */
	public function set_column( $column ) {
		$this->column = $column;
	}

	/**
	 * Setter for the $row class property.
	 *
	 * @param string $row Name of the row currently being processed in the migration.
	 */
	public function set_row( $row ) {
		$this->row = $row;
	}

	/**
	 * Multsite safe way of comparing the table currently being processed in the migration against a desired table.
	 *
	 * The table prefix should be omitted, example:
	 *
	 * $is_posts = $this->table_is( 'posts' );
	 *
	 * @param  string  $desired_table Name of the desired table, table prefix omitted.
	 * @return boolean                Whether or not the desired table is the table currently being processed.
	 */
	public function table_is( $desired_table ) {
		return $this->wpmdb->table_is( $desired_table, $this->table );
	}

}