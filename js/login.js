/**
 * Created by meir on 15/03/17.
 */
$(document).ready(function () {
   $(".layer").css("opacity","100");

    $(".login").css({
        "top":"10%",
        "opacity":"100"
    });
    var mq = window.matchMedia( "(max-width: 768px)" );
    if (mq.matches){
        $(".login").css("top","0%");
    }
    window.onresize = function() {
        if (mq.matches){
            $(".login").css("top","0%");
        }else {
        $(".login").css({
            "top":"10%",
        });
        }
    };



});