$(window).resize(function(){
		$('.img-wrapper').each(function() {
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
	
	$( "#cookie-btn" ).click(function() {
		var expiredate = new Date();
		expiredate.setTime(expiredate.getTime() + 31536000000);
		document.cookie = "cookie_confirm = ok; expires = " + expiredate + "; path = /";
		$("#cookie-confirm").hide("300");
	});
	
	$('*[data-video]').click(function(){
		_paq.push(['trackEvent', 'Videos', 'open', $(this).data("video")]);
	});
	
	$('video').on('play',function(){
		_paq.push(['trackEvent', 'Videos', 'play', $(this).data("videoname")]);
	});
});

