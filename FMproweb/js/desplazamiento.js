$(document).on("ready",function(){
	$("#ir").on("click", function(){
		$("html,body").animate({ scrollTop : $("#destino").offset().top  }, 1500 );
	});
});