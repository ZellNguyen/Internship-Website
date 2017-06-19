<section id="mainContent">
        <!-- start main content Middle -->
        <div class="content_middle"> 
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="content_middle_middle">
                    <div class="slick_slider2">
                        <?php foreach ($ranCompany as $rand_item): ?>
                        <div class="single_featured_slide">
                            <img src="img/devhill/567x330x1.jpg" alt="img">
                            <div class="archive_caption" style="text-align: left">
                            <h2><a href="<?php echo site_url('company/'.$rand_item['cSlug']); ?>" style="color: white"><?php echo $rand_item['cName']; ?></a></h2>
                            <p><?php echo word_limiter($rand_item['cDes'], 10); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="http://placehold.it/360x450">
            </div>
        </div><!-- End main content middle -->
		  
          <!-- start main content bottom -->
          <div class="content_bottom">
          	<ul class="list" id="companyList">
            <div class="col-lg-8 col-md-8">
            <!-- start content bottom left -->
              <div class="content_bottom_left">
				
                <!-- start internship partners area -->
                  <div class="single_category wow fadeInDown">
				  
				    <div class="archive_style_1" id="topCompany">
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
			  
            </div>
            </ul>
            
        </div><!-- end main content bottom -->        
      </section><!-- End site main content -->
      
      <script type="text/javascript">
    $(function() {
      applyPagination();
   
      function applyPagination() {
        $("#ajax_pagingsearc a").click(function() {
        var url = $(this).attr("href");
    
          $.ajax({
            type: "POST",
            data: "ajax=1",
            url: url,
           success: function(msg) {
            
              $("#companyList").html(msg);
              applyPagination();
            }
          });
        return false;
        });
      }
    });
</script>

            