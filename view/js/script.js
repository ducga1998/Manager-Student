$(document).ready(function() {
    $(document).on("click", ".showConfession", function() {
        var x = $(".Confession").parent().find(".hide").removeClass("show");
        $(".Confession").addClass("show");
        console.log("test");




    });
    $(document).on("click", ".ShowPostHistory", function() {
        var x = $(".PostHistory").parent().find(".hide").removeClass("show");
        console.log(x);
        $(".PostHistory").addClass("show");





    });
    $(document).on("click", ".PostConfessions", function() {
        var x = $(".PostHistory").parent().find(".hide").removeClass("show");
        console.log(x);
        $(".PostConfession").addClass("show");
    });
    $(document).on("click", ".btn-post", function() {
        /* id, UserName, Title,Content,view,Category */
        var id = $(this).attr("iduser");
        var UserName = $(this).attr("username");
        var title = $("#TitleConfession").val();
        var Category = $("#Category").val();
        var content = $("#Content").val();
        var StringArray = id + "." + UserName + "." + title + "." + content + "." + Category;
        console.log(StringArray);
        $.ajax({
            type: "GET",
            url: "./view/RequestDataBase.php",

            data: {
                'StringArray': StringArray

            },
            cache: false,
            success: function(data) {
                $(".success").text(data);
                $(".success").addClass("showAlert");
                $("#TitleConfession").val("");
                $("#Category").val("");
                $("#Content").val("");
            }
        });


    });






});