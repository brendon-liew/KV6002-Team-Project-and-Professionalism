<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Commercial</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: Oswald, sans-serif;background: url(&quot;assets/img/lines%20backround%202%20dark.jpg&quot;);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="navclass" style="color: var(--gray-dark);background: rgba(255,255,255,0.62);">
        <div class="container"><a class="navbar-brand" href="index.html" style="background: url(&quot;assets/img/logoFinal.png&quot;) center / contain no-repeat;height: 53px;width: 120.8281px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: var(--warning);">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="color: rgb(0,0,0);"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="color: rgb(255,255,255);background: rgba(0,0,0,0.36);"></div>
                </form>
            </div>
            <<ul class="navbar-nav">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="checkout.html"><i class="fa fa-shopping-basket"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fa fa-user"></i></a></li>
                <li class="nav-item"></li>
            </ul>
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: #434a52;">Account</a>
                <div class="dropdown-menu">

                <?php
                if (isset($_SESSION['logged-in'])) {
                    echo"<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signOut.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Sign out</a></div>";

                } else{
                    (empty($_SESSION['logged-in']));
                    echo "<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signForm.php\" style=\"color: rgb(0,0,0);background: #e5c6db;\">Sign up</a>
                    <a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"login.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Log in</a>";
                }
                ?>
            </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><div id="sidebar-main" class="sidebar sidebar-default sidebar-separate">
    <div class="sidebar-category sidebar-default">
        <div class="category-title">
            <span>Categories</span>
        </div>
        <div class="category-content">
            <ul id="clothes-nav" class="nav flex-column">
                <li class="nav-item">
                    <a href="#woman-item" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                        Women
                    </a>
                    <ul id="woman-item" class="flex-column collapse">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Pants
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Jackets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Shirts
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#man-item" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                        Men
                    </a>
                    <ul id="man-item" class="flex-column collapse">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Pants
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Jackets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Shirts
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Shoes
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#other-clothes" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                         General
                    </a>
                    <ul id="other-clothes" class="flex-column collapse">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                 Accesories
                            </a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div></div>
                <div class="col-md-6">
                    <div id="promo" style="margin: 33px;background: url(&quot;assets/img/poolball.jpg&quot;) center / contain;">
                        <div class="jumbotron" data-bss-hover-animate="pulse" style="background: rgba(255,255,255,0);">
                            <h1 style="background: rgba(0,0,0,0.36);color: rgb(239,209,52);">All other sales can go home</h1>
                            <p style="background: rgba(0,0,0,0.36);color: #efd134;">Sales up to 60% on all summer items</p>
                            <p><a class="btn btn-primary" role="button" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" style="background: #2b2b28;" title="View sales" href="product.html">Shop now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-bss-hover-animate="pulse" id="promo" style="background: url(&quot;assets/img/banner0.jpg&quot;) center / cover;">
        <div class="jumbotron" data-bss-hover-animate="pulse" style="background: rgba(255,255,255,0);height: 354px;padding: 104px;">
            <h1 style="background: rgba(255,255,255,0.68);">Shop your unique summer look</h1>
            <p><a class="btn btn-primary" role="button" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" style="background: #2b2b28;" title="Open collection" href="product.html">Shop now</a></p>
        </div>
    </div>
    <section style="margin: 0px;height: 72px;"></section>
    <div>
        <div class="card-group" style="text-align: center;">
            <div class="card">
                <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;assets/img/shoes.jpg&quot;) center / cover;text-align: center;">
                    <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Extended shoe collection</h4><button class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Shoes</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;assets/img/jacket.jpg&quot;) center / cover;">
                    <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Jacket for all needs</h4><button class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Jackets</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;assets/img/goth%20model.jpg&quot;) top / cover;">
                    <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Styles to mix and match</h4><button class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Styles</button>
                </div>
            </div>
        </div>
    </div>
    <section style="height: 72px;"></section>
    <div data-bss-hover-animate="pulse" id="promo2" style="background: url(&quot;assets/img/products/banner2.jpg&quot;) bottom / cover;height: 393px;">
        <div class="jumbotron" style="background: rgba(255,255,255,0);">
            <h1 style="background: rgba(255,255,255,0.54);">Your new favorite look just arrived</h1>
            <p style="background: rgba(255,255,255,0.71);">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p><a class="btn btn-primary" role="button" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" style="background: #2b2b28;" title="View new arrivals">Shop now</a></p>
        </div>
    </div>
    <section style="height: 72px;"></section>
    <div class="carousel slide" data-ride="carousel" id="carousel-2">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/products/carousel1.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/products/carousel2.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/products/carousel3.jpg" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
        </ol>
    </div>
    <div style="padding: 84px;">
        <section class="article-list" style="background: #e5c6db;">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="color: #434a52;font-size: 46px;">Style feed</h2>
                    <p class="text-center" style="color: rgb(0,0,0);">Inspiration Advice Shopping Fun</p>
                </div>
                <div class="row articles">
                    <div class="col-sm-6 col-md-4 item" data-bss-hover-animate="pulse"><a href="sizeGuide.html"><img class="img-fluid" src="assets/img/size.jpg"></a>
                        <h3 class="name" style="color: #a01492;">Check out our size guide</h3>
                        <p class="description" style="color: rgb(0,0,0);">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="sizeGuide.html"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-sm-6 col-md-4 item" data-bss-hover-animate="pulse"><a href="#"></a><img class="img-fluid" src="assets/img/delivery.jpg">
                        <h3 class="name" style="color: #a01492;">Upcoming items and new delivery system</h3>
                        <p class="description" style="color: rgb(0,0,0);">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-sm-6 col-md-4 item" data-bss-hover-animate="pulse"><a href="#"><img class="img-fluid" src="assets/img/girls.jpg" style="height: 208.625px;width: 311px;"></a>
                        <h3 class="name" style="color: #a01492;">"Rule of 6" Looks just for YOU</h3>
                        <p class="description" style="color: rgb(0,0,0);">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <footer class="footer-dark" style="color: #e87fc9;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Help &amp; Information</h3>
                        <ul>
                            <li><a href="contactPage.html">Contact us</a></li>
                            <li><a href="#">Development</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Futura Clothing</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Team project members(Yunus Celik 1) © 2021</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>
