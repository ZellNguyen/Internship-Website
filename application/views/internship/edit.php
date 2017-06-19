<section id="mainContent">    
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('internship'); ?>">Internship</a></li>
                        <li class="active">Edit Internship Post</li>
                    </ol>
                    <h2 class="post_titile"><?php echo $intern['iTitle'] ?></h2>
                    <div class="single_page_content">
                        <!-- Form starts -->
                        <form method="post" id="edit">
                            <div class="form-group">
                                <label for="iTitle">Title</label>
                                <input type="text" class="form-control" id="iTitle" name="iTitle" value="<?php echo $intern['iTitle']?>">
                                <span class="text-danger"><?php echo form_error('iTitle'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="cName">Name of Company/ Organization</label>
                                <select class="form-control m-bot15" id="cName" name="cName">
                                    <option><?php echo $company['cID'] . ". " .$company['cName'] ?></option>
                                    <?php foreach ($companyList as $row): ?>
                                        <?php if($company['cName'] !== $row['cName']) echo '<option>' .$row['cID']. '. '. $row['cName'] . '</option>' ;?>
                                    <?php endforeach; ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('cName'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="textbox">Internship Description</label>
                                <!-- <input type="text" id="textbox" class="editor" name="textbox" value="<?php echo $intern['iDes'] ?>"> -->
                                <div id="textbox" class="editor" name="textbox"><?php echo $intern['iDes'] ?></div>
                            </div>
                            <div class="form-group" id="position">
                                <label for="pName">Internship Position(s)</label>
                                <button type="button" class="btn btn-primary btn-xs" onclick="addnew()"><i class='fa fa-plus'></i></button>
                                <?php foreach ($position as $pos): ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="pName[]" value="<?php echo $pos['pName']; ?>">
                                        <span class="input-group-addon"><button class="btn btn-warning btn-xs" onclick="$(this).closest('div').remove();" style="padding: 0 5px"><i class='fa fa-times'></i></button></span>
                                    </div> 
                                <?php endforeach ?>
                                <span class="text-danger"><?php echo form_error('pName'); ?></span>
                            </div> 
                            <div class="form-group">
                                <label for="iDeadline"><h4>Internship Deadline</h4></label>
                                <div class='input-group date datetimepicker'>
                                    <input type='text' class="form-control" id="iDeadline" name="iDeadline" value="<?php echo $intern['iDeadline']?>"/>
                                    <span class="input-group-addon">
                                        <!-- <span class="glyphicon glyphicon-calendar"></span> -->
                                        <i class='fa fa-calendar'></i>
                                    </span>
                                </div>
                            </div>
                            <input type="hidden" id="iID" name="iId" value="<?php echo $intern['iID'] ?>" />
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


<script language="javascript">
    function addnew(){
        position.innerHTML = position.innerHTML + '<div class="input-group"> <input type="text" class="form-control" id="pName" name="pName[]"><span class="input-group-addon"><button class="btn btn-warning btn-xs" onclick="$(this).closest(\'div\').remove();" style="padding: 0 5px"><i class=\'fa fa-times\'></i></button></span></div>';
    };
    function reload() {
        location.reload();
    }
</script> 