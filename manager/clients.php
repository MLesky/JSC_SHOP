<?php
 include "../config/connection.php";
 include "../bootstrap_css.php";

    if(!$_SERVER['QUERY_STRING']){ ?>
        <body class="d-flex justify-content-center p-5">
    <a href="./login.php" class="navbar-brand btn text-light p-3 mybg-dpurple500"><b>Go to login</b></a>
    </body>
    <?php
    exit; }

    $sql = "SELECT * FROM clients ";
    $result = mysqli_query($connection, $sql);
    $clients = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <div class="container-fluid text-center d-flex flex-column" style="max-width: 700px !important;">
        <h2 class="m-3 fw-bold">CLIENTS</h2>
        <?php if($clients == null): ?>
            <h2 class="text-secondary m-5"NO CLIENTS</h2>
        <?php else: ?>
        <table style="border: solid 3px black; width: 80%;">
            <tr>
                <th class="h4 fw-bold">No</th>
                <th class="h4 fw-bold">Full names</th>
                <th class="h4 fw-bold">Username</th>
                <th class="h4 fw-bold">Email</th>
                <th class="h4 fw-bold">Address</th>
                <th class="h4 fw-bold">Gender</th>
                <th class="h4 fw-bold">Contact</th>
            </tr>
            <?php
                $i = 1;
                foreach($clients as $client): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td style="text-align: left"><h6 class="m-2"><?php echo $client['fullnames']; ?></h6></td>
                    <td style="text-align: left"><h6 class="m-2"><?php echo $client['username']; ?></h6></td>
                    <td style="text-align: left"><h6 class="m-2"><?php echo $client['email']; ?></h6></td>
                    <td class="h6"><?php echo $client['country'] . " - " . $client['address']; ?></td>
                    <td style="text-align: left"><h6 class="m-2"><?php echo $client['gender']; ?></h6></td>
                    <td style="text-align: left"><h6 class="m-2"><?php echo $client['contact']; ?></h6></td>
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