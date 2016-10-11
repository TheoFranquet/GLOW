<!DOCTYPE php>

<?php

session_start();
if(!isset($_SESSION['my_name'])){
   header("Location: default.htm#");
}

?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GLOW - Settings</title>
    <link rel="icon" href="/img/Picture2.png">

            
    <!-- Main Style Table-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!--Icon Fonts Table-->
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


    <!-- Custom Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="default.htm# #page-top">
                    <i class="fa fa-home"></i>  <span class="light">GLOW</span> 
                </a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!--Settings Intro-->
    <header class="settings-intro">
        <div class="settings-intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Welcome back
                            <?php
                                session_start();
                                echo $_SESSION['my_name'];
                            ?>
                        !</h1>
                        <h2 class="settings-intro-text">Change your settings here to tailor your thermostat to your home</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>



<form action="settings-write.php" method="post">
    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Please choose your age group:</h3>
                        <select name="agegroup">
                            <option value='18-25'>18-25</option>
                            <option value='25-65'>26-65</option>
                            <option value='65+'>66+</option>
                        </select>
                        <span style="float:right">
                            <a href="#supplier" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated" style="margin-top: 6px"></i>
                            </a>
                        </span>
                        <h3 class="settings-inter-text" style="padding-top: 30px">Please enter last month's bill price:</h3>
                        <span style="padding-right:15px" class="adjective">£</span><input type="text" name="lastbill">
                        <h3 class="settings-inter-text" style="padding-top: 50px"   id="supplier">Please choose your energy supplier and tariff:</h3>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Pricing Table Section -->
        <section id="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="pricing">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Sainsbury's Energy</p>
                                    <p class="pricing-rate"><img height="100" width="270" src="img\sainsburys-energy.png"></p>
                                </div>

                                <div class="pricing-list">
                                    <ul class="submenu">
                                        <li><input type="radio" name= "tariff" value="Fixed Price December 2016"> Fixed Price December 2016</li>
                                        <li><input type="radio" name= "tariff" value="Price Promise December 2016"> Price Promise December 2016</li> <!--Pick up at stage 2: http://www.web2feel.com/working-with-css-drop-down-menus-and-animate-css/-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">sse</p>
                                    <p class="pricing-rate"><img height="100" width="280" src="img\SSE_Logo.png"></p></p>
                                </div>

                                <div class="pricing-list">
                                    <ul class="submenu">
                                        <li><input type="radio" name= "tariff" value="SSE 1 Year Fixed v3 Paperless Billing"> SSE 1 Year Fixed v3 Paperless Billing</li>
                                        <li><input type="radio" name= "tariff" value="SSE-se 1 Year Fixed v3 Paperless Billing"> SSE-se 1 Year Fixed v3 Paperless Billing</li>
                                        <li><input type="radio" name= "tariff" value="SSE-sh 1 Year Fixed v3 Paperless Billing"> SSE-sh 1 Year Fixed v3 Paperless Billing</li>
                                        <!--<li><i class="fa fa-smile-o"></i>first 10 day free</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">ExtraEnergy</p>
                                    <p class="pricing-rate"><img height="100" width="240" src="img\extraenergy.png"></p>
                                </div>

                                <div class="pricing-list">
                                    <ul class="submenu">
                                        <li><input type="radio" name= "tariff" value="Variable Price v1"> Variable Price v1</li>
                                        <li><input type="radio" name= "tariff" value="Bright Fixed Price 2016 v5"> Bright Fixed Price 2016 v5</li>
                                        <li><input type="radio" name= "tariff" value="Fresh Fixed Price Dec 2016 v8"> Fresh Fixed Price Dec 2016 v8</li>
                                        <li><input type="radio" name= "tariff" value="Clear Fixed Price Dec 2016 v5"> Clear Fixed Price Dec 2016 v5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">first:utility</p>
                                    <p class="pricing-rate"><img height="60" width="280" style="margin-top:20px; margin-bottom:20px" src="img\first.png"></p>
                                </div>

                                <div class="pricing-list">
                                    <ul class="submenu">
                                        <li><input type="radio" name= "tariff" value="iSave Fixed January 2016"> iSave Fixed January 2016</li>
                                        <!--<li><i class="fa fa-check-square-o"></i><span>unlimited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>unlimited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">ovo energy</p>
                                    <p class="pricing-rate"><img height="102" width="102" src="img\ovo.png"></p>
                                </div>

                                <div class="pricing-list">
                                    <ul class="submenu">
                                        <li><input type="radio" name= "tariff" value="Better Energy Fixed"> Better Energy Fixed</a></li>
                                        <li><input type="radio" name= "tariff" value="Greener Energy Fixed"> Greener Energy Fixed</a></li>
                                        <!--<li><i class="fa fa-user"></i><span>unlimited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span style="padding-left: 90px">
                    <a href="#physical" class="btn btn-circle page-scroll" style="float: centre" >
                        <i class="fa fa-angle-double-down animated" style="margin-top: 6px"></i>
                    </a>
                </span>
                </div>
            </div>
        </section>
        <!-- Pricing Table Section End -->

    <header class="settings-inter" id="physical">
        <div class="settings-inter-body" style="padding-top:50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Heater Type:</h3>
                        <select name="heater">
                            <option value='electric'>Electric</option>
                            <option value='gas'>Gas</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Floor area:</h3>
                        <input type="text" name="f-area"><span style="padding-left:20px" class="adjective">m<sup>2</sup></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Wall area and thickness connected to the outside, and wall material type:</h3>
                        <input type="text" name="wall-area" placeholder="Wall area"><span style="padding-left:20px; padding-right:20px" class="adjective">m<sup>2</sup></span>
                        <select name="wall-type">
                            <option value='concrete'>Concrete</option>
                            <option value='plaster'>Plaster</option>
                            <option value='stone'>Stone</option>
                            <option value='polymer'>Polymer</option>
                            <option value='mineral-wool'>Mineral wool</option>
                        </select><span style="padding-left:20px; padding-right:20px" class="adjective">Material Type</span>
                        <input type="text" name="wall-width" placeholder="Thickness"><span style="padding-left:20px; padding-right:20px" class="adjective">m</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Window area connected to the outside, and window type:</h3>
                        <input type="text" name="win-area" placeholder="Window area"><span style="padding-left:20px; padding-right:20px" class="adjective">m<sup>2</sup></span>
                        <select name="win-type">
                            <option value='glass'>Glass</option>
                            <option value='double-glazed'>Double glazed</option>
                        </select><span style="padding-left:20px" class="adjective">Window Type</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="settings-inter-text">Ceiling height:</h3>
                        <input type="text" name="ceiling"><span style="padding-left:20px" class="adjective">m</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <fieldset id="actions">
                            <input type="submit" id="save" value="Submit">
                        </fieldset>   
                    </div>
                </div>
            </div>
        </div>
    </header>
</form>

    
    <header class="settings-inter">
        <div class="settings-inter-body">
            <div class="container">
                <div class="row">
                    <a class="status_message" name="bottomOfPage">
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="settings-inter-text">
                                <?php 
                                session_start();
                                if($_SESSION['status']==1){
                                    echo "New record created successfully";
                                }
                                if($_SESSION['status']==0){
                                    echo "Settings could not be submitted - Check connection";
                                }
                                ?>
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; GLOW 2016</p>
        </div>
    </footer>


        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

   

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>