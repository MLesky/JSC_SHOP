<?php
 include "../config/connection.php";
 include "../bootstrap_css.php";

    if(isset($_GET['username']))
        $username = mysqli_real_escape_string($connection, $_GET['username']);

        $sql = "SELECT distinct products.name, products.price, products.image, products.id, purchases.no from products, purchases, clients where purchases.product_id=products.id and purchases.client_username = '$username' and purchases.ispurchased='no' ";
        $result = mysqli_query($connection, $sql);
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST['purchase'])){

        foreach ($orders as $order) {
            $id = $order['no'];
            $date = date('d/m/y h:i:s');
            $sql = "UPDATE purchases SET purchases.ispurchased='yes', purchases.date_purchase='$date' where purchases.no='$id' ";
            $result = mysqli_query($connection, $sql);
        }
        sleep(2);
        echo '<div class="h4 text-center text-success">Purchase Successfull</div>';
    }

    if(isset($_POST['remove'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM purchases WHERE purchases.no = '$id'";
        if(mysqli_query($connection, $sql)){
            echo '<div class="h4 text-Success text-center">Item removed</div>';
        } else {
            echo '<div class="h4 text-danger text-center">Error removing item</div>';
        }
    }
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
        <?php if($orders == null): ?>
            <h2 class="text-secondary m-5">YOUR CART IS EMPTY</h2>
        <?php else: ?>
        <table class="cart-table my-3">
            <tr>
                <th class="h2 fw-bold">No</th>
                <th class="h2 fw-bold" colspan="2">Product</th>
                <th class="h2 fw-bold">Price</th>
                <th class="h2 fw-bold"></th>
            </tr>
            <?php
                $i = 1;
                $totalprice = 0;
                foreach($orders as $order): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td style="text-align: left"><h4 class="m-2"><?php echo $order['name']; ?></h4></td>
                    <td class="image d-flex justify-content-center align-items-center">
                        <img class="card-img-top m-2" src="../uploads/<?php echo $order['image']; ?>" alt="..." style="width: 50px"/>
                    </td>
                    <td class="h5"><?php echo $order['price'] . " FCFA"; ?></td>
                    <td>
                        <form method="post" action="<?php echo "./cart.php?username=" . $username;  ?>">
                            <input type="hidden" value="<?php echo $order['no']; ?>" name="id"/>
                            <button class="btn bg-danger text-light p-2" type="submit" name="remove">remove</button>
                        </form>
                    </td>
                </tr>
            <?php $i++;
                $totalprice += $order['price'];
                endforeach; ?>
        </table>

        <table style="width: 300px; font-weight: bold; text-align: left">
            <tr>
                <td>Total Cost</td>
                <td><?php echo $totalprice . "FCFA"; ?></td>
            </tr>
            <tr>
                <td>Shipping Cost</td>
                <td><?php $shippingcost = rand(500, 10000);
                    echo $shippingcost; ?> FCFA</td>
            </tr>
            <tr>
                <td>TOTAL</td>
                <td><?php echo $shippingcost + $totalprice . "FCFA"; ?></td>
            </tr>
        </table>
        <form method="post" action="<?php echo "./cart.php?username=" . $username;  ?>" >
            <button class="btn mybg-dpurple500 p-3 my-3 fw-bold text-light"  style="width: 200px !important;" type="submit" name="purchase">Make Payment</button>
        </form>
        <?php endif; ?>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

<?php include "../bootstrap_script.php" ?>