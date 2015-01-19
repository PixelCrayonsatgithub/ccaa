$(document).ready(function(){
	var header_height = $('.site-header').outerHeight();
	$('#page').css('padding-top',header_height);
	
	$('#menu-left-menu').addClass('side-sub-nav');
	$('#my-dropdown,#my-dropdown1,#my-dropdown2').sSelect();	
	$('form.nsu-form input[type="email"]').addClass('txtbx');
	$('.menu-right h3').click(function(){
		$(this).next().slideToggle();
	});
	
	

		val2='';       
        jQuery('.register .frmtxt').focus(function(){val=jQuery(this).val();if(val=='Frist Name'||val=='Last Name'){jQuery(this).val('');val2=val;}});
        jQuery('.register input[type="email"]').focus(function(){val=jQuery(this).val();if(val=='Email Address'){jQuery(this).val('');val2=val;}});
		jQuery('.contact-form form .form-row input,.contact-form form textarea').focus(function(){val=jQuery(this).val();if(val=='Email Address *'||val=='Retype Your Email Address *' || val=='Comments or Question *'|| val=='general'){jQuery(this).val('');val2=val;}});
        jQuery('.register .frmtxt,.contact-form form .form-row input,.contact-form form textarea').blur(function(){if(jQuery(this).val()=='')jQuery(this).val(val2);});

	
	$('.content-after-parallex .quots p').append('<span class="double-quote"></span>');
	var image_height = $('.listing-image').height();
	$('.listing-image a').css('line-height',image_height + 'px');
	$('#horizontalTab').easyResponsiveTabs({
		type: 'vertical', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);

			$name.text($tab.text());

			$info.show();
		}
	});
	
	
	$('.child-search').click(function(e){
		e.preventDefault();
		$(this).hide();
		$(this).next('.accordian-form').show();
		
		//alert('hi');
	});
	
	$('.accordian-form .child-care h4 a').click(function(e){
		e.preventDefault();
		$(this).parents('.accordian-form').hide();
		$(this).parents('.accordian-form').prev('.child-search').show();
	});
	
	$('.menu').click(function(){
		$(this).toggleClass('down-arrow');
		$('.menu-body').slideToggle('fast');
	});
	
	$('.menu-body  ul >  li.arrow a').click(function(){
		//alert('hi');
		$(this).next('.sub-menu').slideToggle();
		
		return false;
	});
	
	$('ul.sub-menu li a','.menu-body').click(function(){
		var Url = $(this).attr('href');	
		window.location.href = Url;
		return false;
	});
	
	$('a[href*="#"]').on('click', function(event){     
		//event.preventDefault();
		var off_set = $(this.hash).offset().top - header_height;
		$('html,body').animate({scrollTop: off_set }, 500);
	});
	$('.main_child_search h1 img').on('click', function(event){     
		//event.preventDefault();
		var off_set = $(this).offset().top - header_height;
		$('html,body').animate({scrollTop: off_set }, 500);
	});
	
	
	$('.sticky-form .item').click(function (e){	
	//alert('hi');	
		$(this).removeClass('yello-plus-icon');
		$(this).toggleClass('yellow-minus-icon');
		$(this).next().find('.item-data').slideToggle();
		

		
		$(this).parent().siblings().find('.item-data').slideUp();
		$(this).parent().siblings().find('.item').addClass('yello-plus-icon');
		$(this).parent().siblings().find('.item').removeClass('yellow-minus-icon');
		
	});
	
	$('.menu-body .item').click(function (e){
		
			$(this).removeClass('yello-plus-icon');
		$(this).toggleClass('yellow-minus-icon');
		$(this).next('.item-data').slideToggle();
		
		$(this).parent().siblings().find('.item-data').slideUp();
		$(this).parent().siblings().find('.item').addClass('yello-plus-icon');
		$(this).parent().siblings().find('.item').removeClass('yellow-minus-icon');
		});
	
	$('#intro').parallax("0%", 0);
	
	var p_image_height = $('.parallex-image').height();
	
	$('div.parallex-image').height(p_image_height);
	
	
	/* Resizing functionality */
	$(window).resize(function(){
		var header_height = $('.site-header').outerHeight();
		$('#page').css('padding-top',header_height);		
		
		$('#who-we-are1').on('click', function(event){     
			event.preventDefault();
			var off_set = $(this.hash).offset().top - header_height;
			$('html,body').animate({scrollTop: off_set }, 100);
		});
		var image_height = $('.listing-image').height();
		$('.listing-image a').css('line-height',image_height + 'px');
	});
	
	
$('#navigation').on('click', '.menu-link', function () {
    $('.menu').slideToggle('fast', function () {
        if ($('.menu').is(':visible')) {
            $('.menu-link span').html('&#9650;');
        } else {
            $('.menu-link span').html('&#9660;');
        }
    });
});
$('.menu').on('click', '.has-subnav a', function () {
    if ($(window).width() < 772 || $('html').hasClass('touch')) {
        if ($(this).next('ul').is(':visible')) {
            $(this).next('ul').slideUp('fast');
            $(this).removeClass('active');
        } else {
            $(this).closest('ul').find('.active').next('ul').slideUp('fast');
            $(this).closest('ul').find('.active').removeClass('active');
            $(this).next().slideToggle('fast');
            $(this).addClass('active');
        }
    }
});

	
});