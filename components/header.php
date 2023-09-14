 <nav class="navbar navbar-expand-lg navbar-fixed-top fixed-top py-3" id="navbar">
     <div class="container" id="">
         <a href="." class="navbar-brand" >Smart Home</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarMobile">
             <ul class="navbar-nav gap-3 mx-auto" id="gap">
                 <li class="nav-item"><a href="../pages/home.php" class="nav-link <?= ($title == 'Home') ? 'nav-active' : '' ?>" >Home</a></li>
                 <li class="nav-item"><a href="../pages/products.php" class="nav-link nav-products <?= ($title == 'Product') ? 'nav-active' : '' ?>" >Products</a></li>
                 <li class="nav-item"><a href="../pages/contact.php" class="nav-link nav-about <?= ($title == 'Contact') ? 'nav-active' : '' ?>" >Contact</a></li>
             </ul>
             <ul class="navbar-nav gap-3">
                 <li class="nav-item" id="register">
                     <button class="btn rounded-pill fw-medium px-4 py-2 signup shadow-none" id="signup" data-target="#modalRL" data-toggle="modal">Registred</button>
                 </li>
             </ul>
         </div>
     </div>
 </nav>