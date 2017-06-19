<section id="mainContent">
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
        <li><a href="<?php echo site_url('account/'.$uid); ?>">Personal account</a></li>
    </ol>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $error; ?>
        </div>
    </div>
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3 text-center">
        <h3><b>PROFILE PICTURE</b></h3>
        <span class="profile-ava">
        <img alt="profile image" src="<?php echo base_url() . '/uploads/' . $uimg_name . '_thumb' . $uext ?>" ><br/><br/> 
        </span>
        <?php if($role !== 'admin' || $uid == $id){ ?><a href="#myModal" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-picture-o"></i> Change</a><?php } ?>
    </div>
    <div class="col-md-1"></div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table borderless table-hover">
                    <h3><b>USER INFORMATION</b></h3>
                    <tr>
                        <td class="col-sm-3"><b>Fullname</b></td>
                        <td><?php echo $ufullname; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Username</b></td>
                        <td><?php echo $uusername; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Email</b></td>
                        <td><?php echo $uemail; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Date of Birth</b></td>
                        <td><?php echo $udob; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>University</b></td>
                        <td><?php echo $uuniversity; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Student ID</b></td>
                        <td><?php echo $ustid; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Skill</b></td>
                        <td><?php echo $uskill; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Experience</b></td>
                        <td><?php echo $uexp; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Registration</b></td>
                        <td>
                            <ul>
                        <?php foreach($uregister as $res): ?>
                            <li><a href="<?php echo site_url('internship/'.$res['iSlug']) ?>"><b><?php echo $res['pName'] ?></b></a> at <?php echo character_limiter($res['cName'],20) ?> </li>
                        <?php endforeach ?>
                            </ul>
                        </td>
                    </tr>
                </table>
                <?php if($role !== 'admin' || $uid == $id ){ ?><a href="<?php echo site_url('edit/' . $uid); ?>" class="btn btn-success btn-sm"><i class='fa fa-pencil'></i> Edit My Profile</a> <?php }; ?>
            </div>
        </div>
    </div>
        <button class="btn btn-primary btn-md" onclick="history.go(-1);"><i class="fa fa-angle-double-left"></i> Back</button>
</section>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Choose a profile picture</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('upload/do_upload');?>
                    <div class="form-group">
                    <label for="userfile">File input</label>
                    <input type="file" id="userfile" name="userfile">
                    <p class="help-block">Maximum size: 3MB</p>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <input type="submit" value="upload" name="upload" class="btn btn-primary btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>