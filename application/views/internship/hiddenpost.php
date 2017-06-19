<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
        <!-- start content bottom left -->
            <div class="content_bottom_left">
                <!-- start business category -->
                <div class="single_category wow fadeInDown">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('internship/hidden'); ?>">Hidden Internship</a></li>
                        <li class="active">Currently unavailable post</li>
                    </ol>   
                    <div class="archive_style_1">	
                        <h2>                  
                        <span class="bold_line"><span></span></span>
                        <span class="solid_line"></span>
                        <span class="title_text">Internship</span>
                        </h2>	
                        <?php foreach ($hidden as $item): ?>
                        <div class="single_archive wow fadeInDown">
                            <div class="archive_imgcontainer">
                            <img src="img/devhill/740x300.jpg" alt="img">
                            </div>
                            <div class="archive_caption">
                            <h2><a href="<?php echo site_url('internship/'.$item['iSlug']); ?>"><?php echo "[" . $item['iDeadline'] . "] " . $item['iTitle']; ?></a></h2>
                            <!-- <p><?php $text2 = $item3['iDes'];
                                echo word_limiter($text2, 20) ?></p> -->
                            </div>
                            <a class="read_more" href="<?php echo site_url('internship/'.$item['iSlug']); ?>"><span>Read More</span></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>