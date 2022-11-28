<?php
  include "../bootstrap_css.phtml";
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
            <buttton class="btn btn-outline-danger mx-2 d-xl-none"><i class="bi bi-search"></i></buttton>
            <form class="d-none d-xl-flex mx-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
            <form class="d-flex">
              <button class="btn btn-outline-danger" type="submit">
                  <i class="bi-cart-fill me-1"></i>
                  Cart
                  <span class="badge mybg-pink300 text-white ms-1 rounded-pill">0</span>
              </button>
          </form>
          </div>
        </div>
      </nav>
      <header class="d-flex flex-column justify-content-start align-items-center text-light" style="height: 300px;">
        <a href="profile.html" class="navbar-brand d-flex flex-column align-items-center">
          <i class="bi-person-circle" style="font-size: 3em;"></i>
          <h6 class="txt-white">Mbah Lesky</h6>
        </a>
        <a class="navbar-brand h1 d-flex d-sm-none lobster d-flex align-items-baseline mytxt-pink300" href=""><p class="logo mybg-pink300 text-light">J</p><span class="h2">Joyous SC</span></a>
        <h1>SHOP IN STYLE</h1>
        <h4>With this at <span class="lobster"><span class="mytxt-pink300">J</span>oyous <span class="mytxt-pink300">S</span>hopping <span class="mytxt-pink300">C</span>enter</span></h4>
      </header>
    </section>
  <main>
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
              <div class="col mb-5">
                  <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                      <!-- Product image-->
                      <img class="card-img-top" src="../images/10fafe97255b80e04e97fce3df37083c.jpg" alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">Fancy Product</h5>
                              <div class="d-flex justify-content-center small text-warning mb-1">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                              <!-- Product price-->
                              $40.00 - $80.00
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer pt-0 border-top-0 bg-transparent">
                          <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="./details.php">View options</a></div>
                          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                      </div>
                  </div>
              </div>
              <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/01e3b3964761c39a935a7d9c1a1558ed.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/0619373fd71cdea76dc311a127d28b30.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/1248b58e52dedcc64fc728c92563ac30.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/411898667eae9a904a8dc7a88b829e21.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/296e558e07a59f60781602318eeceb80.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/6a9dc44dcebdd31955c18a13ed83bc50.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/8c3d645ae3a5da7206ebcebae3216a07.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="../images/b7b36b2cfc6542a1037673dca6efeb12.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-1">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center mb-1"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>

          </div>
      </div>
  </section>
  </main>
  <footer>
    <!-- place footer here -->
    <div class="container-md">
    </div>
  </footer>
  </div>

<?php
include "../bootstrap_script..phtml";
?>