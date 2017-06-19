<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaZel | Registration</title>
    
    <!-- Latest compiled and minified CSS -->
    <base href="http://hoadnguyen.com/kazel/" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/elegant-icons-style.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/style-responsive.css">
</head>
<body class="login-img3-body">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php echo $this->session->flashdata('verify_msg'); ?>
            </div>
        </div>
        <br/><br/><br/>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><b>REGISTRATION FORM</b></h4>
                    </div>
                    <div class="panel-body">
                        <?php $attributes = array("name" => "registrationform");
                        echo form_open("cregister/register", $attributes);?>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" name="fullname" placeholder="Your Full Name" type="text" value="<?php echo set_value('fullname'); ?>" />
                            <span class="text-danger"><?php echo form_error('fullname'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Password</label>
                            <input class="form-control" name="password" placeholder="Password" type="password" />
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Confirm Password</label>
                            <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                            <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                        </div>

                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary">Signup</button>
                            <button name="reset" type="reset" class="btn btn-warning">Reset All</button>
                            <a href="<?php echo site_url('clogin'); ?>" class="btn btn-info">Login</a>
                        </div>
                        <!-- <button name="cancel" onclick="location.href='<?php echo site_url('clogin/user/') ?>'" class="btn btn-default">Cancel</button> -->
                        
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