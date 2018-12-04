<?php
    include_once("config/core.php");
    include_once("model/object/user.php");
    if(isset($_GET["logout"])) {
        session_destroy();
        header("Location: {$home_url}index.php");
    }else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
        $user = unserialize($_SESSION['current_user']);

    } 
?>

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
            <nav class="col-md-12 navbar navbar-expand-md navbar-dark menuHead fixed-top">
                <a class="nav-link" href="index.php" title="Home" id="nameCompanyMenu">MVTech</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav col-12 col-sm-12 col-md-12">
                        <li class="nav-item col-12 col-sm-9 offset-sm-2 col-md-12">
                            <div class="row">
                                <?php

                                    if(isset($user)){
                                        if($user->type==1){
                                         echo'<div class="col-5 offset-sm-1 col-sm-4 offset-md-4 col-md-3 text-right">
                                                <button class="btn btn-danger col-12 col-sm-12 col-md-9 hvr-pop btnManager">Manager</button>
                                              </div>
                                              <div class="col-4 col-sm-3 col-md-2 pt-3 text-right">
                                                   <a class="btnLoginHome hvr-rotate">'.$user->username.'</a>
                                              </div>
                                              <div class="col-3 col-sm-3 col-md-2 pt-3">
                                                   <a href="index.php?logout=true" class="btnSignUpHome hvr-rotate">Log out</a>
                                              </div>';
                                        }else{
                                            echo '<div class="col-7 col-sm-7 col-md-9 pt-3 text-right">
                                                    <a href="login.php" class="btnLoginHome hvr-rotate">'.$user->username.'</a>
                                                  </div>
                                                  <div class="col-5 col-sm-5 col-md-2 pt-3">
                                                    <a href="index.php?logout=true" class="btnSignUpHome hvr-rotate">Log out</a>
                                                  </div>';
                                        }
                                    }else{
                                        echo '<div class="col-6 col-sm-6 col-md-2 offset-md-7 pt-3 text-right">
                                                <a href="login.php" class="btnLoginHome hvr-rotate">Log in</a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 pt-3">
                                                <a href="signup.php" class="btnSignUpHome hvr-rotate">Sign up</a>
                                            </div>';
                                    }

                                ?>
                            </div>
                        </li>
                    </ul>
                </div>  
            </nav>
        </div>
        
        <div class="row">
            <div class="carousel slide bgHome" id="carousel-144218">
                <!--
                
                -->
                <div class="btnSlideHome">
                    <div class="row btnHome col-md-12">
                       
                        <?php showPopupLevel() ?>

                        <a href="post.php" class="button hvr-wobble-to-bottom-right healthy col-6 col-sm-4 col-md-4">
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


<!-- modal show level -->
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



        <!-- modal Request Login -->
        <div id="modalRequestLogin" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>You must login before start training!</p>
                    </div>
                    <div class="modal-footer">
                        <a type="button" href="login.php" class="btn btn-success con-md-1 offset-md-5">OK</a>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>


 <?php 
    function showPopupLevel(){

        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            echo '<a href="" data-toggle="modal" data-target="#modalLevel" class="button hvr-wobble-to-bottom-right training col-6 col-sm-4 offset-sm-2 col-md-4 offset-md-2">
                TRAINING
                </a>';

        }else{
            echo '<a href="" data-toggle="modal" data-target="#modalRequestLogin" class="button hvr-wobble-to-bottom-right training col-6 col-sm-4 offset-sm-2 col-md-4 offset-md-2">
                TRAINING
                </a>';
        }

    }
?>