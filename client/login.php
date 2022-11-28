<?php 
  include "../bootstrap_css.phtml";
?>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light mybg-pink300">
        <div class="container">
          <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
            <h3 class="mytxt-dpurple500">Client Login</h3>
        </div>
    </nav>
    
  </header>
  <main>
    <form action="" class="container d-flex flex-column align-items-center p-5 my-5 my-form mybg-pink300 rounded-5">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="Enter username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="text" class="form-control" placeholder="Enter password" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <button type="submit" class="btn btn-light mytxt-dpurple500"><b>LOGIN</b></button>
        <hr>
        <a href="./register.php">New here? click to create new account</a>
          
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
include "../bootstrap_script..phtml";
?>