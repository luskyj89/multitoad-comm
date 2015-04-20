

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

}


$(document).ready(function() {
    init();
});
