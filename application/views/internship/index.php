<section id="mainContent">
    <div class="content_middle">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_leftbar">
                <div class="single_category wow fadeInDown">
                    <h2>                  
                        <span class="bold_line"><span></span></span>
                        <span class="solid_line"></span>
                        <a href="archive1.html" class="title_text">Latest Updates</a>
                    </h2>
                    <ul class="catg1_nav">
                        <li>
                            <div class="catgimg_container">
                            <a href="<?php echo site_url('internship/'.$latest[0]['iSlug']); ?>" class="catg1_img">
                            <img alt="img" src="img/devhill/292x150x1.jpg">
                            </a>
                            </div>
                        <h3 class="post_titile text-center"><a href="<?php echo site_url('internship/'.$latest[0]['iSlug']); ?>"><?php echo "[" . $latest[0]['iDeadline'] . "] " . $latest[0]['iTitle']; ?></a></h3>
                        </li>
                        <li>
                            <div class="catgimg_container">
                            <a href="<?php echo site_url('internship/'.$latest[1]['iSlug']); ?>" class="catg1_img">
                            <img alt="img" src="img/devhill/292x150x2.jpg">
                            </a>
                            </div>
                        <h3 class="post_titile text-center"><a href="<?php echo site_url('internship/'.$latest[1]['iSlug']); ?>"><?php echo "[" . $latest[1]['iDeadline'] . "] " . $latest[1]['iTitle']; ?></a></h3>
                        </li>
                    </ul>      
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_middle">
                <div class="slick_slider2">
                    <div class="single_featured_slide">
                    <a href="<?php echo site_url('internship/'.$trend[0]['iSlug']); ?>"><img src="img/devhill/567x330x1.jpg" alt="img"></a>
                    <h2><a href="<?php echo site_url('internship/'.$trend[0]['iSlug']); ?>"><?php echo "[" . $trend[0]['iDeadline'] . "] " . $trend[0]['iTitle']; ?></a></h2>
                    <p><?php $text1 = $trend[0]['iDes'];
                        echo word_limiter($text1, 30) ?></p>
                    </div>
                    <div class="single_featured_slide">
                    <a href="<?php echo site_url('internship/'.$trend[1]['iSlug']); ?>"><img src="img/devhill/567x330x2.jpg" alt="img"></a>
                    <h2><a href="<?php echo site_url('internship/'.$trend[1]['iSlug']); ?>"><?php echo "[" . $trend[1]['iDeadline'] . "] " . $trend[1]['iTitle']; ?></a></h2>
                    <p><?php $text1 = $trend[1]['iDes'];
                        echo word_limiter($text1, 30) ?></p>
                    </div>
                    <div class="single_featured_slide">
                    <a href="<?php echo site_url('internship/'.$trend[2]['iSlug']); ?>"><img src="img/devhill/567x330x3.jpg" alt="img"></a>
                    <h2><a href="<?php echo site_url('internship/'.$trend[2]['iSlug']); ?>"><?php echo "[" . $trend[2]['iDeadline'] . "] " . $trend[2 ]['iTitle']; ?></a></h2>
                    <p><?php $text1 = $trend[2]['iDes'];
                        echo word_limiter($text1, 30) ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_rightbar">
                <div class="single_category wow fadeInDown">
                    <h2>                  
                        <span class="bold_line"><span></span></span>
                        <span class="solid_line"></span>
                        <a href="archive1.html" class="title_text">Hurry up!</a>
                    </h2>
                        <ul class="catg1_nav">
                            <li>
                            <div class="catgimg_container">
                            <a href="<?php echo site_url('internship/'.$near_deadline[0]['iSlug']); ?>" class="catg1_img">
                            <img alt="img" src="img/devhill/292x150x1.jpg">
                            </a>
                            </div>
                            <h3 class="post_titile text-center"><a href="<?php echo site_url('internship/'.$near_deadline[0]['iSlug']); ?>"><?php echo "[" . $near_deadline[0]['iDeadline'] . "] " . $near_deadline[0]['iTitle']; ?></a></h3>
                            </li>
                            <li>
                            <div class="catgimg_container">
                            <a href="<?php echo site_url('internship/'.$near_deadline[1]['iSlug']); ?>" class="catg1_img">
                            <img alt="img" src="img/devhill/292x150x2.jpg">
                            </a>
                            </div>
                            <h3 class="post_titile text-center"><a href="<?php echo site_url('internship/'.$near_deadline[1]['iSlug']); ?>"><?php echo "[" . $near_deadline[1]['iDeadline'] . "] " .$near_deadline[1]['iTitle']; ?></a></h3>
                            </li>
                        </ul>      
                </div>
            </div>
        </div>
    </div>
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
        <!-- start content bottom left -->
            <div class="content_bottom_left">
                <!-- start business category -->
                <div class="single_category wow fadeInDown">
                    <div class="archive_style_1">	
                        <h2>                  
                        <span class="bold_line"><span></span></span>
                        <span class="solid_line"></span>
                        <span class="title_text">Internship List</span>
                        </h2>	
                        <?php foreach ($others as $item3): ?>
                        <div class="single_archive wow fadeInDown">
                            <div class="archive_imgcontainer">
                            <img src="img/devhill/740x300.jpg" alt="img">
                            </div>
                            <div class="archive_caption">
                            <h2><a href="<?php echo site_url('internship/'.$item3['iSlug']); ?>"><?php echo "[" . $item3['iDeadline'] . "] " . $item3['iTitle']; ?></a></h2>
                            <!-- <p><?php $text2 = $item3['iDes'];
                                echo word_limiter($text2, 20) ?></p> -->
                            </div>
                            <a class="read_more" href="<?php echo site_url('internship/'.$item3['iSlug']); ?>"><span>Read More</span></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <!-- start pagination area-->
            <div class="pagination_area">
                <nav>
                    <?php echo $pagination; ?>
                </nav>
            </div>
            <!-- End pagination area-->
            
        </div>
    </div>    
</section>