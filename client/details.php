<?php
  include "../config/connection.php";
  include "../bootstrap_css.php";
?>

<body class="container-md">
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
          <div>
            <a href="./index.php" class="btn mybg-dpurple500 text-light">Home</a> 
          <button class="btn btn-outline-primary" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge mybg-dpurple500 text-white ms-1 rounded-pill">0</span>
          </button>
          </div>
        </div>
    </nav>
    
  </header>
  <main>
    <div class="container-sm text-center">
        <div class="row row-cols-1 row-cols-md-2 m-5 d-flex justify-content-center">
            <div class="col-sm-12 col-md-5">
                <img class="card-img-top" src="../images/10fafe97255b80e04e97fce3df37083c.jpg" alt="..." />
            </div>
            <div class="col-sm-12 col-md-5 d-flex flex-column align-items-center justify-content-center">
                <h2 class="fw-bolder my-2">FANCY PRODUCT</h2>
                <h4 class="my-2">Categories</h4>
                <h5>Men, Sunny, Beach</h5>
                <h4 class="mt-3">About Product</h4>
                <p class="text-secondary w-75 px-sm-2 px-md-5 pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi numquam repellat quae, libero assumenda vitae nulla dolore fugiat ea deleniti sint asperiores! Dolores dolorem minima deserunt corrupti excepturi, nesciunt tenetur?</p>
                <h1 class="mytxt-dpurple500 bold">$40.00 -$80.00</h1>
                <div class="text-center mt-4"><a class="btn btn-outline-primary mybg-dpurple500 mt-auto text-light" href="#">Add to cart</a></div>
                
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
include "../bootstrap_script.php";
?>