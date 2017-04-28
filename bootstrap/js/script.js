$(window).resize(function(){
		var width = $(window).width();
		var source = "/img/impression-";		
		
		if (width <= 360 ){
			source += "xs.png";
		}else if(width > 360 && width <= 486 ){
			source += "sm.png";
		}else if(width > 486 && width <= 768 ){
			source += "md.png";
		}else if(width > 768 && width <= 1024 ){
			source += "lg.png";
		}else {
			source += "xl.png";
		}
		$("#img-impact").attr("src",source);
		
		
		$('.img-wrapper').each(function() {
        $(this).height($(this).width());
		});
		
		$('.help.lvl-5').each(function() {
        $(this).height($(this).width());
		});
    
});
//For function toggle 
/*
$(".functions.lvl-4").click(function(){
	if( $(window).width() > 800 ){
		return;
	}else{
		$(this).find('.content-wrapper').slideToggle();
		$(this).toggleClass("detailed");
	}
});
*/
// Trigger resize script when doc is ready
$(document).ready(function(){
	$(window).resize();
});