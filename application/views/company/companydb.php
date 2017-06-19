<section id="mainContent">
    <div class="jumbotron">
        <p>
        <a href="<?php echo site_url('company/create') ?>" class="btn btn-primary"><i class='fa fa-plus'></i> Add new company</a>
        </p>
        <div class="table-responsive">
            <h3 class="text-center tableHeading"><b>COMPANY DATABASE</b></h3>
            <table class="table table-bordered table-hover table-striped text-center">  
                <thead align="center">
                    <tr>
                        <td width="30px" class="tableHeader"><b>ID</b></td>
                        <td class="tableHeader"><b>Name</b></td>
                        <td class="tableHeader"><b>Address</b></td>
                        <td class="tableHeader"><b>Telephone</b></td>
                        <td class="tableHeader"><b>Email</b></td>
                        <td class="tableHeader"><b>Website</b></td>
                        <td width="250px" class="tableHeader"><b>Description</b></td>
                        <td width="100px" class="tableHeader"><b>Action</b></td>
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
                        <td><?php echo $row['cID']; ?></td>
                        <td><?php echo $row['cName']; ?></td>
                        <td><?php echo $row['cAddress']; ?></td>
                        <td><?php echo $row['cTel']; ?></td>
                        <td><?php echo $row['cEmail']; ?></td>
                        <td><?php echo $row['cWebsite']; ?></td>
                        <td class="text-left"><?php echo word_limiter($row['cDes'], 15); ?></td>
                        <td>
                        <a href="<?php echo site_url('company/' . $row['cSlug']); ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i></a>
                        <a href="<?php echo site_url('company/edit/' . $row['cSlug']); ?>" class="btn btn-success btn-xs"><i class='fa fa-pencil'></i></a>
                        <a href="#myModal<?php echo $row['cID'] ?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class='fa fa-times'></i></a>
                        </td>
                        
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $row['cID'] ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Confirm delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h5>You're deleting company / organization named <b style="color: #D2433F">'<?php echo $row['cName']?>'</b> from the database. This will affect records of other databases. Are you sure?</h5>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="<?php echo site_url('company/delete/' . $row['cSlug']); ?>" class="btn btn-primary"><i class='fa fa-check'></i> Yes</a>
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

