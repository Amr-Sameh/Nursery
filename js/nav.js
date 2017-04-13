/**
 * Created by meir on 13/04/17.
 */
$(document).ready(function () {


    $(".search-btn").click(function () {
      var  $delay,$delay2;
        if($('.nav-switch').css('display')=='none'){
            $delay=1000;
        $delay2=0;}
        else{
            $delay=0;
        $delay2=1000;}
        $(".nav-switch").fadeToggle($delay);
        $("nav form").fadeToggle($delay2);


    });



    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 90) {
            $('nav').addClass('navbar-fixed-top');
        } else {
            $('nav').removeClass('navbar-fixed-top');
        }
    });




    $(".login-link").click(function()
    {
        $("body").load("login.php");
    });
});