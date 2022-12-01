<?php
 include "../config/connection.php";
 include "../bootstrap_css.php";

    if(isset($_GET['username']))
        $username = mysqli_real_escape_string($connection, $_GET['username']);
        $sql = "SELECT products.ID, products.name, products.image, products.price FROM products INNER JOIN purchases ON client_username = '$username' ORDER BY purchases.no";
        $result = mysqli_query($connection, $sql);
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    print_r($orders);
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
        <table class="cart-table my-3">
            <tr>
                <th class="h2 fw-bold">No</th>
                <th class="h2 fw-bold">Product</th>
                <th class="h2 fw-bold">Quantity</th>
                <th class="h2 fw-bold"></th>
            </tr>
            <?php $i = 1;
                foreach($orders as $order): ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td class="image">
                        <h4><?php echo $order['name']; ?></h4>
                        <img class="card-img-top" src="../uploads/<?php echo $order['image']; ?>" alt="..." />
                    </td>
                    <td><?php echo $order['price'] ?></td>
                    <td><button class="btn btn-danger p-1">remove</button></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <table style="width: 300px; font-weight: bold; text-align: left">
            <tr>
                <td>Total Cost</td>
                <td>30000 FCFA</td>
            </tr>
            <tr>
                <td>Shipping Cost</td>
                <td>4000 FCFA</td>
            </tr>
            <tr>
                <td>TOTAL</td>
                <td>50000 FCFA</td>
            </tr>
        </table>
        <button class="btn mybg-dpurple500 p-3 my-3 fw-bold text-light"  style="width: 200px !important;">Make Payment</button>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php include "../bootstrap_script.php" ?>