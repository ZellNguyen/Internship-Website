<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KaZel | <?php echo $pageTitle ?> </title>

        <base href="http://hoadnguyen.com/kazel/theme/" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <!-- for fontawesome icon css file -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- for content animate css file -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- google fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
         <!-- slick slider css file -->
        <link href="css/slick.css" rel="stylesheet">     
        <!-- <link href="css/theme-red.css" rel="stylesheet"> -->  
        <link href="css/theme.css" rel="stylesheet">	 
        <!-- wysiwyg css files -->
        <link href="css/summernote.css" rel="stylesheet">
        <!-- date picker-->
        <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" />
        <!-- main site css file -->    
        <link href="style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
<!-- =========================
//////////////This Theme Design and Developed //////////////////////
//////////// by www.wpfreeware.com======================-->

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End Preloader -->

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <div class="container">
        <!-- start header area -->
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- start header bottom -->
                    <div class="header_bottom">
                        <div class="header_bottom_left">
                        <!-- for img logo -->

                        <!-- <a class="logo" href="index.html">
                        <img src="img/logo.jpg" alt="logo">
                        </a>-->
                        <!-- for text logo -->
                        <a class="logo" href="<?php echo site_url('homepage'); ?>">
                        by<strong>Kazel</strong> <span>Your chances, your future!</span>
                        </a> 

                        </div>
                        <div class="header_bottom_right">
                            <a href=""><img src="http://placehold.it/728x90" alt="img"></a>
                        </div>
                    </div><!-- End header bottom -->
                </div>
            </div>
        </header><!-- End header area -->
        <!-- Static navbar -->
        <div id="navarea">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>             
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav custom_nav">
                            <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                            <?php if ($role =='admin') 
                                    {echo '<li class="dropdown">
                            <a href="" class="" data-toggle="dropdown" role="button" aria-expanded="false">Internship</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="' . site_url('internship') .'">Active Post</a></li>
                                <li><a href="' . site_url('internship/hidden') . '">Hidden Post</a></li>
                            </ul>
                            </li>';} else {
                                   echo '<li><a href="'. site_url('internship').'">Internship</a></li>';
                            }
                                
                            ?>
                            <?php if ($role =='admin') 
                                    {echo '<li class="dropdown">
                            <a href="" class="" data-toggle="dropdown" role="button" aria-expanded="false">Company</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="' . site_url('company/') .'">Available</a></li>
                                <li><a href="' . site_url('company/hidden') . '">Hidden</a></li>
                            </ul>
                            </li>';} else {
                                   echo '<li><a href="'. site_url('company').'">Company</a></li>';
                            }
                                
                            ?>
                            <li><a href="<?php echo site_url('about') ?>">About</a></li>
                            <li class="dropdown">
                            <a href="" class="" data-toggle="dropdown" role="button" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo site_url('account/'.$id); ?>">Account Info</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/chome/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                            </li>
                            <?php if ($role=='admin')
                                    {   
                                        echo '<li><a href="';
                                        echo site_url('dashboard');
                                        echo '">Dashboard</a></li>';
                                    }
                            ?>
                            
                        </ul>
                
                    </div><!--/.nav-collapse -->

                </div><!--/.container-fluid -->
            </nav>
        </div>