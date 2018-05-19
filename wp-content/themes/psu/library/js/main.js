
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}

var viewport = updateViewportDimensions();

var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();


var timeToWaitForLast = 100;

/**/

function toggleNav() {

	if ($( "#mobile-menu" ).hasClass( "menu-open" )){

		$( "#mobile-menu" ).removeClass( "menu-open" );
		$( "#content-container" ).removeClass( "menu-open" );
		$( "html" ).removeClass( "menu-open" );
	} else {

	    $( "#mobile-menu" ).addClass( "menu-open" );
	    $( "#content-container" ).addClass( "menu-open" );
	    $( "html" ).addClass( "menu-open" );
	};
};

$(function() {
	// homepage hover + icon style
	$("#buy").hover(function(){
	    $(".ss-dollarsign").css("color", "#009933");
	    }, function(){
	    $(".ss-dollarsign").css("color", "#ccc");
	});
	$("#rent").hover(function(){
	    $(".ss-key").css("color", "#009933");
	    }, function(){
	    $(".ss-key").css("color", "#ccc");
	});
	$("#sell").hover(function(){
	    $(".ss-home").css("color", "#009933");
	    }, function(){
	    $(".ss-home").css("color", "#ccc");
	});
	/////////

});
