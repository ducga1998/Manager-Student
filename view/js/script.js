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
        var MailUser = $("[name='MailUser']").val();
        var idUser = $("[name='idUser']").val();
        var NameUser = $("[name='NameUser']").val();
        var NumberPhoneUser = $("[name='NumberPhoneUser']").val();
        var birthDay = $("[name='birthDay']").val();
        var GrantUser = $("[name='GrantUser']").val();

        var CountryUser = $("[name='CountryUser']").val();
        var StringArray = idUser + "." + NameUser + "." + NumberPhoneUser + "." + birthDay + "." + GrantUser + "." + CountryUser + "." + MailUser;



        /*  var formData = $(form).serialize(); */
        $.ajax({
            type: "GET",
            url: "./view/UpdateInfoUser.php",

            data: {
                'formData': StringArray

            },
            cache: false,
            success: function(data) {

            }
        });

    });

    /* event click btn-updateinfo */
    $(document).on("click", ".btn-post", function(e) {
        /* id, UserName, Title,Content,view,Category */
        var StringArray = "";
        var arrayData = new Array();

        var i = 0;

        e.preventDefault();
        var data = $("#formPostConfession").serializeArray();

        data.forEach(function(e) {
            arrayData[i] = e.value;
            i++;

        }, this);
        StringArray = arrayData.toString();


        /*    var id = $(this).attr("iduser");
          var id_post = $(this).attr("id_post");

          var UserName = $(this).attr("username");
          var title = $("#TitleConfession").val();
          var Category = $("#Category").val();
          var content = $("#Content").val();
          var StringArray = id + "." + UserName + "." + title + "." + content + "." + Category + "." + id_post; */

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
    $(document).on("click", ".btn-delete", function() {
        /* id, UserName, Title,Content,view,Category */
        var DeletePost = $(this).attr("id_post");


        $.ajax({
            type: "GET",
            url: "./view/Accept.php",

            data: {
                'DeletePost': DeletePost

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
    /* code  cho select category */
    $('#selectCategory').change(function() {
        var element = $(this);
        var SelectName = element.val();
        console.log("test");

        $.ajax({
            type: "GET",
            url: "./view/Accept.php",

            data: {
                'selectName': SelectName

            },
            cache: false,
            success: function(data) {

                $("#SubSelectCategory").html(data);

            }



        });

    });

    function clickOption(id) {
        console.log(id);
    }
    $(".clickOption").focus(function() {
        var id = $(this).attr("idcategory");
        console.log(id);
    });
    $('#AddCategory').change(function() {
        var element = $(this);
        var SelectName = element.val();
        var id = element.attr("idcategory");
        // get attr option khi change select
        var option = $('option:selected', this).attr('idcategory');
        console.log(option);

        $.ajax({
            type: "GET",
            url: "./view/Accept.php",

            data: {
                'selectName': SelectName

            },
            cache: false,
            success: function(data) {

                $("#SubAddCategory").html(data);

            }



        });

    });






});