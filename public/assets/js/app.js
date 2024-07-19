/* Template Name: Nody - Responsive Bootstrap 5 Landing Page Template
   Author: Themesdesign
   Version: 1.0.0
   Created: Jan 2019
   File Description: Main js file
*/

// STICKY
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".sticky").addClass("nav-sticky");
    } else {
        $(".sticky").removeClass("nav-sticky");
    }
});

// // SmoothLink
// $('.nav-item a, .mouse-down a').on('click', function(event) {
//     var $anchor = $(this);
//     $('html, body').stop().animate({
//         scrollTop: $($anchor.attr('href')).offset().top - 0
//     }, 100, 'easeInOutExpo');
//     event.preventDefault();
// });

// // scrollspy
// $(".navbar-nav").scrollspy({
//     offset: 70
// });

// loader
$(window).on("load", function () {
    $("#status").fadeOut();
    $("#preloader").delay(350).fadeOut("slow");
    $("body").delay(350).css({
        overflow: "visible",
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(
        ".navbar-nav .nav-item > .nav-link, .navbar-nav .dropdown-menu .dropdown-item"
    );

    // Remove active class from all nav-items initially
    document.querySelectorAll(".navbar-nav .nav-item").forEach(function (item) {
        item.classList.remove("active");
    });

    // Retrieve the last active nav item from localStorage
    const activeLink = localStorage.getItem("activeLink");

    if (activeLink) {
        const activeElement = document.querySelector(`[href="${activeLink}"]`);
        if (activeElement) {
            const parentNavItem = activeElement.closest(".nav-item");
            if (parentNavItem) {
                parentNavItem.classList.add("active");
            }
        }
    }

    navLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            // Remove active class from all nav-items
            navLinks.forEach(function (nav) {
                const parentNavItem = nav.closest(".nav-item");
                const parentDropdownItem = nav.closest(".dropdown-menu");
                if (parentNavItem) {
                    parentNavItem.classList.remove("active");
                }else if (parentDropdownItem) {
                    parentDropdownItem.classList.remove("active");
                }
            });

            // Add active class to the clicked nav-item
            const parentNavItem = link.closest(".nav-item");
            if (parentNavItem) {
                parentNavItem.classList.add("active");
            }

            // Store the active link in localStorage
            localStorage.setItem("activeLink", link.getAttribute("href"));
            
          
        });
    });
});

$("#produkDropdown").on("click", function () {
    var icon = $(this).find("#dropdown-icon");

    if (icon.hasClass("bi-chevron-down")) {
        icon.removeClass("bi-chevron-down").addClass("bi-chevron-up");
    } else {
        icon.removeClass("bi-chevron-up").addClass("bi-chevron-down");
    }
});

// Fether icon
feather.replace();

// Testimonial
$("#testi-clients").owlCarousel({
    loop: true,
    center: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 20,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
