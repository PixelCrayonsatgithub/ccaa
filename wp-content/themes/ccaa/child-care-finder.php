<?php
/**
 * Template Name: Child Care Finder
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Ccaa
 * @since Ccaa 1.0
 */

get_header(); ?>
<div class="container">
	<div class="main_title">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8 paddng-left0"><h1 class="heading_title">Child Care Finder</h1></div>
		</div>
		<div class="row">			
			<div class="col-md-1"></div>
			<div class="col-md-6 paddng-left0"><h2 class="sub_title">Illinois Action For Children, Lorem Ipsm Dolor </h2></div>
			<div class="col-md-4 share-icons"> <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
	<div class="container-fluid main-cont">
		<div class="row">
			<div class="google-map">
					<div class="row-map">	
				<div class="container">
					<div class="">	
<div class="col-md-1 col-sm-1"></div>					
						<div class="green-left-box">
							<div class="green-left-box-test">&nbsp;</div>
							<div class="green-box-text">
								<span class="corporate">Illinois Action For Children</span>
<address>
	<span>4753 North Broadway, Ste. 1200</span>
	<span>Chicago, IL, 60640</span>
</address>								
<address>
	<span><small>Phone:</small> (312) 823-1100</span>
	<span><small>Fax:</small> (773) 769-8020,</span>
	<span><small>Email:</small><br/> <a href="mailto:whelanm@actforchildren.org">whelanm@actforchildren.org</a></span>
	<a target="_blank" href="https://www.actforchildren.org">www.actforchildren.org</a>
</address>							
							</div>
						</div>
					</div>
				</div>
			</div>
			<iframe width="600" height="342" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3105.4337644493057!2d-77.083731!3d38.891194999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b6869edc24cb%3A0xbb678ab8b68c6ee8!2sNACCRRA!5e0!3m2!1sen!2sin!4v1421846011104"></iframe>
			<div class="resources_sec">
						<a href="#">click here for resouces in your state</a>
					</div>
			</div>
			<div class="clear"></div>
			<div class="search-resut">
				<div class="container-fluid banner_sec1">
<div class="container">
    <div class="row">
			<div class="col-md-1"></div>
            <div class="col-md-5 op_hrs">
                <h3>Hours Of Operation</h3>
                <p><span>Monday:</span>    9:00 AM - 5:00 PM </p>
                <p><span>Tuesday:</span>   9:00 AM - 5:00 PM </p>
                <p><span>Wednesday:</span> 9:00 AM - 5:00 PM </p>
                <p><span>Thursday:</span>  9:00 AM - 5:00 PM </p>
                <p><span>Friday:</span>    9:00 AM - 5:00 PM </p>
            </div>
            <div class="col-md-5 ser_offer">
            <h3>Services Offered</h3>
                <ul>
                <li>Training and Technical Assistance for Providers</li>
                <li>Child Care Provider Professional Development</li>
                <li>Child Care Program Licensing and Registration</li>
                <li>Provider Recruitment</li>
                <li>Spanish Language Services</li>
                </ul>
            </div>
			<div class="clear"></div>
			<div class="col-md-1"></div>
             <div class="col-md-10 country_sec">
             <h3>Country</h3>
              <ul>
                  <li>Lorem Ipsm County, IL</li>
              </ul>
             </div>
       </div>
</div>
</div>
			</div>
		</div>
	</div>
	
	
<div class="child_serch_cont">
<div class="container">
<div class="col-md-1 col-sm-1"></div>
<div class="col-md-10 paddng-left0">
<div class="main_child_search">
<h1>Your Child Care Search <img src="<?php bloginfo('template_url');?>/images/down-arrow2.png" /></h1>
<p class="lead child_search_title">Your local Child Care Resources and Referral agency will be able to assist you in finding child care providers in <br>your area.
Please select one of the options below to locate the agency that serves your area.</p>
</div>
<div class="serchbytype_main">
	    <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li>Search By Zip Code</li>
                <li>Search By Country & State</li>
                <li>Search By City & State</li>
				<li>Search By Physical Address</li>
            </ul>
            <div class="resp-tabs-container">
                <div>
					<form class="serch_by_zip_code">						
						<input type="text" placeholder="Zip Code..." class="input-text-form zip">							
						<button class="btn btn-lg serch_submit btn-responsive" type="button">Search For Agency</button>							
					</form>
                </div>
                <div>
					<form class="serch_by_country">	
						<input type="text" placeholder="City" class="input-text-form city margin-bottom">	
						<select id="my-dropdown" class="margin-bottom">
							<option>Ac</option>
							<option>An</option>
							<option>So</option>
						</select>
						<div class="clear"></div>
						<button class="btn btn-lg serch_submit btn-responsive" type="button">Search For Agency</button>							
					</form>
                </div>
                <div>
				<form class="serch_by_city">
					<input type="text" placeholder="City" class="input-text-form city margin-bottom">	
					<select id="my-dropdown1" class="margin-bottom">
						<option>Ac</option>
						<option>An</option>
						<option>So</option>
					</select>
					<div class="clear"></div>
					<button class="btn btn-lg serch_submit btn-responsive" type="button">Search For Agency</button>	
				</form>
                </div>
				<div>
					<form class="serch_by_phy_add">
						<input type="text" placeholder="Address..." class="input-text-form full margin-bottom">						
						<select id="my-dropdown2" class="margin-bottom">
							<option>Ac</option>
							<option>An</option>
							<option>So</option>
						</select>
						<input type="text" placeholder="City" class="input-text-form city margin-bottom">
						<div class="clear"></div>						
						<input type="text" placeholder="Zip Code..." class="input-text-form zip margin-bottom">
						<button class="btn btn-lg serch_submit margin-bottom" type="button">Search For Agency</button>
					</form>
				</div>
            </div>
        </div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>