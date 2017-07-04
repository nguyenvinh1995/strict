$(document).ready(function () {

// showcase

    $("#mycarousel1").carousel();


    $(".item1").click(function () {
        $("#mycarousel1").carousel(0);
    });
    $(".item2").click(function () {
        $("#mycarousel1").carousel(1);
    });
    $(".item3").click(function () {
        $("#mycarousel1").carousel(2);
    });
    $(".item4").click(function () {
        $("#mycarousel1").carousel(3);
    });
    $(".item5").click(function () {
        $("#mycarousel1").carousel(4);
    });
    $(".item6").click(function () {
        $("#mycarousel1").carousel(5);
    });


    $(".left").click(function () {
        $("#mycarousel1").carousel("prev");
    });
    $(".right").click(function () {
        $("#mycarousel1").carousel("next");
    });

    
// showcase pic

    $(".zoom").click(function(){

        var src = $(this).parents(".pic").children(".image").attr("src");

        $(this).parents(".pic").children(".image").addClass("active-modal");

        $("#modal-image").attr("src",src);

    });

    $(".prv").click(function() {
        if ($(".pic-showcase .active-modal").parents(".pic").prev().is(".pic")) {

            $(".pic-showcase .active-modal").parents(".pic").prev().children(".image").addClass("active-modal");

            $("#modal-image").fadeOut('300',function (){

                $(".active-modal").last().removeClass("active-modal");

                var src = $(".pic-showcase .active-modal").attr("src");

                $("#modal-image").attr("src",src);
            });
            $("#modal-image").fadeIn('300');
        }else{

            $(".pic-showcase .pic .image").last().addClass("active-modal");
            $(".pic-showcase .pic .image").first().removeClass("active-modal");

            $("#modal-image").fadeOut('300',function (){

                var src = $(".pic-showcase .pic .image").last().attr("src");

                $("#modal-image").attr("src",src);
            });
            $("#modal-image").fadeIn('300');
        }

    });

    $(".next").click(function() {
        if ($(".pic-showcase .active-modal").parents(".pic").next().is(".pic")) {

            $(".pic-showcase .active-modal").parents(".pic").next().children(".image").addClass("active-modal");
            $("#modal-image").fadeOut('300',function () {

                $(".active-modal").first().removeClass("active-modal");

                var src = $(".pic-showcase .active-modal").attr("src");

                $("#modal-image").attr("src",src);
            });
            $("#modal-image").fadeIn('300');
        }else{

            $(".pic-showcase .pic .image").first().addClass("active-modal");
            $(".pic-showcase .pic .image").last().removeClass("active-modal");
            $("#modal-image").fadeOut('300',function (){

                var src = $(".pic-showcase .pic .image").first().attr("src");
               
                $("#modal-image").attr("src",src);

            });
            $("#modal-image").fadeIn('300');
        }
    });
    
    
    
    
    
    
// form
$("#my-form").submit(function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var flag = true;
    if (name == "") {
        $("#name_errors").text("Bạn chưa nhập tên!");
        flag = false;
    } else {
        $("#name_errors").text("");
        if (email == "") {
            $("#email_errors").text("Bạn chưa nhập email!");
            flag = false;
        } else {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var result = re.test(email);
            if (result == false) {
                $("#email_errors").text("Email sai định dạng!");
                flag = false;
            } else {
                $("#email_errors").text("");
                if (message == "") {
                    $("#message_errors").text("Bạn chưa nhập message!");
                    flag = false;
                } else {
                    flag = true;
                }
            }
        }
    }
    return flag;
});

// logo
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').stop().animate({scrollTop: target.offset().top}, 1000);
                return false;
            }
        }
    });
});


// banner
$(".left").click(function () {
    $("#mycarousel").carousel("prev");
});
$(".right").click(function () {
    $("#mycarousel").carousel("next");
});


})