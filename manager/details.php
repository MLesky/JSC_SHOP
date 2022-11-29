<?php
  include "../bootstrap_css.php";
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
            <div class="col-sm-12 col-md-5">
                <img class="card-img-top" src="../images/10fafe97255b80e04e97fce3df37083c.jpg" alt="..." />
            </div>
            <div class="col-sm-12 col-md-5 d-flex flex-column align-items-center justify-content-center">
                  <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="basic-addon1">Item name</span>
                    <input type="text" class="form-control" placeholder="Item name" value="Fancy Product" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <h4 class="my-2">Categories</h4>
                <select class="form-select mb-3" aria-label=".form-select-lg example" multiple>
                  <option selected>Men</option>
                  <option selected>Sunny</option>
                  <option selected>Beach</option>
                  <option value="3">Party</option>
              </select>
                <div style="width: 400px;">
                  <label for="exampleFormControlTextarea1" class="form-label"><h4 class="mt-3">About Product</h4></label>
                  <textarea class="form-control w-90" id="exampleFormControlTextarea1" rows="5" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo est ab quidem quia ipsam quis, voluptatibus recusandae fugit quaerat sunt vitae nostrum similique pariatur culpa odio, reiciendis deserunt. Commodi."></textarea>
                </div>
                <div class="input-group input-group-lg my-3">
                  <span class="input-group-text" id="basic-addon1">Pricing</span>
                  <input type="text" class="form-control" placeholder="Price" value="$80.00" aria-label="Username" aria-describedby="basic-addon1" required>
              </div>
                
                <div class="text-center mt-4"><a class="btn btn-outline-primary mybg-dpurple500 mt-auto text-light" href="#">Save changes</a></div>
                
            </div>
        </div>
    </div>
  </main>
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