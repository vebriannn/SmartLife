function resposiveSmartHome() {
  var lebar = window.innerWidth;

  if (lebar < 768) {
    document.querySelector(".input-placeholder").placeholder = "Email";
  } else {
    document.querySelector(".input-placeholder").placeholder = "Masukkan E-mail anda";
  }

  if (lebar < 459) {
    document.getElementById("btnReg").innerHTML = "Reg";
    document.getElementById("namauser").placeholder = "Nama Kamu";
    document.getElementById("alamatuser").placeholder = "Alamat Kamu";
    document.getElementById("nomoruser").placeholder = "Nomor Kamu";
    document.getElementById("pesanuser").placeholder = "Pesan Kamu";
  } else {
    document.getElementById("btnReg").innerHTML = "Register";
    document.getElementById("namauser").placeholder = "Masukan Nama Kamu";
    document.getElementById("alamatuser").placeholder = "Masukan Alamat Kamu";
    document.getElementById("nomoruser").placeholder = "Masukan Nomor Kamu";
    document.getElementById("pesanuser").placeholder = "Masukan pesan yang ingin dikirim";
  }
}

// Add a listener for the 'resize' event
window.addEventListener("resize", resposiveSmartHome);

// Call the function initially to apply responsive design based on initial screen width
resposiveSmartHome();
