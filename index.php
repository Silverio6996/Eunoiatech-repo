<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECONOTOUR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>econotour@website.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">ECONO</span>TOUR</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                        <a href="food.html" class="dropdown-item">Food</a>
                            <a href="souvenirs.html" class="dropdown-item">Souvenirs</a>
                            <a href="travel.html" class="dropdown-item">Travel and Tours</a>
                            <a href="transport.html" class="dropdown-item">Trasport</a>
                            <a href="accomodations.html" class="dropdown-item">Accommodations</a>
                        </div>
                    </div>
                      
                    
                    <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Municipalities</a>
    <div class="dropdown-menu border-0 rounded-0 m-0">
        <input type="text" class="form-control search-input" placeholder="Search..">
        <div class="dropdown-divider"></div>
        <a href="calapan.html" class="dropdown-item">Calapan</a>
        <a href="puerto.html" class="dropdown-item">Puerto Galera</a>
        <a href="santeodoro.html" class="dropdown-item">San Teodoro</a>
        <a href="pinamalayan.html" class="dropdown-item">Pinamalayan</a>
        <a href="bulalacao.html" class="dropdown-item">Bulalacao</a>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Live search on keyup event
        $('.search-input').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            var items = $('.dropdown-item');
            var matchingItems = items.filter(function () {
                return $(this).text().toLowerCase().indexOf(value) > -1;
            });

            // Toggle visibility of matching items
            items.hide();
            matchingItems.show();

            // Display "No results matched" if there are no matches
            if (matchingItems.length === 0) {
                $('.dropdown-menu').append('<div class="no-match">No results matched</div>');
            } else {
                $('.no-match').remove(); // Remove the "No match found" message if there are matches
            }
        });
    });
</script>
                    <a href="login-user.php" class="nav-item nav-link">My Account</a>
                    <button type="button" class="btn btn-light"><a href="login-user.php">Logout</a></button>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">WELCOME TO ECONOTOUR!</h1>
                            <h4 class="text-white text-uppercase mb-md-3">Find stores that can fulfill all of your needs</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Get Started</a>
                        </div>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/bg1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best attractions, hotels, restaurants, and shops
                        </h1>
                        <p>EconoTour is a mobile application and web application that allows you to easily access different stores in MIMAROPA tourism products and services from the comfort of your own home or hotel room. EconoTour will display numerous local products and local stores in Mindoro that users can visit in person or online by redirecting them to the product's official page/site. After being redirected to the store, locals or tourists can now purchase the product or souvenir they wish to purchase in the store. This app will help locals in promoting the popularity of their products.

                        </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/banana.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/nuajan.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/bg1.jpg" alt="">
                            </div>
                        </div>
                        <a href="https://www.travelorientalmindoro.ph/Places/Shops/0" class="btn btn-primary mt-1">Visit Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Shopping</h1>
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">FIND STORES THAT CAN FULFILL ALL OF YOUR NEEDS.</h6>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/banana.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Details/8" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                            <h5 class="text-white">John-Nette Banana Chips</h5>
                            <span>Zone 2, Pinamalayan, Oriental Mindoro</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/farm.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://www.facebook.com/EandBFarm" target="_blank"><i class="ti-world mr-2"></i>Visit Website
                            <h5 class="text-white">E And B Farm</h5>
                            <span>San Teodoro, Oriental Mindoro</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/cake.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/26" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                            <h5 class="text-white">Krizshem's Cassava Cake</h5>
                            <span>Pinamalayan, Oriental Mindoro</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/puregold.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://puregold.com.ph" target="_blank"><i class="ti-world mr-2"></i>Visit Website
                            <h5 class="text-white">Puregold Calapan</h5>
                            <span>San Vicente  North, Calapan City, Oriental Mindoro</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/small.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/45" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                            <h5 class="text-white">Small Creation Variety</h5>
                            <span>San Vicente East, Calapan City, Oriental Mindoro</span>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/merls.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/109" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                            <h5 class="text-white">Merl's Native Delicacies</h5>   
                        <span>Lumangbayan, Calapan City, Oriental Mindoro</span>
                        
                        </a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/bongabong.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/100" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                            <h5 class="text-white">HN Organic Farm Products</h5>   
                        <span> Bongabong, Oriental Mindoro</span>

                    </a>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="destination-item position-relative overflow-hidden mb-2">
                <img class="img-fluid" src="img/nuajan.jpg" alt="">
                <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/43" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
                    <h5 class="text-white">Naujan Souvenir Shop</h5>   
                <span>Naujan, Oriental Mindoro</span>

            </a>

    </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
    <div class="destination-item position-relative overflow-hidden mb-2">
        <img class="img-fluid" src="img/farm.jpg" alt="">
        <a class="destination-overlay text-white text-decoration-none" href="https://shopmore.travelorientalmindoro.ph/Product/Store/99" target="_blank"><i class="ti-shopping-cart mr-2"></i>Visit Online Store
            <h5 class="text-white">Samahang Pangkabuhayan Ng Mga Taga-Dulangan</h5>   
        <span>PUERTO GALERA</span>

    </a>

</div>
</div>

    </div>
    <!-- Destination End -->
    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Ratings</h6>
                <h1>Product Rating</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/banana.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i> Pinamalayan </small>
                                
                            </div>
                            <a class="h5 text-decoration-none" href="">John-Nette Banana Chips</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/farm.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>San Teodoro</small>
                               
                            </div>
                            <a class="h5 text-decoration-none" href="">E And B Farm</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/merls.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Lumangbayan</small>
                               
                            </div>
                            <a class="h5 text-decoration-none" href="">Merl's Native Delicacies</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/small.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>San Vicente East</small>
                                
                            </div>
                            <a class="h5 text-decoration-none" href="">Small Creation Variety</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/nuajan.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Nuajan</small>
                                
                            </div>
                            <a class="h5 text-decoration-none" href="">Nuajan Souvenir Shop</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/puregold.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>San Vicente North</small>
                               
                            </div>
                            <a class="h5 text-decoration-none" href="">Puregold Calapan</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">THE</h6>
            <h1>Proponents</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/tusing.png" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Tusing, Lawrence John</h5>
                        <p class="m-0">Lead and Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/apple.png" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Abundo, Precious Apple</h5>
                        <p class="m-0">Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/jona.png" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Dini-ay, Jonalyn</h5>
                        <p class="m-0">Programmer and Database manager</p>
                    </div>
                </div>
            </div>
        
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
   

   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">ECONO</span>TOUR</h1>
                </a>
                <p>We Provide Best attractions, hotels, restaurants, and shops</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
            
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Municipalities</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
    
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Municipalities</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>West Rembo, Makati City, Philippines</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>econotour@website.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="">Eunoia Tech</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>