
jQuery(document).ready(function($) {

    $('#menu-button').mouseup(function(e) {
        e.preventDefault();
        $('.menu-main-menu-container').toggle(400);
    });

    // Minor portfolio plugin tweaks.
    $('.main-image-block_2 a, .image-block_3 a').click(function(e) { e.preventDefault(); return false; });
    $('.right-block .button-block a').html('View Site');
});


document.addEventListener('DOMContentLoaded', function() {

    // iOS-specific functionality.
    (function() {
        // Get a flag telling us if this is an iOS device.
        var iOS = /iPad|iPhone|iPod|CriOS/.test(navigator.userAgent) && !window.MSStream;

        // Change fixed background to scroll.
        if (iOS) {
            var fixedBgElements = document.getElementsByClassName('fixed-bg');

            if (fixedBgElements != undefined) {
                for (var i = 0; i < fixedBgElements.length; ++i) {
                    fixedBgElements[i].style.backgroundAttachment = 'scroll';
                }
            }
        }
    })();
});


document.addEventListener( 'scroll', animateItems );


/**
 * Check if an element is within the window viewport.
 */
function inViewport(element, padding)
{
    if(element == undefined) {
        return false;
    }

    padding = padding || 0;
    var boundingBox = element.getBoundingClientRect();
    var windowHeight = document.documentElement.clientHeight;
    var topLimit = padding;
    var bottomLimit = windowHeight - padding;

    if ( ( boundingBox.top > topLimit || boundingBox.bottom > topLimit ) &&
        ( boundingBox.top < bottomLimit || boundingBox.bottom < bottomLimit ) ) {
        return true;
    }

}

/**
 * Animate items in viewport.
 */
function animateItems()
{
    var quotes = document.querySelectorAll('.home .quotes li');

    // Animate the services links
    if (quotes) {
        for (var i = 0; i < quotes.length; ++i) {
            if ( inViewport( quotes[i] ) ) {
                quotes[i].classList.add('animate');
            } else {
                quotes[i].classList.remove('animate');
            }
        }
    }
}
