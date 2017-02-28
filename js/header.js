	$(document).ready (function () {
		$("#g").hide();
		$("#a").hide();
		$("#i").hide();
		$("#ar").hide();
		$("#logo").bind ("mouseover", function () {
			$("#a").fadeIn(2000);
			$("#g").fadeIn(1000);
			$("#ar").fadeIn(4000);
			$("#i").fadeIn(3000);
		});
	});