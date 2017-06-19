<section id="mainContent">    
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('internship'); ?>">Internship</a></li>
                        <li class="active">Create New Internship Post</li>
                    </ol>
                    <h2 class="post_titile">New Internship Information</h2>
                    <div class="single_page_content">
                        <!-- Form starts -->
                        <form method="post" id="create">
                            <div class="form-group">
                                <label for="iTitle"><h4>Title</h4></label>
                                <input type="text" class="form-control" id="iTitle" name="iTitle">
                                <span class="text-danger"><?php echo form_error('iTitle'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="cName"><h4>Name of Company/ Organization</h4>   </label>
                                <select class="form-control m-bot15" id="cName" name="cName">
                                    <?php foreach ($company as $row): ?>
                                        <?php echo '<option>' .$row['cID']. '. '. $row['cName'] . '</option>' ;?>
                                    <?php endforeach; ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('cName'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="textbox"><h4>Internship Description</h4></label>
                                <input type="text" id="textbox" class="editor" name="textbox">
                            </div>
                            <div class="form-group" id="position">
                                <label for="pName"><h4>Internship Position(s)</h4></label>
                                <button type="button" class="btn btn-success btn-xs" onclick="addnew()"><i class='fa fa-plus'></i></button>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pName[]">
                                    <span class="input-group-addon"><button class="btn btn-danger btn-xs" onclick="$(this).closest('div').remove();" style="padding: 0 5px"><i class='fa fa-times'></i></button></span>
                                </div>
                                <span class="text-danger" id="pdanger"><?php echo form_error('pName'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="iDeadline"><h4>Internship Deadline</h4></label>
                                <div class='input-group date datetimepicker'>
                                    <input type='text' class="form-control" id="iDeadline" name="iDeadline" />
                                    <span class="input-group-addon">
                                        <!-- <span class="glyphicon glyphicon-calendar"></span> -->
                                        <i class='fa fa-calendar'></i>
                                    </span>
                                </div>
                            </div>
                            <input type="hidden" id="admin_id" name="admin_id" value="<?php echo $id ?>" />
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
    function addnew(){
        $('<div class="input-group"> <input type="text" class="form-control" id="pName" name="pName[]"><span class="input-group-addon"><button class="btn btn-danger btn-xs" onclick="$(this).closest(\'div\').remove();" style="padding: 0 5px"><i class=\'fa fa-times\'></i></button></span></div>').insertBefore("#pdanger");
    };
    
    function reload() {
        location.reload();
    }
</script>