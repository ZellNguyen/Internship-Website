<section id="mainContent">    
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('company'); ?>">Company</a></li>
                        <li class="active">Create New Internship Post</li>
                    </ol>
                    <h2 class="post_titile">New Company Information</h2>
                    <div class="single_page_content">
                        <!-- Form starts -->
                        <form method="post" id="ccreate">
                            <div class="form-group">
                                <label for="cName"><h4>Company or Organization</h4></label>
                                <input type="text" class="form-control" id="cName" name="cName">
                                <span class="text-danger"><?php echo form_error('cName'); ?></span>
                            </div>
                
                            <div class="form-group">
                                <label for="textbox"><h4>Description</h4></label>
                                <input type="text" id="textbox" class="editor" name="textbox">
                            </div>
                            
                            <div class="form-group">
                                <label for="cAddress"><h4>Address</h4></label>
                                <input type="text" class="form-control" id="cAddress" name="cAddress">
                                <span class="text-danger"><?php echo form_error('cAddress'); ?></span>
                            </div>
                    
                            <div class="form-group">
                                <label for="cTel"><h4>Phone Number</h4></label>
                                <input type="text" class="form-control" id="cTel" name="cTel">
                                <span class="text-danger"><?php echo form_error('cTel'); ?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="cEmail"><h4>Email</h4></label>
                                <input type="text" class="form-control" id="cEmail" name="cEmail">
                                <span class="text-danger"><?php echo form_error('cEmail'); ?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="cWebsite"><h4>Website</h4></label>
                                <input type="text" class="form-control" id="cWebsite" name="cWebsite">
                                <span class="text-danger"><?php echo form_error('cWebsite'); ?></span>
                            </div>
                          
                            <input id="submit_btn" type="submit" name="sutmit" class="btn btn-primary" value="Create">
                            <button type="button" class="btn btn-warning" onclick="reload()">Reset</button>
                        </form>
                    <!-- Form ends -->
                    </div>                 
                </div>                  
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">    
    function reload() {
        location.reload();
    }
</script>