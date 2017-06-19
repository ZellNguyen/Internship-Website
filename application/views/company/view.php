<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('company'); ?>">Company</a></li>
                        <li class="active"><?php echo $company['cName'].'<br/>'; ?></li>
                    </ol>
                    <h2 class="post_titile"><?php echo $company['cName'].'<br/>'; ?></h2>
                    <div class="single_page_content">
                        <div class="post_commentbox">
                            <?php if($role == 'admin') {
                                echo '<a href="' . site_url('company/edit/' . $company['cSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a>';                            
                                echo '<a href="#myModal1" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-picture-o"></i> Change cover</a>';
                                echo '<a href="#myModal2" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Delete</a>';
                                if ($company['cStatus'] == 2) {
                                    echo '<a href="' . site_url('company/make-visible/' . $company['cSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-unlock"></i>Publish</a>';
                                } else if ($company['cStatus'] <> 2) {
                                    echo '<a href="' . site_url('company/make-invisible/' . $company['cSlug']) .'" class="btn btn-success btn-xs"><i class="fa fa-lock"></i>Hide</a>';
                                } 
                            }?>
                        </div>
                        <img class="img-center" src="<?php echo base_url() . '/company_cover/' . $company['cImg'] . '_thumb' . $company['cExt'] ?>" alt="img">
                        
                        <h3>Company Description</h3>
                        <?php echo $company['cDes'] ?>
                        <blockquote>
                            <h4><b>Contact Detail</b></h4>
                            <b>Company/ Organization: </b> <?php echo $company['cName'] ?><br/>
                            <b>Address: </b> <?php echo $company['cAddress'] ?><br/>
                            <b>Telephone: </b> <?php echo $company['cTel'] ?><br/>
                            <b>Email: </b> <?php echo $company['cEmail'] ?><br/>
                            <b>Website: </b> <?php echo "<a href='".$company['cWebsite']."'>".preg_replace('#https?://www.#','',$company['cWebsite'])."</a>" ?><br/>
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
                    <?php echo form_open_multipart('upload/company_upload');?>
                    <div class="form-group">
                        <label for="userfile">File input</label>
                        <input type="file" id="userfile" name="userfile">
                        <p class="help-block">Maximum size: 5MB</p>
                        <input type="hidden" name="cId" value="<?php echo $company['cID'] ?>" />
                        <input type="hidden" name="cSlug" value="<?php echo $company['cSlug'] ?>" />
                        
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
                          <h5>You're deleting '<?php echo $company['cName']?>' . Are you sure?</h5>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo site_url('company/delete/' . $company['cSlug']); ?>" class="btn btn-primary"><i class='fa fa-check'></i> Yes</a>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><i class='fa fa-times'></i> Cancel</button>
                  </div>
                      </form>
                  </div>
              </div>
          </div>
     