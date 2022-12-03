<?php
 include "../config/connection.php";
 include "../bootstrap_css.php";

    if(!$_SERVER['QUERY_STRING']){ ?>
        <body class="d-flex justify-content-center p-5">
    <a href="./login.php" class="navbar-brand btn text-light p-3 mybg-dpurple500"><b>Go to login</b></a>
    </body>
    <?php
    exit; }

    $sql = "SELECT * FROM purchases ORDER BY date_purchase";
    $result = mysqli_query($connection, $sql);
    $purchases = mysqli_fetch_all($result, MYSQLI_ASSOC);
   // print_r($purchases);

?>

<body class="container-md">
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
          <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-dpurple500" href=""><p class="logo mybg-dpurple500 text-light">J</p>Joyous SC</a>
          <div>
            <a href="./index.php?username=<?php echo $username; ?>" class="btn mybg-dpurple500 text-light">Home</a>
          </div>
        </div>
    </nav>

  </header>
  <main>
    <div class="container-sm text-center d-flex flex-column" style="max-width: 700px !important;">
        <h2 class="m-3 fw-bold">My Cart</h2>
        <?php if($purchases == null): ?>
            <h2 class="text-secondary m-5">No Purchase</h2>
        <?php else: ?>
        <table class="cart-table my-3">
            <tr>
                <th class="h3 fw-bold">No</th>
                <th class="h3">User name</th>
                <th class="h3 fw-bold">Product ID</th>
                <th class="h3 fw-bold">Date purchase</th>
            </tr>
            <?php
                $i = 1;
                foreach($purchases as $purchase): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td style="text-align: left"><h5 class="m-2"><?php echo '@' . $purchase['client_username']; ?></h5></td>
                    <td style="text-align: left"><h5 class="m-2"><?php echo $purchase['product_id']; ?></h5></td>
                    <td><?php echo $purchase['date_purchase']; ?></td>
                </tr>
            <?php $i++;

                endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php include "../bootstrap_script.php" ?>