$(document).ready(function () {
    
// showcase pic

    $(".zoom").click(function(){

        var src = $(this).parents(".pic").children(".pic-modal").children(".image").attr("src");
        var title = $(this).parents(".pic").children(".pic-modal").children(".project").children(".title").text();
        var des = $(this).parents(".pic").children(".pic-modal").children(".project").children(".description").text();

        $(this).parents(".pic").children(".pic-modal").addClass("active-modal");

        $("#modal-image").attr("src",src);
        $("#modal-title").text(title);
        $("#modal-description").text(des);

    });

    $(".prv").click(function() {
        if ($(" .active-modal").parents(".pic").prev().is(".pic")) {
            $(".active-modal").parents(".pic").prev().children(".pic-modal").addClass("active-modal");

            $("#modal-image").fadeOut("200",function (){

                $(".active-modal").last().removeClass("active-modal");

                var src = $(" .active-modal .image").attr("src");
                var title = $(" .active-modal .project .title").text();
                var des = $(" .active-modal .project .description").text();

                $("#modal-image").attr("src",src);
                $("#modal-title").text(title);
                $("#modal-description").text(des);
            });
            $("#modal-image").fadeIn("200");
        }else{
            $(" .pic .pic-modal").last().addClass("active-modal");
            $(" .pic .pic-modal").first().removeClass("active-modal");



            $("#modal-image").fadeOut("200",function (){

                var src = $(" .active-modal .image").attr("src");
                var title = $(" .active-modal .project .title").text();
                var des = $(" .active-modal .project .description").text();

                $("#modal-image").attr("src",src);
                $("#modal-title").text(title);
                $("#modal-description").text(des);
            });
            $("#modal-image").fadeIn("200");
        }
    });


    $(".next").click(function() {
        if ($(" .active-modal").parents(".pic").next().is(".pic")) {
            $(".active-modal").parents(".pic").next().children(".pic-modal").addClass("active-modal");

            $("#modal-image").fadeOut("200",function (){

                $(".active-modal").first().removeClass("active-modal");

                var src = $(" .active-modal .image").attr("src");
                var title = $(" .active-modal .project .title").text();
                var des = $(" .active-modal .project .description").text();

                $("#modal-image").attr("src",src);
                $("#modal-title").text(title);
                $("#modal-description").text(des);
            });
            $("#modal-image").fadeIn("200");
        }else{
            $(" .pic .pic-modal").first().addClass("active-modal");
            $(" .pic .pic-modal").last().removeClass("active-modal");

            $("#modal-image").fadeOut("200",function (){

                var src = $(" .active-modal .image").attr("src");
                var title = $(" .active-modal .project .title").text();
                var des = $(" .active-modal .project .description").text();

                $("#modal-image").attr("src",src);
                $("#modal-title").text(title);
                $("#modal-description").text(des);
            });
            $("#modal-image").fadeIn("200");
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
            $("#email_errors").text("Bạn chưa nhập email!").text.fontcolor("white");
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

// banner carousel
$(".left").click(function () {
    $("#mycarousel").carousel("prev");
});
$(".right").click(function () {
    $("#mycarousel").carousel("next");
});
})