<?php
  include "../bootstrap_css.php";
  include "../config/connection.php";

  // setting intial values to empty string when page first loads
  $fname = $sname = $email = $contact = $gender = $dob = $country = $address = $username = $password = $confirm = '';

  if(isset($_POST['create'])){
    // storing user info when user clicks on create button
    $fname = $_POST['firstname'];
    $sname = $_POST['secondname'];
    $fullnames = $fname . ' ' . $sname;
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    
    // checking if passwords are same
    if ($_POST['password'] != $_POST['confirm']){
      echo '<div class="text-danger text-center"><b>Passwords do not match</b><div>';
    } else {
      $sql = "SELECT username FROM clients WHERE username = '$username'";
      $result = mysqli_query($connection, $sql);
      if (mysqli_num_rows($result) > 0) {
        echo '<div class="text-danger text-center"><b>This username already exists</b><div>';
      }
      else {
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $sql = "INSERT INTO clients (firstname, secondname, fullnames, email, contact, gender, country, address, date_of_birth, username, password)  VALUES ('$fname', '$sname', '$fullnames', '$email', '$contact', '$gender', '$country', '$address', '$dob', '$username', '$password')";
        if(!mysqli_query($connection, $sql)){
          echo '<div class="text-danger text-center"><b>Error writing to database</b><div>';
        } else {
          header('Location: ./login.php');
        }
      }
    }
  }
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
    <form action="register.php" method="post" class="container d-flex flex-column align-items-center p-5 my-5 my-form mybg-pink300 rounded-5">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>

      <!-- getting names -->
        <div class="input-group mb-3">
            <span class="input-group-text">First & last name*</span>
            <input 
              type="text"
              name="firstname";
              value="<?php echo $fname; ?>"
              placeholder="Firstname" 
              aria-label="First name" 
              class="form-control" 
              required>
            <input 
            type="text" 
            name="secondname";
            value="<?php echo $sname; ?>"
            placeholder="Secondname"
            aria-label="Last name" 
            class="form-control" 
            required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email*</span>
            <input 
              type="email" 
              name="email"
              value="<?php echo $email; ?>"
              class="form-control" 
              placeholder="Enter email" 
              aria-label="Username" 
              aria-describedby="basic-addon1" 
              required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel</span>
            <input 
              type="tel" 
              name="contact"
              value="<?php echo $contact; ?>"
              class="form-control" 
              placeholder="Enter tel" 
              aria-label="Username" 
              aria-describedby="basic-addon1">
        </div>

        <div class="d-flex">
            <b class="text-light">Gender:</b>

            <div class="form-check text-light mx-3">
                <input 
                  class="form-check-input" 
                  type="radio" 
                  name="gender"
                  value="male"
                  id="flexRadioDefault1"
                  <?php if($gender == 'male') echo 'checked'; ?>
                >
                <label class="form-check-label" for="flexRadioDefault1">
                  <b>Male</b>
                </label>
            </div>

            <div class="form-check text-light mx-3">
                <input 
                  class="form-check-input" 
                  type="radio" 
                  name="gender"
                  value="female" 
                  id="flexRadioDefault2"
                  <?php if($gender == 'female') echo 'checked'; ?>
                >
                <label class="form-check-label" for="flexRadioDefault2">
                  <b>Female</b>
                </label>
            </div>

            <div class="form-check text-light mx-3">
                <input 
                  class="form-check-input" 
                  type="radio" 
                  name="gender"
                  value="other" 
                  id="flexRadioDefault2"
                  <?php if($gender == 'other') echo 'checked'; ?>
                >
                <label class="form-check-label" for="flexRadioDefault2">
                  <b>Other</b>
                </label>
            </div>
        </div>
        
        <div class="text-light mb-3">
            <label for="formFile" class="form-label">Date of birth</label>
            <input 
              class="form-control" 
              name="dob"
              value="<?php echo $dob; ?>" 
              type="date" 
              id="formFile">
          </div>
        </div>

        <select class="form-select mb-3" aria-label=".form-select-lg example" name="country" required>
            <option value="" <?php if($country == '') echo 'selected' ?>>Country</option>
            <option value="cameroon" <?php if($country == 'cameroon') echo 'selected' ?>>Cameroon</option>
            <option value="usa" <?php if($country == 'usa') echo 'selected' ?>>USA</option>
            <option value="nigeria" <?php if($country == 'nigeria') echo 'selected' ?>>Nigeria</option>
        </select>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Address</span>
            <input 
              type class="form-control"
              name="address"
              value="<?php echo $address; ?>" 
              placeholder="Enter address" 
              aria-label="Username" 
              aria-describedby="basic-addon1">
        </div>
        <hr>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input 
              type="text" 
              name="username"
              value="<?php echo $username; ?>"
              class="form-control" 
              placeholder="Enter your username" 
              aria-label="Username" 
              aria-describedby="basic-addon1" 
              required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-eye-slash-fill"></i></span>
            <input 
              type="password" 
              value="<?php echo $password; ?>"
              class="form-control" 
              name="password"
              placeholder="Enter password" 
              aria-label="Username" 
              aria-describedby="basic-addon1" 
              required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-eye-slash-fill"></i></span>
            <input 
              type="password" 
              value="<?php echo $confirm; ?>"
              class="form-control" 
              name="confirm"
              placeholder="Confirm password" 
              aria-label="Username" 
              aria-describedby="basic-addon1" 
              required>
        </div>

        <button name="create" type="submit" class="btn btn-light mytxt-dpurple500"><b>Create</b></button>
        <hr>
        <a href="./login.php">I have an account? click to login</a>
          
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
    include "../bootstrap_script.php";
?>