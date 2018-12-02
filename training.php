<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calisthenics</title>
    <link rel="stylesheet" type="text/css" href="helper/css/style.css">
    <link rel="stylesheet" type="text/css" href="helper/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="helper/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="helper/hover/css/hover.css" media="all">
    <script type="text/javascript" src="helper/jquery/jquery.js"></script>
    <script type="text/javascript" src="helper/bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row menuHead">
            <nav class="navbar navbar-expand-sm">
                <ul class="navbar-nav">
                    <li class="nav-item" id="nameCompanyMenu">
                        <a class="nav-link" href="index.php" title="Home">MVTech</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 headerTraining text-center">
                <div class="btn-group btn-group-lg flex-wrap btnGroupDay1">
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">01</button> 
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">02</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">03</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">04</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">05</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">06</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">07</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">08</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">09</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">10</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">11</button>
                    <button type="button" class="col-3 col-sm-1 col-md-1 btn hvr-float">12</button>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="text-center text-danger mt-3 mb-3">Ngày 1</h2>
            <div class="row text-center">
                <div class="col-md-12">
                    <a href="post.php" class="btnFinishTraining" title="Finish" id="btnFinishTraining">
                        <i class="fa fa-trophy"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-1 col-sm-1 col-md-1">
                    <a href="" class="col-md-12 backNext" title="Back" id="btnLeftTraining">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
                <div class="col-1 offset-9 col-sm-1 offset-sm-10 col-md-1 offset-md-10 text-right">
                    <a href="" class="col-md-12 backNext" title="Next" id="btnRightTraining">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-5 mb-3">
                <div class="col-12 col-sm-12 col-md-6 offset-md-1">
                    <iframe class="row" height="315" width="100%" src="https://www.youtube.com/embed/CQ7XUCQ6pbE">
                    </iframe>
                </div>
                <div class="col-md-5 mt-5 text-center" id="infoTraining">
                    <div class="row mt-5">
                        <div class="col-2 offset-4 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Name: </p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-9 text-light text-left">
                            <p id="nameTraining">how to train your dragon</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 offset-4 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Set: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light">
                            <p id="setTraining">21</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 offset-4 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Rep: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light" id="">
                            <p id="repTraining">21</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 offset-4 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Breaks: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light">
                            <p id="breaksTraining">21</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php 
        require"footer.php";
 ?>