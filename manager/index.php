<?php
  include "../config/connection.php";
  include "../bootstrap_css.php";

  session_start();
  // checking query string (if a user is logged in)
  if($_SERVER['QUERY_STRING'] == '' || $_SESSION == null){
    session_unset();
    session_destroy();
    ?>
    <body class="d-flex justify-content-center p-5">
    <a href="./login.php" class="navbar-brand btn text-light p-3 mybg-dpurple500"><b>Go to login</b></a>
    </body>
    <?php
    exit;
  } else {
    $names = $_SESSION['names'];
    $id = $_SESSION['id'];
    $mode = $_SESSION['mode'];
  }

    $sql = "SELECT * FROM products ORDER BY date_post";
    $result = mysqli_query($connection, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM products WHERE id='$id'";
        if(mysqli_query($connection, $sql)){
            echo '<div class="h5 text-success text-center">Item removed</div>';
        } else {
            echo '<div class="h5 text-danger text-center">Error removing item</div>';
        }
    }
?>

<body>
  <div class="container-lg">
  <section class="bg-dark img-card" style="background-image: url(../images/background.jpg);">
    <!-- place navbar here -->
    <nav class="navbar sticky-top">
      <div class="container-fluid d-flex flex-row justify-content-between">
          <a class="navbar-brand h3 d-none d-sm-flex lobster align-items-center mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p>Joyous SC</a>
        <ul class="navbar-nav me-auto mx-md-5 flex-row">
        <li class="nav-item px-2 rounded-2 my-active"><a class="nav-link active" aria-current="page" href="#!"><b>Home</b></a></li>
          <li class="nav-item px-2 rounded-2"><a class="nav-link link-txt" href="#!"><b>About</b></a></li>
        </ul>
        <div class="d-flex">
          <a href="./add.php?id=<?php echo $id ?>" class="btn btn-danger mx-2">
            <i class="bi bi-plus-circle"></i>
            Add item
          </a>
          <buttton class="btn btn-outline-danger mx-2 d-xl-none"><i class="bi bi-search"></i></buttton>
       <!--   <form class="d-none d-xl-flex mx-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
          </form> -->
          <form class="d-flex">
              <a class="btn bg-danger mx-1 text-light p-2" href="
./clients.php?manager=<?php echo $id; ?>">Clients</a>
            <a class="btn btn-outline-danger" type="submit" href="./purchases.php?manager=<?php echo $id; ?>">
                <i class="bi-cart-fill me-1"></i>
                Purchases
            </a>
        </form>
        </div>
      </div>
    </nav>
    <header class="d-flex flex-column justify-content-center align-items-center text-light" style="height: 300px;">
      <a class="navbar-brand h1 d-flex d-sm-none lobster d-flex align-items-baseline mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p><span class="h2">Joyous SC</span></a>
      <a href="profile.php?id=<?php echo $id ?>" class="navbar-brand d-flex flex-column align-items-center">
          <i class="bi-shield-lock" style="font-size: 3em;"></i>
          <h6 class="txt-white"></i><?php echo "$names ($mode)"; ?></h6>
      </a>
      <h1>SHOP IN STYLE</h1>
      <h4>With this at <span class="lobster"><span class="mytxt-pink300">J</span>oyous <span class="mytxt-pink300">S</span>hopping <span class="mytxt-pink300">C</span>enter</span></h4>
    </header>
  </section>
      <main>
          <section class="py-5">
              <div class="container px-4 px-lg-5 mt-5">
                  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                      <?php if(!$posts): ?>
                          <div class="h1 m5 text-secondary">No Post Yet</div>
                      <?php else:
                          foreach($posts as $post):  ?>
                              <div class="col mb-5">
                                  <div class="card h-100">
                                      <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                      <!-- Product image-->
                                      <img class="card-img-top" src="../uploads/<?php echo $post['image']; ?>" alt="..." />
                                      <!-- Product details-->
                                      <div class="card-body p-4">
                                          <div class="text-center">
                                              <!-- Product name-->
                                              <h5 class="fw-bolder"><?php echo $post['name']; ?></h5>
                                              <!-- Product price-->
                                              <?php echo $post['price'] . ' FCFA'; ?>
                                          </div>
                                      </div>
                                      <!-- Product actions-->
                                      <div class="card-footer pt-0 border-top-0 bg-transparent d-flex ">
                                          <div class="text-center mx-1"><a class="btn btn-outline-dark mt-auto" href="./details.php?id=<?php echo $post['ID']; ?>">View details</a></div>
                                          <form method="get" action="index.php" class="mx-1">
                                              <input name="id" value="<?php echo $post['ID']; ?>" type="hidden"/>
                                              <button class="btn text-light bg-danger mt-auto" name="delete">Delete Item</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach;
                      endif; ?>
                  </div>
              </div>
          </section>
      </main>
  <footer>
    <!-- place footer here -->
  </footer>
  </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>