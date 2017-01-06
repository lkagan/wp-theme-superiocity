(function () {
    'use strict';

    // Get a flag telling us if this is an iOS device.
    var iOS = /iPad|iPhone|iPod|CriOS/.test(navigator.userAgent) && !window.MSStream;

    window.addEventListener('DOMContentLoaded', function () {

        // Change fixed background to scroll for iOS.
        if (iOS) {
            var fixedBgElements = document.getElementsByClassName('fixed-bg');

            if (fixedBgElements != undefined) {
                for (var i = 0; i < fixedBgElements.length; ++i) {
                    fixedBgElements[i].style.backgroundAttachment = 'scroll';
                }
            }
        }

        // Small screen menu open
        document.getElementsByClassName('menu-open')[0]
            .addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementsByClassName('main-nav-wrapper')[0].classList.add('open');
            });


        // Small screen menu close
        document.getElementsByClassName('menu-close')[0]
            .addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementsByClassName('main-nav-wrapper')[0].classList.remove('open');
            });
    });

    document.addEventListener( 'click', closeMenu);
    document.addEventListener( 'touchstart', closeMenu);
    document.addEventListener( 'scroll', animateItems );
})();


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
    var logos = document.querySelectorAll('.home .logos li');
    var bestFors = document.querySelectorAll('.care-plans .best-for');

    // Animate the quotes
    if (quotes) {
        for (var i = 0; i < quotes.length; ++i) {
            if ( inViewport( quotes[i] ) ) {
                quotes[i].classList.add('animate');
            } else {
                quotes[i].classList.remove('animate');
            }
        }
    }

    if (bestFors) {
        for (var i = 0; i < bestFors.length; ++i) {
            if ( inViewport( bestFors[i] ) ) {
                bestFors[i].classList.add('animate');
            } else {
                bestFors[i].classList.remove('animate');
            }
        }
    }

    // Animate the logos
    if (logos) {
        for (var i = 0; i < logos.length; ++i) {
            if ( inViewport( logos[i] ) ) {
                logos[i].classList.add('animate');
            } else {
                logos[i].classList.remove('animate');
            }
        }
    }
}


/**
 *  Close the the main nav if clicking or tapping outside of the nav on small screens.
 *
 * @param event
 * @returns {boolean}
 */
function closeMenu(event)
{
    var container = document.getElementsByClassName('main-nav-wrapper')[0];
    var openButton = document.getElementById('menu-button');

    if ( ! container ) {
        return false;
    }

    if( event.target === container || event.target === openButton || isChild( event.target, container )) {
        return false;
    }

    document.getElementsByClassName('main-nav-wrapper')[0].classList.remove('open');
}


/**
 * Is the given node a child of the supplied parent?
 *
 * @param node
 * @param parent
 * @returns {boolean}
 */
function isChild(node, parent)
{
    while ( node.parentNode !== null ) {
        if ( node === parent ) {
            return true;
        }

        node = node.parentNode;
    }

    return false;
}
