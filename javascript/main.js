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

    $('.bxslider').bxSlider({
        auto: true,
        pager: false,
        pause: 10000,
        touchEnabled: false,
        controls: false
    });

    /*
    $(document).on('scrollstart', function() {
        alert('hi');
        var arrows =  $('.ls-nav-left-arrow .ls-nav-right-arrow');
        arrows.removeClass('ls-hidden');
        arrows.css('opacity', '0');
    });

    $(document).on('scrollstart', function() {
        var arrows =  $('.ls-nav-left-arrow .ls-nav-right-arrow');
        arrows.addClass('ls-hidden');
        arrows.css('opacity', '1');
    });
    */
});
