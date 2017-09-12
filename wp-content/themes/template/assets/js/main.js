jQuery.noConflict();
jQuery(document).ready(function($){
	$('.next a').append('<span class="next-1">»</span>');
		$('.prev a').append('<span class="prev-1">«</span>');
			$('a.next').append('<span class="next-1">»</span>');
		$('a.prev').append('<span class="prev-1">«</span>');
		$('ul.cat li a').wrapInner('<span></span>');
		$('<i style="padding-right:7px" class="fa fa-angle-right"></i>').insertBefore('ul.cat li a span');
		
});