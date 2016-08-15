$(document).ready(function () {
    $('#stage').load('pages/home.php');

    $("#home").click(function () {
        $('#stage').load('pages/home.php');
    });

    $("#about").click(function () {
        $('#stage').load('pages/about.php');
    });

    $("#contactus").click(function () {
        $('#stage').load('pages/contactus.php');
    });

    $("#toc").click(function () {
        $('#stage').load('pages/toc.php');
    });

    $("#login").click(function () {
        $('#stage').load('pages/login.php');
    });
});