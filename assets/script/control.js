function resposiveSmartHome() {
  var lebar = window.innerWidth;

  if(lebar < 992) {
    document.getElementById('search').placeholder = "Search";
  }
  else {
    document.getElementById('search').placeholder = "Search Google";
  }

  if(lebar < 576) {
    document.querySelector('.form-lantai').placeholder = "Nama lantai";
    document.querySelector('.form-katasandi').placeholder = "Kata Sandi lantai";
  }
  else {
    document.querySelector('.form-lantai').placeholder = "Masukan nama lantai";
    document.querySelector('.form-katasandi').placeholder = "Masukan Kata sandi lantai";
  }
}

// Add a listener for the 'resize' event
window.addEventListener("resize", resposiveSmartHome);

// Call the function initially to apply responsive design based on initial screen width
resposiveSmartHome();
