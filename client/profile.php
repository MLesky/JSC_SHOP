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
           <div>
            <i class="bi-person-circle mytxt-dpurple500" style="font-size: 15em;"></i>
          </div>
          <table class="info-table">
            <tr>
              <td class="h4">Acount Name</td>
              <td><b class="h2">Mbah Lesky</b></td>
            </tr>
            <tr>
              <td class="h4">Username</td>
              <td><h3 class="lobster mytxt-dpurple500">Mbah Lesky</h3></td>
            </tr>
            <tr>
              <td class="h4">Email</td>
              <td><h5 class="lobster">mbahlesky2@gmail.com</h5></td>
            </tr>
            <tr>
              <td class="h4">Contact</td>
              <td><h4>2939084</h4></td>
            </tr>
            <tr>
              <td class="h4">Address</td>
              <td><h4>Bamenda</h4></td>
            </tr>
            <tr>
              <td class="h4">Date of birth</td>
              <td><h4>23/12/2002</h4></td>
            </tr>
            <tr>
              <td class="h4">Gender</td>
              <td><h4>Male</h4></td>
            </tr>
          </table>

            
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
    include "../bootstrap_script.php";
?>