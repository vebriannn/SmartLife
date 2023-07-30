// Ganti background ke transparent

var btn = document.getElementById("btn");
var light = document.getElementById("light");
var header = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 1);
  //   document.getElementById('signup').classList.add('signup', window.screenY < 1);
  //   document.getElementById('signup').classList.remove('signup', window.screenY > 1);
});

function toggleBtn() {
  btn.classList.toggle("activeToggle");
  light.classList.toggle("on");
}

var swiper = new Swiper(".slide-container", {
  slidesPerView: 4,
  spaceBetween: 20,
  sliderPerGroup: 4,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});

function resposiveSmartHome() {
  var lebar = window.innerWidth;

  if (lebar <= 480) {
    // remove sticky
    window.addEventListener("scroll", function () {
      document.getElementById("navbar").classList.remove("sticky");
    });

    // remove img
  }

  if (lebar <= 992) {
    // navbar
    document.getElementById("navbar").classList.add("navbar-light", "navbar-store");

    // replace img
    document.querySelector(".laptop").src = "../assets/images/laptop-lengkap-mobile.png";

    // remove overflow
    document.querySelector(".section3").classList.remove("overflow-hidden");

    // remove lampu
    if (document.querySelector(".lampuku") != undefined) {
      document.querySelector(".lampuku").remove();
    }

    // remove overflow
    document.getElementById("card-animate1").classList.remove("card-animate");
    document.getElementById("card-animate2").classList.remove("card-animate");

    // hide overflow
    document.querySelector(".section5").classList.remove("overflow-hidden");

    // remove carousel desktop
    // document.querySelector('.carousel-web').remove();
  } else {
    // remove img pesawat
    document.getElementById("button-addon2").remove();
  }
}

// Add a listener for the 'resize' event
window.addEventListener("resize", resposiveSmartHome);

// Call the function initially to apply responsive design based on initial screen width
resposiveSmartHome();
