<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-9 col-md-9">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
                    </ol>
                    <div class="jumbotron">
                        <h1>Hello, Administrator!</h1>
                        <p>Welcome to the Admin page.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <p class="text-center">
                                <a href="<?php echo site_url('ccrud') ?>" class="btn btn-primary"><i class="fa fa-users"></i> User DB</a>
                            </p>
                            <p class="text-center">
                                <a href="<?php echo site_url('ccrud/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> New User</a>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <p class="text-center">
                                <a href="<?php echo site_url('internship/database') ?>" class="btn btn-primary"><i class="fa fa-file-text-o"></i> Internship DB</a>
                            </p>
                            <p class="text-center">
                                <a href="<?php echo site_url('internship/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> New Internship</a>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <p class="text-center">
                                <a href="<?php echo site_url('company/database') ?>" class="btn btn-primary"><i class="fa fa-building-o"></i> Company DB</a>
                            </p>
                            <p class="text-center">
                                <a href="<?php echo site_url('company/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> New Company</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>