function initSlider() {
    var testimonials = document.querySelectorAll('.slider-wrapper li');
    var current = 0;
    $(testimonials[current]).addClass('visible');

    window.setInterval(function() {
        $(testimonials[current]).removeClass('visible');
        current = current == testimonials.length  - 1 ? 0 : current + 1;
        $(testimonials[current]).addClass('visible');
    }, 8000);
}

$(function() {
    $('#menu-button').mouseup(function(e) {
        e.preventDefault();
        $('.menu-main-menu-container').toggle(400);
    });

    // Minor portfolio plugin tweaks.
    $('.main-image-block_2 a, .image-block_3 a').click(function(e) { e.preventDefault(); return false; });
    $('.right-block .button-block a').html('View Site');

    initSlider();
});

