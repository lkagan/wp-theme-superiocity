function setEmailLink(elementID)
{
    var email = 'ser' + 'vice' + '@su' + 'perio' + 'city.co' + 'm';
    email = '<a href="mai' + 'lto:' + email + '">' + email + '</a>';
    document.getElementById(elementID).innerHTML = email;
}

$(function() {
    $('#menu-button').click(function(e) {
        e.preventDefault();
        $('.menu-main-menu-container').toggle(400);
    });

    // Minor portfolio plugin tweaks.
    $('.main-image-block_2 a, .image-block_3 a').click(function(e) { e.preventDefault(); });
    $('.right-block .button-block a').html('View Site');

    initSlider();
});


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
