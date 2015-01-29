 //facebook
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=482790148437990&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
$(".mapCF").click(function() {
    $('#mapCF').css("z-index","9999");
});
//ATIVAÇÃO SHADOW BOX
Shadowbox.init({
        language: 'pt',
        player: ['img', 'html', 'swf']
});