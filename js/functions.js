$( document ).ready(function(){
	//INTRO
	$("#intro").click(function(){
		$(this).effect("blind", "slow");
		return false;
	});
	//HIDING ALL ITEMS
	function hideAll(){
		$(".menu_despl").animate({height: "100px"});
			$(".link_despl").show();
			$(".cont_img").hide();
			$(".despl_text").hide();
			$(".link_hide").hide();
			return false;
	}
	//SECTION CHANGE
	$(".menu_option").click(function(){
			hideAll();
			$("#cont_sections").fadeIn("slow");
			var section = "#" + $(this).html();			
			$(".section").hide();
			$(section).fadeIn("slow");			
			return false;
	});
	//INKLINGS SECTION FUNCTIONS
	$(".link_despl").click(function(){
			$(this).parent().animate({height: "400px"});
			$(this).hide();
			$(this).siblings(".cont_img").fadeIn("slow");
			$(this).siblings(".despl_text").fadeIn("slow", function(){$(this).siblings(".link_hide").fadeIn("fast");});
			return false;
	});
	$(".link_hide").click(function(){
			$(this).fadeOut("slow");
			$(this).siblings(".cont_img").fadeOut("fast");
			$(this).parent().animate({height: "100px"});
			$(this).siblings(".despl_text").fadeOut("fast", function(){$(this).siblings(".link_despl").fadeIn("slow");});
			return false;
	});
	$(".cont_img").click(function(){
			$(this).effect("bounce" , "slow");
			return false;
	});

});