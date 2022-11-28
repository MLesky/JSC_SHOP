<?php
  include "../bootstrap_css.phtml";
?>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light mybg-pink300">
        <div class="container">
            <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
            <h3 class="mytxt-dpurple500">Client Register</h3>
        </div>
    </nav>
    
  </header>
  <main>
    <form action="" class="container d-flex flex-column align-items-center p-5 my-5 my-form mybg-pink300 rounded-5">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>

        <div class="input-group mb-3">
            <span class="input-group-text">First & last name*</span>
            <input type="text" aria-label="First name" class="form-control" required>
            <input type="text" aria-label="Last name" class="form-control" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email*</span>
            <input type="email" class="form-control" placeholder="Enter email" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel</span>
            <input type="tel" class="form-control" placeholder="Enter tel (optional)" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="d-flex">
            <span class="text-light">Gender*:</span>
            <div class="form-check text-light mx-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  <b>Male</b>
                </label>
            </div>
            <div class="form-check text-light mx-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  <b>Female</b>
                </label>
            </div>
            <div class="form-check text-light mx-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  <b>Other</b>
                </label>
            </div>
        </div>
        
        <div class="text-light mb-3">
            <label for="formFile" class="form-label">Date of birth</label>
            <input class="form-control" type="date" id="formFile">
          </div>
        </div>

        <select class="form-select mb-3" aria-label=".form-select-lg example" required>
            <option selected>Country</option>
            <option value="1">Cameroon</option>
            <option value="2">Nigeria</option>
            <option value="3">Other</option>
        </select>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Address</span>
            <input type class="form-control" placeholder="Enter address" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <hr>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type class="form-control" placeholder="Enter your username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-eye-slash-fill"></i></span>
            <input type="password" class="form-control" placeholder="Enter password" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-eye-slash-fill"></i></span>
            <input type="password" class="form-control" placeholder="Confirm password" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <button type="submit" class="btn btn-light mytxt-dpurple500" onclick="window.location='index.php'"><b>Create</b></button>
        <hr>
        <a href="./login.php">I have an account? click to login</a>
          
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
    include "../bootstrap_script..phtml";
?>