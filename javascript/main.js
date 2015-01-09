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
});
