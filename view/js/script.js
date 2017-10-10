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


});