<section id="mainContent">
    <div class="jumbotron">
        <p>
        <a href="<?php echo site_url('internship/create') ?>" class="btn btn-primary"><i class='fa fa-plus'></i> Add new internship</a>
        </p>
        <div class="table-responsive">
            <h3 class="text-center tableHeading"><b>INTERNSHIP NEWS DATABASE</b></h3>
            <table class="table table-bordered table-hover table-striped text-center">  
                <thead align="center">
                    <tr>
                        <td width="30px" class="tableHeader"><b>ID</b></td>
                        <td width="60px" class="tableHeader"><b>Title</b></td>
                        <td width="180px" class="tableHeader"><b>Company</b></td>
                        <td width="250px" class="tableHeader"><b>Description</b></td>
                        <td class="tableHeader"><b>Deadline</b></td>
                        <td width="80px" class="tableHeader"><b>No. Reg</b></td>
                        <td class="tableHeader"><b>Timestamp</b></td>
                        <td class="tableHeader"><b>Status</b></td>
                        <td class="tableHeader"><b>Admin</b></td>
                        <td width="100px" class="tableHeader"><b>Action</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($intern == NULL) {
                    ?>
                    <div class="alert alert-info" role="alert">Database error!</div>
                    <?php
                    } else {
                    foreach ($intern as $row): {
                    ?>
                    <tr>
                        <td><?php echo $row['iID']; ?></td>
                        <td><?php echo $row['iTitle']; ?></td>
                        <td><?php echo $row['cName']; ?></td>
                        <td class="text-left"><?php echo word_limiter(strip_tags($row['iDes']), 10); ?></td>
                        <td><?php echo $row['iDeadline']; ?></td>
                        <td><a href="<?php echo site_url('internship/reg/'.$row['iSlug']);?>" style="color: #D2433F"><?php echo $row['iRegister']; ?></a></td>
                        <td><?php echo $row['iDate']; ?></td>
                        <td><?php if ($row['iStatus'] == 0) {echo 'Expired';} 
                             else if ($row['iStatus'] == 1){echo 'Available';} 
                             else if ($row['iStatus'] == 2) {echo 'Unpublished';} ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td>    
                        <a href="<?php echo site_url('internship/' . $row['iSlug']); ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i></a>
                        <a href="<?php echo site_url('internship/edit/' . $row['iSlug']); ?>" class="btn btn-success btn-xs"><i class='fa fa-pencil'></i></a>
                        <a href="#myModal<?php echo $row['iID']; ?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class='fa fa-times'></i></a>
                        </td>
                        
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $row['iID']; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Confirm delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h5>You're deleting <b style="color: #D2433F">'<?php echo $row['iTitle']?>'</b> from the database. This will affect records of other databases. Are you sure?</h5>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="<?php echo site_url('internship/delete/' . $row['iSlug']); ?>" class="btn btn-primary"><i class='fa fa-check'></i> Yes</a>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class='fa fa-times'></i> Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <?php } endforeach;
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

