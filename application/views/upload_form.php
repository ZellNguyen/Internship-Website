<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaZel | Upload Error</title>
      
    <!-- Latest compiled and minified CSS -->
    <base href="http://hoadnguyen.com/kazel/" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/elegant-icons-style.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700' rel='stylesheet' type='text/css'>
      
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/style-responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>bootstrap/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url() ?>bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#eeeeee;">

    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#">KaZel</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Asia</a></li>
            <li><a href="#">Europe</a></li> 
            <li><a href="#">US</a></li>
            <li><a href="#">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo site_url('cusercrud/myprofile/' . $id); ?>">My Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/chome/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-block alert-danger fade in">
              <strong><?php echo $error; ?></strong>
          </div> <br/>
          <a href="<?php echo site_url('cusercrud/myprofile/' . $id); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
      

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
  </body>
</html>