$('#pj1').hover(
    function() { $('#desc1').addClass('pj_active') },
    function() { $('#desc1').removeClass('pj_active') }
)
$('#pj2').hover(
    function() { $('#desc2').addClass('pj_active2') },
    function() { $('#desc2').removeClass('pj_active2') }
)
$('#pj3').hover(
    function() { $('#desc3').addClass('pj_active') },
    function() { $('#desc3').removeClass('pj_active') }
)
$('#pj4').hover(
    function() { $('#desc4').addClass('pj_active') },
    function() { $('#desc4').removeClass('pj_active') }
)
$('#pj5').hover(
    function() { $('#desc5').addClass('pj_active') },
    function() { $('#desc5').removeClass('pj_active') }
)

//Video

$('.pj_video').parent().click(function() {
    if ($(this).children(".pj_video").get(0).paused) {
        $(".pj_video").css("filter", "brightness(100%)");
        $(this).children(".pj_video").get(0).play();
        $(this).children(".playpause").fadeOut();
    } else {
        $(".pj_video").css("filter", "brightness(20%)");
        $(this).children(".pj_video").get(0).pause();
        $(this).children(".playpause").fadeIn();
    }
});