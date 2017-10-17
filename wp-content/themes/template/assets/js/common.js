jQuery.noConflict();
jQuery(document).ready(function($){
				$('.backTOP').on('click', function(){
		$('html, body').animate({
			scrollTop: 0
		},800);
	});


			jQuery(".show a").each(function(){
			jQuery(this).click(function(){
				var title = jQuery(this).find('h4').html();
				setTimeout(function(){
				jQuery('.pp_details').prepend('<h4 style="margin:0;display:block">'+title+'</h4>');
				}, 800);
			});
		});

		
			setInterval(function(){

		var imgCompare = jQuery('#fullResImage').attr('src');
		jQuery('.image-gallery li img').each(function(){
			var imgOrgin = jQuery(this).attr('src');
			if(imgOrgin === imgCompare){
				var title1 = jQuery(this).closest('li').find('.tit-show').text();
				jQuery('.pp_details h4').text(title1);
			}
				});

		}, 800);
		
	$('<i class="fa fa-arrow-circle-o-right"></i>').insertBefore('.info ul li a');

	   $('.paid li:first-child input[type=radio]').click(function() {
		   $('.paid li:nth-child(2) .con').hide();
				$('.paid li:first-child .con').show();
	  });
	     $('.paid li:nth-child(2) input[type=radio]').click(function() {
		   $('.paid li:first-child .con').hide();
				$('.paid li:nth-child(2) .con').show();
	  });
	  $('.paid li:first-child input[type=radio]').trigger('click');
$('.create-account').remove();
	
		 str = $('.woocommerce-Tabs-panel').text();
	    if($.trim(str) === "") {
     $('.wc-tabs-wrapper .tabs').remove();
	 $('.wc-tabs-wrapper').css('border-top', '0px');
   }
   var xhr = $('.fb-page').attr('data-href');
    if($.trim(xhr) === "") {
		$('#closefbchat').remove();
	}

				$('.conta').each(function(){
			var st = $(this).text();
			if($.trim(st) === ""){
				$(this).remove();
			}
	});
	
   $('.rel').slice(4,100).remove();
	$('.thum').attr('href','javascript:;');
	$('.fa-align-justify').on('click', function(){
		$('.menu-menu-container').slideToggle();
		$('.languages').toggleClass('float');
	});
if ($(window).width() >= 970 && $(window).width() < 1150){
		$('.webs').attr('data-items', '5');
	}
		if ($(window).width() >= 790 && $(window).width() < 969){
		$('.webs').attr('data-items', '4');
	}
		if ($(window).width() >= 620 && $(window).width() < 789){
		$('.webs').attr('data-items', '3');
	} 
	if ($(window).width() >= 449 && $(window).width() < 619 ){
		$('.webs').attr('data-items', '2');
	}
	if ($(window).width() < 449){
		$('.webs').attr('data-items', '1');
	}
		if ($(window).width() >= 900 && $(window).width() < 1150){
		$('.products').attr('data-items', '3');
	}
		if ($(window).width() >= 630 && $(window).width() < 899){
		$('.products').attr('data-items', '2');
	}
		if ($(window).width() >= 480 && $(window).width() < 629){
		$('.products').attr('data-items', '1');
	}
	if ($(window).width() < 479){
		$('.products').attr('data-items', '1');
	}
	
		if ($(window).width() >= 900 && $(window).width() < 1150){
		$('.dtac').attr('data-items', '4');
	}
		if ($(window).width() >= 630 && $(window).width() < 899){
		$('.dtac').attr('data-items', '3');
	}
		if ($(window).width() >= 480 && $(window).width() < 629){
		$('.dtac').attr('data-items', '2');
	}
 $("#slider3").responsiveSlides({
                        manualControls: '#slider3-pager',
                        maxwidth: 540
                    });
	        $(".owl-carousel").each(function(index, el) {
          var config = $(this).data();
          config.navText = ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'];
          config.smartSpeed="300";
          if($(this).hasClass('owl-style2')){
            config.animateOut="fadeOut";
            config.animateIn="fadeIn";    
          }
          $(this).owlCarousel(config);
        });
        $(".owl-carousel-vertical").each(function(index, el) {
          var config = $(this).data();
          config.navText = ['<span class="icon-up"></span>','<span class="icon-down"></span>'];
          config.smartSpeed="900";
          config.animateOut="";
            config.animateIn="fadeInUp";
          $(this).owlCarousel(config);
        });
	$('<i style="color:#0D97FF; padding-right:8px" class="fa fa-arrow-circle-o-right"></i>').insertBefore('aside ul.menu a');
$('.menu-item-has-children a').addClass('parent');
	$('.sub-menu a').removeClass();
$('#menu-menu .menu-item-has-children .sub-menu .menu-item-has-children a').addClass('parentC');
	$('#menu-menu .menu-item-has-children .sub-menu .sub-menu a').removeClass();
	$('#menu-menu .parent').append('<i style="position: absolute;right: 3px;float:right" class="fa fa-sort-down"></i>');
	$('#menu-menu .parentC').append('<i style="position: absolute;right: 3px;float:right" class="fa fa-angle-double-right"></i>');
	$('#menu-menu .parent').attr('href', 'javascript:;');

$('#menu-menu .sub-menu a i').removeClass('fa-sort-down');
	$('#menu-menu .menu-item-has-children').each(function(){
	$(this).hover(function(){
		$(this).find('.sub-menu').toggleClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
});

$('#menu-menu .sub-menu .menu-item-has-children').each(function(){
	$(this).hover(function(){
		$(this).find('.sub-menu').toggleClass('show');
	});
	$(this).on('mouseleave', function(){
		$(this).find('.sub-menu').removeClass('show');
	});
});
		$('.next a').append('<span class="next-1">»</span>');
		$('.prev a').append('<span class="prev-1">«</span>');
			$('a.next').append('<span class="next-1">»</span>');
		$('a.prev').append('<span class="prev-1">«</span>');
		

				jQuery('.fb-page1').toggleClass('hide');
			jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Advisory').css({'bottom':0});
		jQuery('#closefbchat').click(function(){
			jQuery('.fb-page1').toggleClass('hide');
			if(jQuery('.fb-page1').hasClass('hide')){
				jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Advisory').css({'bottom':0});
			}
			else{
				jQuery('#closefbchat').text('Turn off').css({'bottom':299});
			}
		});
			txt = $('.woocommerce-breadcrumb .current, .breadcrumb .current').text();
	if(txt.length > 25){
	$('.woocommerce-breadcrumb .current, .breadcrumb .current').text(txt.substring(0,25) + '...');}
	

		var srss = $('.v').attr('src');
		if($.trim(srss) !== ""){
			$('.video').closest('aside').fadeIn();
		}
				if($.trim($('.rel-nd .products').text()) === ""){
					$('.relate').remove();
				}
							$('.view').click(function(){
						var uri = $(this).closest('.contentBox').find('a.lien-ket').attr('href');
							var url = "<?php echo site_url();?>/demo?url=" + uri;
								window.location.href= url;
					});

$(".products li").each(function(){
	$(this).hover(function(){
		var height = $(this).find('img').height();
		$(this).find('img').animate({'top': 420 - height});
	});
	$(this).on('mouseleave', function(){
		var height = $(this).find('img').height();
		$(this).find('img').animate({'top': 0});
	});
});

	$('.nd').hover(function(){
		var height = $(this).find('img').height();
		$(this).find('img').animate({'top': 420 - height});
	});
	$('.nd').on('mouseleave', function(){
		var height = $(this).find('img').height();
		$(this).find('img').animate({'top': 0});
	});
		
			  $(window).scroll(function() {
				  if ($(window).width() > 1024){
                    if ($(this).scrollTop() > $('.on').offset().top) {
                        $('.process_top').show(1800);
						$('.process_bottom').show(2200);
                    } 
				  }else{
					  $('.process_top').show(1800);
						$('.process_bottom').show(2200);
				  }
                });
				
});
 (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));