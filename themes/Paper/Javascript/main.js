var
	getUserTheme,
	getUserLang;

function ToggleDialog(show, html){
	if(show == true){
		$("#blackOut").fadeIn("fast");
		$("#blackOutBox").slideDown("slow");
		$("#blackOutBoxContent").html(html);
		$("body").css('overflow', 'hidden');
	} else {
		$("#blackOut").fadeOut("slow");
		$("#blackOutBox").slideUp("fast");
		$("body").css('overflow', 'auto');
	}
}

function setCookie(name, val, time){
    var d = new Date();
    d.setTime(d.getTime() + (time * 86400000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + val + "; " + expires;
}

function getCookie(cook){
    var name = cook + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++){
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function regexEscape(string){
    return string.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
}

function HbbRegex(string, flag){
    return new RegExp("RegEx" + regexEscape(string) + "RegEx", flag);
}

var userToggle;

function toggleUserCard(userId){
	var userCard = $("#blackOutCard"),
			box = $(".userCardProfile");
	if(!userToggle){
		$("body").css('overflow', 'hidden');
		userToggle = true;
		$.ajax({
			type	:	'POST',
			url		:	'core/controllers/usercard.php',
			data	:	{
				uid				:	userId,
				theme 		: getUserTheme,
				language 	: getUserLang
			},
			success	:	function(data){
				box.html(data);
				userCard.fadeIn();
			}
		});
	}
	$(document).mouseup(function (e){
			var element = $(".userCardProfile");

			if (!box.is(e.target) && box.has(e.target).length === 0){
					userCard.fadeOut("fast");
					userToggle = false;
					$("body").css('overflow', 'auto');
			}
	});
}

$(document).ready(function(){
	getUserTheme = $("#communityConfig").data('theme'),
	getUserLang = $("#communityConfig").data('language');
	$(".button-collapse").sideNav();
	$(".tooltip").hover(
		function(e){

		}, function(){

		}
	);
});
