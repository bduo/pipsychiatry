/*eslint-env jquery*/

/*
File Name: pip.js
Programmer: Brandon El Haj
*/
	
if ($(window).width() <= 640) {
    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").show();

    $(".hamburger").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".hamburger").hide();
        $(".cross").show();
    });

    $(".cross").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".cross").hide();
        $(".hamburger").show();
    });
}

