$(document).ready(function(){
	var categoryToggle = [];
	
	$(".category_title").each(function(){
		if($(this).data('collapsed') == "1")
			categoryToggle[$(this).data('catid')] = false;	
	});
	
	$(".toggleCategory").click(function(){
		var catId = $(this).data('categoryid'),
			catShuffle = getCookie("cshfl");
		if(categoryToggle[catId] == false){
			$("#boardBontent_" + catId).slideDown(function(){
				$("#category_" + catId).removeClass("inactive");
			});
			categoryToggle[catId] = true;
			$(this).removeClass("fa-toggle-off").addClass("fa-toggle-on");
			var newCookie = catShuffle.replace("|" + catId, "");
			setCookie("cshfl", newCookie, 10000);
		} else {
			$("#boardBontent_" + catId).slideUp(function(){
				$("#category_" + catId).addClass("inactive");
			});
			categoryToggle[catId] = false;
			$(this).removeClass("fa-toggle-on").addClass("fa-toggle-off");
			if(catShuffle != '')
				setCookie("cshfl", catShuffle + "|" + catId, 10000);
			else
				setCookie("cshfl", "|" + catId, 10000);
		}
	});
	
	$(".mobileCategoryTitle").click(function(){
		var catId = $(this).data('categoryid'),
			catShuffle = getCookie("cshfl");
		if(categoryToggle[catId] == false){
			$("#mobileBoardContent_" + catId).slideDown();
			$("#mobileCat_" + catId).removeClass("inactive");
			categoryToggle[catId] = true;
			var newCookie = catShuffle.replace("|" + catId, "");
			setCookie("cshfl", newCookie, 10000);
		} else {
			$("#mobileBoardContent_" + catId).slideUp();
			$("#mobileCat_" + catId).addClass("inactive");
			categoryToggle[catId] = false;
			if(catShuffle != '')
				setCookie("cshfl", catShuffle + "|" + catId, 10000);
			else
				setCookie("cshfl", "|" + catId, 10000);
		}
	});
});