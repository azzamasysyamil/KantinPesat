<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin PESAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KANTIN PESAT
            <img src="" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rekomendasi.html">Rekomendasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang.html">Tentang</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container-fluid best">
        <div id="myCarousel" class="carousel slide mb-6 best2" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner round1">
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&q=80&w=1664&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>

      <div class="container px-4 py-5" id="custom-cards">
    
        <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4 align-items-stretch">
          <div class="col pt-5">
            <a href="kebab.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2 ">Kebab</h4>
                  <h6 class="mx-2 text-secondary">Jajanan</h6>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col pt-5">
            <a href="nasigoreng.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Nasi Goreng</h4>
                  <h6 class="mx-2 text-secondary">Aneka Nasi</h6>
                </div>
              </div>
            </a>
          </div>

          <div class="col pt-5">
            <a href="rotibakar.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&q=80&w=1664&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Roti Bakar</h4>
                  <h6 class="mx-2 text-secondary">Jajanan</h6>
                </div>
              </div>
            </a>
          </div>

          <div class="col pt-5">
            <a href="bakso.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Bakso</h4>
                  <h6 class="mx-2 text-secondary">Bakso & soto</h6>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4 align-items-stretch">
          <div class="col pt-5">
            <a href="popice.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Pop Ice Cincau</h4>
                  <h6 class="mx-2 text-secondary">Minuman</h6>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col pt-5">
            <a href="tehpoci.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?auto=format&fit=crop&q=80&w=1632&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Teh Poci</h4>
                  <h6 class="mx-2 text-secondary">Minuman</h6>
                </div>
              </div>
            </a>
          </div>

          <div class="col pt-5">
            <a href="makaronitelor.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&q=80&w=1664&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Makaroni Telor</h4>
                  <h6 class="mx-2 text-secondary">Jajanan</h6>
                </div>
              </div>
            </a>
          </div>

          <div class="col pt-5">
            <a href="miayam.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Mi Ayam</h4>
                  <h6 class="mx-2 text-secondary">Aneka Mi</h6>
                </div>
              </div>
            </a>
          </div>          
        </div> 
        
        <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4 align-items-stretch">
          <div class="col pt-5">
            <a href="eskaramel.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm">
                <div class="d-flex flex-column h-100 p-2 text-black">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&q=80&w=1681&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                  <h4 class="pt-1 mt-3 lh-1 fw-bold mx-2">Es Karamel</h4>
                  <h6 class="mx-2 text-secondary">Minuman</h6>
                </div>
              </div>
            </a>
          </div> 
        </div>

        <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4 align-items-stretch">
          <div class="col  pt-5">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm bg-danger">
              <div class="d-flex flex-column h-100 p-2 text-black">
                <h4 class="my-3 lh-1 fw-bold mx-3 ">Jajanan</h4>
              </div>
            </div>
          </div>

          <div class="col  pt-5">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm bg-info">
              <div class="d-flex flex-column h-100 p-2 text-black">
                <h4 class="my-3 lh-1 fw-bold mx-3 ">Minuman</h4>
              </div>
            </div>
          </div>

          <div class="col  pt-5">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm bg-success">
              <div class="d-flex flex-column h-100 p-2 text-black">
                <h4 class="my-3 lh-1 fw-bold mx-3 ">Lauk</h4>
              </div>
            </div>
          </div>

          <div class="col  pt-5">
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-sm bg-warning">
              <div class="d-flex flex-column h-100 p-2 text-black">
                <h4 class="my-3 lh-1 fw-bold mx-3 ">Cemilan</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-info">
        <div class="container ">
        <footer class="py-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>
      
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2023 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
