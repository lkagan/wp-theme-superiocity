function setEmailLink(elementID)
{
    var email = 'ser' + 'vice' + '@su' + 'perio' + 'city.co' + 'm';
    email = '<a href="mai' + 'lto:' + email + '">' + email + '</a>';
    document.getElementById(elementID).innerHTML = email;
}