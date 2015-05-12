

function closeNav() {
    $("nav").removeClass("active");
    $("#hamburger").removeClass("active");
}


function init() {
    console.log("init");

    // $("#hamburger").click(function() {
    //     $("#hamburger").toggleClass("active");
    //     $("nav").toggleClass("active");
    // });
    //
    // $(".entry").click(function(){
    //     closeNav();
    // });

    $(".MeButton").click(function() {
        console.log("click");
        $(this).find(".Alert").css("opacity", 0);
    });

}


$(document).ready(function() {
    init();
});
