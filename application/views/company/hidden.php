<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-8 col-md-8">
        <!-- start content bottom left -->
            <div class="content_bottom_left">
                <!-- start business category -->
                <div class="single_category wow fadeInDown">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('company'); ?>">Company</a></li>
                        <li class="active">Currently unavailable companies</li>
                    </ol>   
                    <div class="archive_style_1">	
                        <h2>                  
                        <span class="bold_line"><span></span></span>
                        <span class="solid_line"></span>
                        <span class="title_text">Company</span>
                        </h2>	
                        <?php foreach ($hidden as $item): ?>
                        <div class="single_archive wow fadeInDown">
                            <div class="archive_imgcontainer">
                            <img src="img/devhill/740x300.jpg" alt="img">
                            </div>
                            <div class="archive_caption">
                            <h2><a href="<?php echo site_url('company/'.$item['cSlug']); ?>"><?php echo $item['cName']; ?></a></h2>
                            <p><?php $text2 = $item['cDes'];
                                echo word_limiter($text2, 10) ?></p> 
                            </div>
                            <a class="read_more" href="<?php echo site_url('company/'.$item['cSlug']); ?>"><span>Read More</span></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>