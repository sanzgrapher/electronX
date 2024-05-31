<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>

  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="row gy-3">
          <!-- Left elements -->
          <div class="col-lg-2 col-sm-4 col-4">
            <a href="https://bootstrap.com/" target="_blank" class="float-start">
              <img src="https://bootstrap.com/img/logo/-transaprent-noshadows.png" height="35" />
            </a>
          </div>
          <!-- Left elements -->

          <!-- Center elements -->
          <div class="order-lg-last col-lg-5 col-sm-8 col-8">
            <div class="d-flex float-end">
              <a href="https://github.com/bootstrap/bootstrap-material-design"
                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                <i class="fas fa-user-alt m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Sign in</p>
              </a>
              <a href="https://github.com/bootstrap/bootstrap-material-design"
                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                <i class="fas fa-heart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Wishlist</p>
              </a>
              <a href="https://github.com/bootstrap/bootstrap-material-design"
                class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">My cart</p>
              </a>
            </div>
          </div>
          <!-- Center elements -->

          <!-- Right elements -->
          <div class="col-lg-5 col-md-12 col-12">
            <div class="input-group float-center">
              <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
              </div>
              <button type="button" class="btn btn-primary shadow-0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
          <!-- Right elements -->
        </div>
      </div>
    </div>
    <!-- Jumbotron -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <!-- Container wrapper -->
      <div class="container justify-content-center justify-content-md-between">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/index.html">Index</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/home.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/product-list view.html">Product list</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/grid.html">Grid</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/account.html">Dashboard</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/cart.html">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/checkout.html">Checkout</a>
            </li>









            <li class="nav-item">
              <a class="nav-link" href="/single-product.html">Single product</a>
            </li>

            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-expanded="false">
                Others
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Left links -->
        </div>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

  </header>
