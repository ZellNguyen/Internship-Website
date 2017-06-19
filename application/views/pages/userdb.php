<section id="mainContent">
    <div class="jumbotron">
        <p>
        <a href="<?php echo site_url('ccrud/add') ?>" class="btn btn-primary"><i class='fa fa-plus'></i> Add new user</a>
        </p>
        <div class="table-responsive">
            <h3 class="text-center tableHeading"><b>USER DATABASE</b></h3>
            <table class="table table-bordered table-hover table-striped text-center">  
                <thead align="center">
                    <tr>
                        <td width="40px" class="tableHeader"><b>ID</b></td>
                        <td class="tableHeader"><b>Full Name</b></td>
                        <td class="tableHeader"><b>Username</b></td>
                        <td class="tableHeader"><b>Email</b></td>
                        <td class="tableHeader"><b>Status</b></td>
                        <td class="tableHeader"><b>Role</b></td>
                        <td width="120px" class="tableHeader"><b>Action</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($data_get == NULL) {
                    ?>
                    <div class="alert alert-info" role="alert">Database error!</div>
                    <?php
                    } else {
                    foreach ($data_get as $row): {
                    ?>
                    <tr>
                        <td><?php echo $row->idlogin; ?></td>
                        <td><?php echo $row->fullname; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php 
                        if($row->status == 1) {
                        echo "verified";}
                        else {
                        echo "<b>not</b> verified" ;} ?></td>
                        <td><?php echo $row->role; ?></td>
                        <td>
                        <a href="<?php echo site_url('account/' . $row->idlogin); ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i></a>
                        <a href="<?php echo site_url('ccrud/edit/' . $row->idlogin); ?>" class="btn btn-success btn-xs"><i class='fa fa-pencil'></i></a>
                        <a href="#myModal<?php echo $row->idlogin; ?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class='fa fa-times'></i></a>
                        </td>
                        
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $row->idlogin; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Confirm delete</h4>
                                    </div>
                                    <div class="modal-body">
                                    <?php echo form_open_multipart('upload/do_upload');?>
                                        <h4>You're deleting user <b style="color: #D2433F"><?php echo $row->fullname; ?></b> from the database. Are you sure?</h4>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="<?php echo site_url('ccrud/delete/' . $row->idlogin); ?>" class="btn btn-primary"><i class='fa fa-check'></i> Yes</a>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class='fa fa-times'></i> Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        } endforeach;
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

