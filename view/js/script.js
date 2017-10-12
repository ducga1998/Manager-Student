$(document).ready(function() {
    $(document).on("click", ".showConfession", function() {
        var x = $(".Confession").parent().find(".hide").removeClass("show");
        $(".Confession").addClass("show");

    });
    $(document).on("click", ".PostConfessions", function() {
        var x = $(".PostConfession").parent().find(".hide").removeClass("show");
        $(".PostConfession").addClass("show");

    });
    $(document).on("click", ".CheckPost", function() {
        var x = $(".CheckPostContainer").parent().find(".hide").removeClass("show");
        $(".CheckPostContainer").addClass("show");

    });
    $(document).on("click", ".ShowPostHistory", function() {
        var x = $(".PostHistory").parent().find(".hide").removeClass("show");

        $(".PostHistory").addClass("show");
    });
    $(document).on("click", ".ShowPostHistory", function() {
        // xóa đi cái cũ
        var x = $(".PostHistory").parent().find(".hide").removeClass("show");

        // thêm .show để nó hiển thị
        $(".PostHistory").addClass("show");
    });
    $(document).on("click", ".GrantRight", function() {
        // xóa đi cái cũ
        var x = $(".GrantUser").parent().find(".hide").removeClass("show");

        // thêm .show để nó hiển thị
        $(".GrantUser").addClass("show");
    });




    $(document).on("click", ".InfoMation", function() {
        // xóa đi cái cũ
        var x = $(".InfomationUser").parent().find(".hide").removeClass("show");
        console.log(x);
        // thêm .show để nó hiển thị
        $(".InfomationUser").addClass("show");
    });

    $(document).on("click", ".btn-updateInfo", function() {
        var form = $('#FormUpdateInfoUser').serialize();
        console.log(form);



        /*  var formData = $(form).serialize(); */
        $.ajax({
            type: "GET",
            url: "./view/UpdateInfoUser.php",

            data: {
                'formData': formData

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

    $(document).on("click", ".btn-post", function() {
        /* id, UserName, Title,Content,view,Category */
        var id = $(this).attr("iduser");
        var id_post = $(this).attr("id_post");

        var UserName = $(this).attr("username");
        var title = $("#TitleConfession").val();
        var Category = $("#Category").val();
        var content = $("#Content").val();
        var StringArray = id + "." + UserName + "." + title + "." + content + "." + Category + "." + id_post;

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
    $(document).on("click", ".btn-browse", function() {
        /* id, UserName, Title,Content,view,Category */
        var Accept = $(this).attr("id_post");


        $.ajax({
            type: "GET",
            url: "./view/Accept.php",

            data: {
                'Accept': Accept

            },
            cache: false,
            success: function(data) {

                console.log(x);


            }
        });
        $(this).parent().parent().html("");


    });
    $(document).on("click", ".btnDelete", function() {
        /* id, UserName, Title,Content,view,Category */
        var id = $(this).attr("id");
        console.log(id);


        $.ajax({
            type: "GET",
            url: "./view/DeleteInfoUser.php",

            data: {
                'id_delete': id

            },
            cache: false,
            success: function(data) {

            }



        });
        /*  $(this).parent().parent().html(""); */


    });




});