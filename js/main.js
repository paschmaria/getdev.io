$(document).ready(function() {

	setTimeout(function(){

		$("#loading-mask").animate().hide("2000");
		$('#body').animate().show("2000");

	}, 6000)

	$(window).scroll(function() {

		var $windowHeight = $(window).height();
			$windowScrollTop = $(window).scrollTop();
			$windowScrollBottom = $windowHeight + $windowScrollTop;
			$stickyheader = $("header.sticky-nav");
			$footer = $("footer.animated-footer")
			$paddingTop = 1750;

		if ($windowScrollBottom > $windowHeight) {

			$stickyheader.addClass('stuck');

		} 
		else if ($windowScrollBottom == $windowHeight) {

			$stickyheader.removeClass('stuck');

		};

		// if ($windowScrollTop > $paddingTop) {

		// 	$footer.addClass("lightSpeedIn");

		// }
		// else{

		// 	$footer.removeClass("lightSpeedIn");

		// };
	});

	$("button.reg-button").click(function() {

		$("#dev-signup").hide();
		$("#dev-signup-page1").show();

	});
});