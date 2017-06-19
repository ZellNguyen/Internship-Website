
            <div class="col-lg-8 col-md-8">
            <!-- start content bottom left -->
              <div class="content_bottom_left">
				
                <!-- start internship partners area -->
                  <div class="single_category wow fadeInDown">
				  
				    <div class="archive_style_1">
                    <h2>                  
                      <span class="bold_line"><span></span></span>
                      <span class="solid_line"></span>
                      <span class="title_text">Internship Partners</span>
                    </h2>
<?php foreach ($company as $com): ?>
                    <li>	
           			<div class="single_archive wow fadeInDown">
                            <div class="archive_imgcontainer">
                            <img src="img/devhill/740x300.jpg" alt="img">
                            </div>
                            <div class="archive_caption">
                            <h2><a href="<?php echo site_url('company/'.$com['cSlug']); ?>"><?php echo $com['cName']; ?></a></h2>
                            <p><?php $text2 = $com['cDes'];
                                echo word_limiter($text2, 15) ?></p>
                            </div>
                            <a class="read_more" href="<?php echo site_url('company/'.$com['cSlug']); ?>"><span>Read More</span></a>
                        </div>
					</li>
					<?php endforeach; ?>
					</div>
                  </div>
                <!-- End internship partners area -->
              </div><!--End content_bottom_left-->   
			  
			  <!-- start pagination area-->
			  <div class="pagination_area">
				<nav>
					<?php echo $links; ?>
				</nav>
			  </div>
			  <!-- End pagination area-->