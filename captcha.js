$(document).ready(function() {
    $("#recarga").click(function() {
        var captchaImagen = $('#captcha').attr('src');
        captchaImagen = captchaImagen.substring(0, captchaImagen.lastIndexOf("?"));
        captchaImagen = captchaImagen + "?rand=" + Math.random() * 1000;
        $('#captcha').attr('src', captchaImagen);
    });
});