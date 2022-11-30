<?php
  include "../config/connection.php";
  include "../bootstrap_css.php";

    if(isset($_GET['id']))
        $id = mysqli_real_escape_string($connection, $_GET['id']);

  $name = $price = $comment = '';
  $categories = array();
  
  if(isset($_POST['post'])){
      $name = $_POST['name'];
      $price= $_POST['price'];
      $comment = $_POST['comment'];
      $cat = '';
      if(empty($_POST['categories'])){
      } else {
          foreach ($_POST['categories'] as $category) {
              array_push($categories, $category);
              $cat .= $category . ', ';
          }
      }

      $filename = $_FILES['uploadfile']['name'];
      $tempname = $_FILES['uploadfile']['tmp_name'];
      $folder = '../uploads/' . $filename;
      $sql = "INSERT INTO products (name, price, catergory, comment, image) VALUES ('$name', '$price', '$cat', '$comment', '$filename')";
      mysqli_query($connection, $sql);

      if (move_uploaded_file($tempname, $folder)){
          header("Location: ./index.php?id=$id");
      } else {
          echo "<h3> Image not uploaded</h3>";
      }
  }

?>

<body>
  <Section style="background-image: url(../images/background.jpg); width: 100%; max-width: 1200px; display: block; margin: auto;" class="img-card">
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p>Joyous SC</a>
            <div class="d-flex">
              <a href="./index.php" class="btn mybg-pink300 text-light mx-3">Home</a> 
              <h2 class="mytxt-pink300 lobster">Add Product</h2>
            </div>
        </div>
    </nav>
    
    <main>
    <form action="add.php" method="POST" class="container d-flex flex-column align-items-center p-5 my-5 rounded-5" style="max-width: 600px;" enctype="multipart/form-data">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p>Joyous SC</a>

        <div>
            <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
          <div class="input-group mb-3">
            <input
                type="file"
                name="uploadfile"
                value=""
                class="form-control"
                id="image"
                accept="image/*"
                required>
          </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Product name</span>
            <input
                    type="text"
                    aria-label="Product"
                    name="name"
                    value="<?php echo $name; ?>"
                    placeholder="Product name"
                    class="form-control"
                    required
            >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">$</span>
            <input
                    type="number"
                    name="price"
                    value="<?php echo $price ?>"
                    class="form-control"
                    placeholder="Price (FCFA)"
                    aria-label="Price"
                    aria-describedby="basic-addon1"
                    required>
        </div>
        <select name="categories[]" class="form-select mb-3" aria-label=".form-select-lg example" multiple>
            <option value="">Category</option>
            <option value="men" <?php if(in_array('men',$categories)) echo 'selected'; ?>>Men</option>
            <option value="women" <?php if(in_array('women',$categories)) echo 'selected' ?>>Women</option>
            <option value="casual" <?php if(in_array('casual',$categories)) echo 'selected' ?>>Casual</option>
            <option value="sunny" <?php if(in_array('sunny',$categories)) echo 'selected' ?>>Sunny</option>
            <option value="children" <?php if(in_array('children',$categories)) echo 'selected' ?>>Children</option>
            <option value="shoes" <?php if(in_array('shoes',$categories)) echo 'selected' ?>>Shoes</option>
            <option value="hat" <?php if(in_array('hat',$categories)) echo 'selected' ?>>Hats</option>
            <option value="Night" <?php if(in_array('night',$categories)) echo 'selected' ?>>Night</option>
        </select>

        <div class="mb-3 w-100">
          <label for="exampleFormControlTextarea1" class="form-label"><b class="text-light">About this product</b></label>
          <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description..."><?php echo $comment;?></textarea>
        </div>
        <button name="post" type="submit" class="btn btn-light mytxt-dpurple500"><b>Post</b></button>
          
    </form>
  </main>
  </Section>
  <footer>
    <!-- place footer here -->
  </footer>

<?php
    include "../bootstrap_script.php";
?>