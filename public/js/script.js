

$(document).scroll(function() {
	var startViewHeight = $('.start-view').height();
	var scrollHeight = $(this).scrollTop();

	if (scrollHeight > startViewHeight) {
		$('.scroll-nav').slideDown();
	} else {
		$('.scroll-nav').css('display', 'none');
	}
});






















//nav buttons

$("#home1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#home").offset().top
    }, 500);
});

$("#abou1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#abou").offset().top
    }, 500);
});

$("#proj1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#proj").offset().top
    }, 500);
});

$("#educ1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#educ").offset().top
    }, 500);
});

$("#resu1").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#resu").offset().top
    }, 500);
});


$("#home2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#home").offset().top
    }, 500);
});

$("#abou2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#abou").offset().top
    }, 500);
});

$("#proj2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#proj").offset().top
    }, 500);
});

$("#educ2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#educ").offset().top
    }, 500);
});

$("#resu2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#resu").offset().top
    }, 500);
});