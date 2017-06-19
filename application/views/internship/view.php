<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('internship'); ?>">Internship</a></li>
                        <li class="active"><?php echo $intern['iTitle'].'<br/>'; ?></li>
                    </ol>
                    <h2 class="post_titile"><?php echo $intern['iTitle'].'<br/>'; ?></h2>
                    <div class="single_page_content">
                        <div class="post_commentbox">
                            <span><i class="fa fa-user"></i><?php echo $writer['fullname']; ?></span>
                            <span><i class="fa fa-calendar"></i><?php echo $intern['iDate']; ?></span>
                            <span><i class="fa fa-clock-o"></i><?php echo 'Deadline: ' . $intern['iDeadline'] ?></span>
                            <?php if($role == 'admin') {
                                echo '<a href="' . site_url('internship/edit/' . $intern['iSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit post</a>';                            
                                echo '<a href="#myModal1" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-picture-o"></i> Change cover</a>';
                                echo '<a href="#myModal2" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Delete post</a>';
                                if ($intern['iStatus'] == 2) {
                                    echo '<a href="' . site_url('internship/make-visible/' . $intern['iSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-unlock"></i>Unhide post</a>';
                                } else if ($intern['iStatus'] <> 2) {
                                    echo '<a href="' . site_url('internship/make-invisible/' . $intern['iSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-lock"></i>Hide post</a>';
                                } 
                            }?>
                        </div>
                        <img class="img-center" src="<?php echo base_url() . '/cover/' . $intern['iImage_name'] . '_thumb' . $intern['iImage_ext'] ?>" alt="img">
                        
                        <h3>Internship Description</h3>
                        <?php echo $intern['iDes'] ?>
                        <h3>Internship position(s)</h3>
                        
                        
                        <!-- Only show register button for non-expired post -->
                        <?php if ($intern['iStatus'] == 0) { ?> <ul>
                            <?php foreach ($position as $pos): ?>
                                <?php echo '<li>' . $pos['pName'] . '</li>' ;?>
                            <?php endforeach; ?>
                        </ul> <?php } else { ?>
                        <table class="table borderless">
                            <tbody>
                                <?php foreach ($position as $pos): ?>
                                    <tr>
                                        <td><?php echo $pos['pName']; $check = '0'; ?></td>
                                        <?php foreach($register as $res): ?>
                                            <?php 
                                            if($pos['pID'] == $res['pID'] && $id == $res['idlogin']) { $check = '1'; ?>
                                                <td><a href="<?php echo site_url('internship/deregister/'.$intern['iSlug'].'/'.$pos['iID'].'/'.$pos['pID'].'/'.$id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Deregister</a></td> <?php }; ?> 
                                        <?php endforeach ?>
                                        <?php if($check == '0') {?>
                                            <td><a href="<?php echo site_url('internship/register/'.$intern['iSlug'].'/'.$pos['iID'].'/'.$pos['pID'].'/'.$id); ?>" class="btn btn-success btn-xs"><i class="fa fa-check-square-o"></i> Register</a></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table> <?php } ?>
                        <blockquote>
                            <h4><b>Contact Detail</b></h4>
                            <b>Company/ Organization: </b> <?php echo $company['cName'] ?><br/>
                            <b>Deadline: </b> <?php echo $intern['iDeadline'] ?><br/>
                            <b>Address: </b> <?php echo $company['cAddress'] ?><br/>
                            <b>Telephone: </b> <?php echo $company['cTel'] ?><br/>
                            <b>Email: </b> <?php echo $company['cEmail'] ?><br/>
                        </blockquote>
                        
                    </div>                 
                </div>  
                <button class="btn btn-primary btn-md" onclick="history.go(-1);"><i class="fa fa-angle-double-left"></i> Back</button>
            </div>
        </div>
    </div>
</section>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Choose a cover photo</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('upload/cover_upload');?>
                    <div class="form-group">
                        <label for="userfile">File input</label>
                        <input type="file" id="userfile" name="userfile">
                        <p class="help-block">Maximum size: 5MB</p>
                        <input type="hidden" name="id" value="<?php echo $intern['iID'] ?>" />
                        <input type="hidden" name="slug" value="<?php echo $intern['iSlug'] ?>" />
                        
                        <input type="submit" value="upload" name="upload" class="btn btn-primary btn-sm">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      <h4 class="modal-title">Confirm delete</h4>
                  </div>
                  <div class="modal-body">
                          <h5>You're deleting '<?php echo $intern['iTitle']?>' . Are you sure?</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo site_url('internship/delete/' . $intern['iSlug']); ?>" class="btn btn-primary"><i class='fa fa-check'></i> Yes</a>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><i class='fa fa-times'></i> Cancel</button>
                  </div>
                      </form>
                  </div>
              </div>
          </div>
     