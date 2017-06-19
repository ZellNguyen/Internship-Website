<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaZel | Login</title>

    <!-- Latest compiled and minified CSS -->
    <base href="http://hoadnguyen.com/kazel/" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/elegant-icons-style.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/style-responsive.css">
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>bootstrap/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url() ?>bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-img3-body">

    <div class="container">
	    <?php
            $attributes = array('class' => 'login-form');
            echo form_open('clogin', $attributes);
        ?>
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                  <span class="input-group-addon"><i class="icon_profile"></i></span>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <label class="checkbox">
                    <!-- <input type="checkbox" value="remember-me"> Remember me -->
                    <span class="pull-right"> <a href="<?php echo base_url() ?>index.php/creset"> Forgot Password?</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                <a href="<?php echo site_url('cregister'); ?>" class="btn btn-default btn-lg btn-block" role="button">Signup</a>
            </div>
        <?php echo form_close(); ?>
        <h2 style="text-align: center; color: white; margin-top: 50px">Log in with username: <strong>admin</strong> and password: <strong>admin</strong>.</h2>
    </div>
    
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
