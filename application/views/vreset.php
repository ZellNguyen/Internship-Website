<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaZel | Request resetPW</title>
    
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url() ?>index.php/cregister"><i class="fa fa-user-plus"></i> Sign Up</a></li>
            <li><a href="<?php echo base_url() ?>index.php/clogin"><i class="fa fa-sign-in"></i> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $this->session->flashdata('verify_msg'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Reset Password Form</h4>
                </div>
                <div class="panel-body">
                    <?php $attributes = array("name" => "resetform");
                    echo form_open("creset/reset", $attributes);?>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                    
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                        <button type="button" onclick="location.href='<?php echo site_url('clogin') ?>'" class="btn btn-default">Cancel</button>
                    </div>

                    <?php echo form_close(); ?>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>