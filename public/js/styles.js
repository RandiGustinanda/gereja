$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('scroll');
    } else {
        $('.navbar').removeClass('scroll');
    }
});