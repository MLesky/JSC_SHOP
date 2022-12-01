<?php
  include "../config/connection.php";
  include "../bootstrap_css.php";

    session_start();
    // checking query string (if a user is logged in)
    if($_SERVER['QUERY_STRING'] == '' || $_SESSION == null){
        session_unset();
        session_destroy();
        $names = '';
        $username = 'guest';
    } else {
        $names = $_SESSION['fullnames'];
        $username = $_SESSION['username'];
    }

    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $sql = "SELECT * FROM products WHERE id = '$id'";
        $result = mysqli_query($connection, $sql);
        $product = mysqli_fetch_assoc($result);
    }
?>

<body class="container-md">
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
          <div>
            <a href="./index.php?username=<?php echo "profile.php?username=" . $username; ?>" class="btn mybg-dpurple500 text-light">Home</a>
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
                <img class="card-img-top" src="../uploads/<?php echo $product['image']; ?>" alt="..." />
            </div>
            <div class="col-sm-12 col-md-5 d-flex flex-column align-items-center justify-content-center">
                <h2 class="fw-bolder my-2"><?php echo $product['name']; ?></h2>
                <h4 class="my-2">Categories</h4>
                <h6 class="w-70"><?php echo $product['catergory']; ?></h6>
                <h4 class="mt-3">About Product</h4>
                <p class="text-secondary w-75 px-sm-2 px-md-5 pb-3"><?php echo $product['comment']; ?></p>
                <h1 class="mytxt-dpurple500 bold"><?php echo $product['price'] . ' FCFA'; ?></h1>
                <form method="get" action="index.php">
                    <input name="id" value="<?php echo $product['ID']; ?>" type="hidden"/>
                <div class="text-center mt-4"><button class="btn btn-outline-primary mybg-dpurple500 mt-auto text-light" name="add" type="submit">Add to cart</button></div>
                </form>
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