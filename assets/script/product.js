function resposiveSmartHome() {
  // check lebar layar
  var lebar = window.innerWidth;

  // ubah placeholder
  if (lebar >= 1200) {
    // ubah placeholder
    document.getElementById("search").placeholder = "Masukan Pertanyaanmu";
  } else {
    // ubah placeholder
    document.getElementById("search").placeholder = "Pertanyaanmu";
  }

  // remove and add icon pesawat
  if (lebar > 992) {
    document.getElementById("button-addon2").style.display = "none";
    document.querySelector(".pesawat").style.display = "block";
  } else {
    document.getElementById("button-addon2").style.display = "block";
    document.querySelector(".pesawat").style.display = "none";
  }
}

// Add a listener for the 'resize' event
window.addEventListener("resize", resposiveSmartHome);

// Call the function initially to apply responsive design based on initial screen width
resposiveSmartHome();

// check navbar
var navsection4 = document.querySelectorAll(".nav-sec4");
navsection4.forEach((links) => {
  links.addEventListener("click", function () {
    navsection4.forEach((link) => {
      link.classList.remove("nav-active");
    });

    this.classList.add("nav-active");

    if (links.classList.contains("nav-active")) {
      if (links.classList.contains("living-filter")) {
        living();
      } else if (links.classList.contains("security-filter")) {
        security();
      } else if (links.classList.contains("electrical-filter")) {
        electrical();
      } else if (links.classList.contains("lighting-filter")) {
        lighting();
      } else {
        all();
      }
    }
  });
});

function living() {
  // add living items
  document.querySelectorAll(".living-item").forEach((living) => {
    living.style.display = "block";
  });

  document.querySelectorAll(".security-item").forEach((security) => {
    security.style.display = "none";
  });

  document.querySelectorAll(".electrical-item").forEach((electrical) => {
    electrical.style.display = "none";
  });

  document.querySelectorAll(".lighting-item").forEach((lighting) => {
    lighting.style.display = "none";
  });
}

function security() {
  // add scurity items
  document.querySelectorAll(".living-item").forEach((living) => {
    living.style.display = "none";
  });

  document.querySelectorAll(".security-item").forEach((security) => {
    security.style.display = "block";
  });

  document.querySelectorAll(".electrical-item").forEach((electrical) => {
    electrical.style.display = "none";
  });

  document.querySelectorAll(".lighting-item").forEach((lighting) => {
    lighting.style.display = "none";
  });
}

function electrical() {
  // add electrical items
  document.querySelectorAll(".living-item").forEach((living) => {
    living.style.display = "none";
  });

  document.querySelectorAll(".security-item").forEach((security) => {
    security.style.display = "none";
  });

  document.querySelectorAll(".electrical-item").forEach((electrical) => {
    electrical.style.display = "block";
  });

  document.querySelectorAll(".lighting-item").forEach((lighting) => {
    lighting.style.display = "none";
  });
}

function lighting() {
  // add electrical items
  document.querySelectorAll(".living-item").forEach((living) => {
    living.style.display = "none";
  });

  document.querySelectorAll(".security-item").forEach((security) => {
    security.style.display = "none";
  });

  document.querySelectorAll(".electrical-item").forEach((electrical) => {
    electrical.style.display = "none";
  });

  document.querySelectorAll(".lighting-item").forEach((lighting) => {
    lighting.style.display = "block";
  });
}

function all() {
  // add all items
  document.querySelectorAll(".living-item").forEach((living) => {
    living.style.display = "block";
  });

  document.querySelectorAll(".security-item").forEach((security) => {
    security.style.display = "block";
  });

  document.querySelectorAll(".electrical-item").forEach((electrical) => {
    electrical.style.display = "block";
  });

  document.querySelectorAll(".lighting-item").forEach((lighting) => {
    lighting.style.display = "block";
  });
}
