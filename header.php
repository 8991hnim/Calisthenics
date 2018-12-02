<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calisthenics</title>
    <script type="text/javascript" src="helper/jquery/jquery.js"></script>
    <script type="text/javascript" src="helper/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="helper/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="helper/hover/css/hover.css" media="all">
    <link rel="stylesheet" type="text/css" href="helper/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="helper/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-sm menuHead fixed-top">
                <ul class="navbar-nav col-12 col-sm-12 col-md-12">
                    <li class="nav-item col-1 col-sm-1 col-md-1" id="nameCompanyMenu">
                        <a class="nav-link" href="index.php" title="Home">MVTech</a>
                    </li>
                    <li class="nav-item col-10 col-sm-9 offset-sm-2 col-md-11 btnMenu">
                        <div class="row">
                            <div class="col-2 col-sm-9 col-md-2 offset-md-7 pt-3 text-right">
                                <a href="login.php" class="btnLoginHome hvr-rotate">Log in</a>
                            </div>
                            <div class="col-2 col-sm-3 col-md-3 pt-3">
                                <a href="signup.php" class="btnSignUpHome hvr-rotate">Sign up</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="row">
            <div class="carousel slide bgHome" id="carousel-144218">
                <!--
                
                -->
                <div class="btnSlideHome">
                    <div class="row btnHome col-md-12">
                        <a href="" data-toggle="modal" data-target="#modalLevel" class="button hvr-wobble-to-bottom-right training col-6 col-sm-4 offset-sm-2 col-md-4 offset-md-2">
                            TRAINING
                        </a>
                        <a href="login.html" class="button hvr-wobble-to-bottom-right healthy col-6 col-sm-4 col-md-4">
                            NUTRITION
                        </a>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="activeSlideHome">
                        <img class="d-block w-100" alt="Carousel Bootstrap First" src="image/background/bg_slide1.jpg" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Third" src="image/background/bg_slide2.png" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="image/background/bg_slide3.jpg" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="image/background/bg_slide4.jpg" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-144218" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span> 
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-144218" data-slide="next">
                    <span class="carousel-control-next-icon"></span> 
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="modal" id="modalLevel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 level1">
                            <div class="row">
                                <a href="training.php" class="col-md-12 hvr-float" id="selectLevel">
                                    <p class="text-center text-light">LEVEL 1</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel1">6/30</p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 level2">
                            <div class="row">
                                <a href="training.php" class="col-md-12 hvr-float" id="selectLevel">
                                    <p class="text-center text-light">LEVEL 2</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel2">6/30</p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 level3">
                            <div class="row">
                                <a href="training.php" class="col-md-12 hvr-float" id="selectLevel">
                                    <p class="text-center text-light">LEVEL 3</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel3">6/30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

