<section id="mainContent">    
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('company'); ?>">Company</a></li>
                        <li class="active">Edit Company</li>
                    </ol>
                    <h2 class="post_titile"><?php echo $company['cName'] ?></h2>
                    <div class="single_page_content">
                        <!-- Form starts -->
                        <form method="post" id="cedit">
                            <div class="form-group">
                                <label for="cName">Company</label>
                                <input type="text" class="form-control" id="cName" name="cName" value="<?php echo $company['cName']?>">
                                <span class="text-danger"><?php echo form_error('cName'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="textbox">Company Description</label>
                                <div id="textbox" class="editor" name="textbox"><?php echo $company['cDes'] ?></div>
                            </div>
                            <div class="form-group">
                                <label for="cAddress">Address</label>
                                <input type="text" class="form-control" id="cAddress" name="cAddress" value="<?php echo $company['cAddress']?>">
                                <span class="text-danger"><?php echo form_error('cAddress'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="cTel">Phone Number</label>
                                <input type="text" class="form-control" id="cTel" name="cTel" value="<?php echo $company['cTel']?>">
                                <span class="text-danger"><?php echo form_error('cTel'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="cEmail">Email</label>
                                <input type="text" class="form-control" id="cEmail" name="cEmail" value="<?php echo $company['cEmail']?>">
                                <span class="text-danger"><?php echo form_error('cEmail'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="cWebsite">Website</label>
                                <input type="text" class="form-control" id="cWebsite" name="cWebsite" value="<?php echo $company['cWebsite']?>">
                                <span class="text-danger"><?php echo form_error('cWebsite'); ?></span>
                            </div>
                            <input type="hidden" id="cID" name="cID" value="<?php echo $company['cID'] ?>" />
                            <input id="submit_btn" type="submit" name="sutmit" class="btn btn-primary" value="Edit">
                            <button type="button" class="btn btn-warning" onclick="reload()">Reset</button>
                        </form>
                    <!-- Form ends -->
                    </div>                 
                </div> 
                <button class="btn btn-primary btn-md" onclick="history.go(-1);"><i class="fa fa-angle-double-left"></i> Back</button>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">    
    function reload() {
        location.reload();
    }
</script>
