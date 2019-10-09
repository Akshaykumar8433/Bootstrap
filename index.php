<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ristorante Con Fusion</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-iteam active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span>
                            Home</a></li>
                    <li class="navbar-iteam "><a class="nav-link" href="./aboutus.php"><span
                                class="fa fa-info fa-lg"></span> About Us</a></li>
                    <li class="navbar-iteam "><a class="nav-link" href="./contactus.php"><span
                                class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <a href="logout.php" id="LoginButton">
                        <span class="fa fa-sign-in"></span>Logout
                    </a>
                </span>
            </div>

        </div>

    </nav>

    <!-- <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" name="email"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" name="passwords"
                                    id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" name="sign_in" class="btn btn-primary btn-sm ml-1">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div> -->

    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reserve a Table</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <p class="col-sm-2">Number of Guests</p>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio"> 1 </label>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio"> 2 </label>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio" checked=""> 3 </label>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio"> 4 </label>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio"> 5 </label>
                            <label class="col-1 radio-inline"><input type="radio" name="optradio"> 6 </label>
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-2">Section</p>
                            <div class="col-md-3 btn-group btn-group-toggle " data-toggle="buttons">
                                <button type="radio" class="btn btn-success active">Non-Smoking</button>
                                <button type="radio" class="btn btn-danger ">Smoking</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateandtime" class="col-md-2 coll-form-label">Date and Time </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Date">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-8">
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Reserve</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our
                        lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-12 col-sm-3 align-self-center">
                    <img class="img-fliud " src="img/logo.png">
                </div>
                <div class="col-12 col-sm align-self-center">
                    <a class="btn btn-sm btn-warning btn-block " id="ReserveButton">Reserve
                        Table</a>

                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/uthappizza.png" alt="uthappizza">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span
                                        class="badge badge-pill  badge-secondary">$4.99</span></span>
                                </h2>
                                <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and
                                    Italian
                                    pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion,
                                    Guntur
                                    chillies and Buffalo Paneer.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/buffet.png" alt="buffet">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                                <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five
                                    different salads, six enticing appetizers, six main entrees and five choicest
                                    desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/alberto.png" alt="alberto">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Alberto Somayya</h2>
                                <h4>Executive Chef</h4>
                                <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide
                                    International
                                    experience having worked closely with whos-who in the culinary world, he specializes
                                    in
                                    creating mouthwatering Indo-Italian fusion experiences. </p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <a>
                        <button class="btn btn-danger btn-sm " id="carouselButton">
                            <span class="fa fa-pause"></span>
                        </button>
                    </a>

                </div>
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/uthappizza.png">
                    <div class="media-body">
                        <h2 class="mt-0">Uthappizza <span class="badge badge-danger">HOT</span> <span
                                class="badge badge-pill  badge-secondary">$4.99</span></span></h2>
                        <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian
                            pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur
                            chillies and Buffalo Paneer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    <div class="media-body">
                        <h2>Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                        <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five
                            different salads, six enticing appetizers, six main entrees and five choicest desserts. Free
                            flowing bubbly and soft drinks. All for just $19.99 per person </p>
                    </div>
                    <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/buffet.png">
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img class="d-flex mr-3 align-self-center img-thumbnail" src="img/alberto.png">
                    <div class="media-body">
                        <h2 class="mt-0">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide International
                            experience having worked closely with whos-who in the culinary world, he specializes in
                            creating mouthwatering Indo-Italian fusion experiences. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        HONG KONG<br>
                        <i class="fa fa-phone fa-lg"></i> +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>Fax: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>Email: <a
                            href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                                class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin fa-lg"></i></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i
                                class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="row  col-auto justify-content-center">
                <div>
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            
            $("#mycarousel").carousel( { interval: 1000 } );
            $("#carouselButton").click(function () {
                if ($("#carouselButton").children("span").hasClass('fa-pause')) {
                    $("#mycarousel").carousel('pause');
                    $("#carouselButton").children("span").removeClass('fa-pause');
                    $("#carouselButton").children("span").addClass('fa-play');
                }
                else if ($("#carouselButton").children("span").hasClass('fa-play')) {
                    $("#mycarousel").carousel('cycle');
                    $("#carouselButton").children("span").removeClass('fa-play');
                    $("#carouselButton").children("span").addClass('fa-pause');
                }
            });
            $("#ReserveButton").click(function(){
                $("#reserveModal").modal("toggle");
            });
            $("#LoginButton").click(function(){
                $("#loginModal").modal("toggle");
            });
        });

    </script>

</body>

</html>