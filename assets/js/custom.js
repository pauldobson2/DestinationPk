$(document).ready(function () {


    setTimeout(function () {
        $('body').addClass('loaded');

    }, 1000);

    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");
    });


    // executes when HTML-Document is loaded and DOM is ready


    if (screen.width <= 480) {
        // id mobile
    } else {

    }
    $(document).scroll(function (e) {
        var scrollTop = $(document).scrollTop();
        if (scrollTop > 500) {
            // console.log(scrollTop);
            $('.div-menu').removeClass('div-menu-normal').addClass('menu-fixed-top');
        } else {
            $('.div-menu').removeClass('menu-fixed-top').addClass('div-menu-normal');
        }
    });


// breakpoint and up
    $(window).resize(function () {
        if ($(window).width() >= 980) {

            // when you hover a toggle show its dropdown menu
            $(".navbar .dropdown-toggle").hover(function () {
                $(this).parent().toggleClass("show");
                $(this).parent().find(".dropdown-menu").toggleClass("show");
            });

            // hide the menu when the mouse leaves the dropdown
            $(".navbar .dropdown-menu").mouseleave(function () {
                $(this).removeClass("show");
            });

            // do something here
        }
    });


// document ready
});

/* disabilitia la collassabilità dei toggle */
$('.no-collapsable').on('click', function (e) {
    e.stopPropagation();
});

$(".border-collapse").click(function() {
    $(this).next('.body-itinerario').slideToggle('fast');
    $(this).find('.con-aqua-txt').toggleClass('toggledisplay');
});


