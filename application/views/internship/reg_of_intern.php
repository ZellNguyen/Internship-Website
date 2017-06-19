<section id="mainContent">
    <div class="content_bottom">
        <div class="col-lg-9 col-md-9">
            <div class="content_bottom_left">                
                <div class="single_page_area">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('internship/database'); ?>">Internship DB</a></li>
                        <li class="active"><?php echo $intern['iTitle'] ?> / Registration</li>
                    </ol>
                    <h2 class="post_titile"><?php echo $intern['iTitle'].'<br/>'; ?></h2>
                    <div class="single_page_content">
                        <h3>Position</h3>
                        <table class="table table-bordered table-hover table-striped text-center">  
                            <thead align="center">
                                <tr>
                                    <td class="tableHeader"><b>Position</b></td>
                                    <td class="tableHeader"><b>No. Regis</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($position as $pos): ?>
                                <tr>
                                    <td><?php echo $pos['pName']; ?></td>
                                    <td><?php echo $pos['numOfReg']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <hr>
                        <h3>List of Registration</h3>
                        <table class="table table-bordered table-hover table-striped text-center">  
                            <thead align="center">
                                <tr>
                                    <td class="tableHeader"><b>Candidate</b></td>
                                    <td class="tableHeader"><b>Applying for</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($reg as $r): ?>
                                <tr>
                                    <td><a href="<?php echo site_url('account/'.$r['idlogin']) ?>" style="color: #FFA500" ><?php echo $r['fullname']; ?></a></td>
                                    <td><?php echo $r['pName']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button class="btn btn-primary btn-md" onclick="history.go(-1);"><i class="fa fa-angle-double-left"></i> Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>