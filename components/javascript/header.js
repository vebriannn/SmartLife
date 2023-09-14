var header = document.querySelector(".navbar");

function resposiveSmartHome() {
  var lebar = window.innerWidth;

  if (lebar > 992) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 1) {
        header.classList.toggle("sticky", window.scrollY > 1);
      } else {
        document.getElementById("navbar").classList.remove("sticky");
      }
    });
  } else {
    document.getElementById("navbar").classList.add("navbar-light", "navbar-store");
  }
}
// Add a listener for the 'resize' event
window.addEventListener("resize", resposiveSmartHome);

// Call the function initially to apply responsive design based on initial screen width
resposiveSmartHome();

const id_formreg = document.getElementById("modal-register");
const id_formlog = document.getElementById("modal-login");

function deleteModal() {
  id_formreg.classList.remove("show");
}

// add modal register
document.getElementById("signup").addEventListener("click", () => {
  if (id_formreg.classList.contains("show") != true) {
    id_formreg.classList.add("show");
    id_formlog.classList.remove("show");
  } else {
    id_formlog.classList.remove("show");
  }
  if (id_formlog.classList.contains("show") == true) {
    id_formlog.classList.add("show");
  }
});

document.getElementById("loginBtn1").addEventListener("click", () => {
  if (id_formlog.classList.contains("show") != true) {
    id_formlog.classList.add("show");
    id_formreg.classList.remove("show");
  }
});

document.getElementById("loginBtn2").addEventListener("click", () => {
  if (id_formlog.classList.contains("show") != true) {
    id_formlog.classList.add("show");
    id_formreg.classList.remove("show");
  }
});
document.getElementById("regBtn1").addEventListener("click", () => {
  if (id_formreg.classList.contains("show") != true) {
    id_formreg.classList.add("show");
    id_formlog.classList.remove("show");
  }
});
document.getElementById("regBtn2").addEventListener("click", () => {
  if (id_formreg.classList.contains("show") != true) {
    id_formreg.classList.add("show");
    id_formlog.classList.remove("show");
  }
});
