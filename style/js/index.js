/*---------------------------------- NAVBAR ----------------------------------*/
window.addEventListener("DOMContentLoaded", (event) => {
  // Navbar shrink function
  var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector("#mainNav");
    if (!navbarCollapsible) {
      return;
    }
    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove("navbar-shrink");
    } else {
      navbarCollapsible.classList.add("navbar-shrink");
    }
  };

  // Shrink the navbar
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener("scroll", navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector("#mainNav");
  if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
      target: "#mainNav",
      offset: 74,
    });
  }

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector(".navbar-toggler");
  const responsiveNavItems = [].slice.call(
    document.querySelectorAll("#navbarResponsive .nav-link")
  );
  responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener("click", () => {
      if (window.getComputedStyle(navbarToggler).display !== "none") {
        navbarToggler.click();
      }
    });
  });
});

/*---------------------------------- Slider back to top ----------------------------------*/

$(document).ready(function () {
  $(window).width() < 840 && $(".js-slidein").removeClass("js-slidein"),
    $(".js-slidein").each(function (i) {
      var s = $(this).offset().top;
      $(window).scrollTop() + $(window).height() > s &&
        $(this).removeClass("js-slidein");
    }),
    $(window).scroll(function () {
      $(".js-slidein").each(function (i) {
        var s = $(this).offset().top + $(this).outerHeight() / 3;
        $(window).scrollTop() + $(window).height() > s &&
          $(this).addClass("js-slidein-visible");
      });
    });
});

/*---------------------------------- Owlcarousel ----------------------------------*/
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    center: true,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 1.5,
      },
      700: {
        items: 1.8,
      },
      1000: {
        items: 3,
      },
    },
  });
});

/*---------------------------------- NEWSLETTER ----------------------------------*/
$( document ).ready(function() {
  $(".cta").click(function() {
   $("form").slideDown(250);
   // if form is visible
   if ($("form").is(":visible")) {
     // change .cta cursor to default
     $(".cta").css('cursor', 'default');
   }
   $("#email").focus();
 });
});
