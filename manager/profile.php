<?php
    include "../config/connection.php";
    include "../bootstrap_css.php";

    session_start();

    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header('Location: ./login.php');
    }

  if(isset($_GET['id'])){
      $id = mysqli_real_escape_string($connection, $_GET['id']);
      $sql = "SELECT * FROM manager WHERE id = '$id'";
      $result = mysqli_query($connection, $sql);
      $admin = mysqli_fetch_assoc($result);
      
      mysqli_free_result($result);
      mysqli_close($connection);        
    } else { ?>
      <div class="text-danger h5">You are not suppose to be here</div>
      <a class="btn mybg-dpurple500 text-light p-3 m-3" href="../client/login.php"><h4>Go back</h4></a>
    <?php }
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
            <tr class="p-2">
              <td class="h4 p-3">Acount Name</td>
              <td><b  class="p-3 h2"><?php echo $admin['names']; ?></b></td>
            </tr>
            <tr class="p-2">
              <td class="h4 p-3">Email</td>
              <td><h5 class="p-3 lobster"><?php echo $admin['email']; ?></h5></td>
            </tr>
            <tr class="p-2">
              <td class="h4 p-3">Contact</td>
              <td><h4 class="p-3"><?php echo $admin['contact']; ?></h4></td>
            </tr>
            </table>
            <form action="profile.php">
                <button class="btn mybg-dpurple500 text-light p-3 m-3" type="submit" name="logout"><h4>Logout</h4></button>
            </form>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
    include "../bootstrap_script.php";
?>