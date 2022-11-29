<?php 
  include "../config/connection.php";
  include "../bootstrap_css.php";

  $username = $password = '';

  // when user clicks login button
  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

  // query to search for username and password
    $sql = "SELECT * FROM clients WHERE username = '$username' AND password = '$password'";
    $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));

    if(!$result): ?>
        <div class="text-danger text-center"><b>Username not found or incorrect password</b></div>
    <?php else: 
    // starting a session for user if when user is found
      session_start();
    // saving users data for online session
      $_SESSION['id'] = $id = $result['ID'];
      $_SESSION['fullnames'] = $result['fullnames'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['username'] = $result['username'];
      $_SESSION['gender'] = $result['gender'];
      $_SESSION['password'] = $result['password'];
      $_SESSION['date_of_birth'] = $result['date_of_birth'];
      $_SESSION['contact'] = $result['contact'];
      $_SESSION['firstname'] = $result['firstname'];
      $_SESSION['secondname'] = $result['secondname'];
      $_SESSION['address'] = $result['address'];
      //navigating to home page of user
      header("Location: ./index.php?id=$id"); ?>
      <div class="text-success text-center"><b>Welcome <?php echo $result['fullnames'] ?></b></div>
    <?php endif;
  }
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
    <form action="login.php" method="POST" class="container d-flex flex-column align-items-center p-5 my-5 my-form mybg-pink300 rounded-5">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input 
              type="text" 
              class="form-control" 
              name="username" 
              value="<?php echo $username; ?>"
              placeholder="Enter username" 
              aria-label="Username" 
              aria-describedby="basic-addon1" 
              required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input 
              type="password" 
              class="form-control" 
              name="password" 
              value="<?php echo $password; ?>"
              placeholder="Enter password" 
              aria-label="Password" 
              aria-describedby="basic-addon1" 
              required>
        </div>
        <button 
          type="submit" 
          class="btn btn-light mytxt-dpurple500"
          name="login">
          <b>LOGIN</b>
        </button>
        <hr>
        <a href="./register.php">New here? click to create new account</a>
          
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
include "../bootstrap_script.php";
?>