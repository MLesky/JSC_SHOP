<?php
  include "../bootstrap_css.php";
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
    <form action="" class="container d-flex flex-column align-items-center p-5 my-5 rounded-5" style="max-width: 600px;">
      <a class="navbar-brand h3 lobster d-flex align-items-center mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p>Joyous SC</a>

        <div>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
          </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Product name</span>
            <input type="text" aria-label="First name" placeholder="Product name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">$</span>
            <input type="number" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <select class="form-select mb-3" aria-label=".form-select-lg example" required>
            <option selected>Category</option>
            <option value="1">Men</option>
            <option value="2">Women</option>
            <option value="3">Casual</option>
        </select>

        <div class="mb-3 w-100">
          <label for="exampleFormControlTextarea1" class="form-label"><b class="text-light">About this product</b></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="comment" placeholder="Description..."></textarea>
        </div>
        <button type="submit" class="btn btn-light mytxt-dpurple500" onclick="window.location='index.php'"><b>Post</b></button>
          
    </form>
  </main>
  </Section>
  <footer>
    <!-- place footer here -->
  </footer>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>