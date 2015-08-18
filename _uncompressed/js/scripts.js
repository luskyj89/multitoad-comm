var hamburger = $("#hamburger"),
    burgerBtn = $("#hamburger-btn");

// function closeNav() {
//     burgerBtn.removeClass("active");
//     hamburger.removeClass("active");
// }

function init() {
    console.log("init");

    burgerBtn.click(function(e) {
        e.preventDefault();
        if( hamburger.hasClass("active") ){
            hamburger.removeClass("active");
            burgerBtn.removeClass("active");
            hamburger.slideUp();
        } else {
            hamburger.addClass("active");
            burgerBtn.addClass("active");
            hamburger.slideDown();
        }

        //$("nav").toggleClass("active");
    });

    $(".MeButton").click(function() {
        console.log("click");
        $(this).find(".Alert").css("opacity", 0);
    });

    // if( $( "a[href='/community/profile/2/YOGZULA']" ).html() == "YOGZULA") {
    //     $( "a[href='/community/profile/2/YOGZULA']" ).html("FART");
    //     $( "a[href='/community/profile/YOGZULA']").html("FART");
    // }

}


$(document).ready(function() {
    init();
});
