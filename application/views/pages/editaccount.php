<section id="mainContent">
    <div class="col-md-2"></div>
    <div class="jumbotron col-md-8">
        <?php echo form_open('cusercrud/update', 'role="form"'); ?>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value ="<?php echo $fullname ?>" >
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <?php if($username == 'admin'){ 
                	echo '<input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" disabled>';
                	}
					else{
						echo '<input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>">';
					}
				?>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth (YYYY-MM-DD)</label>
                <div class='input-group date datetimepicker'>
                    <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $dob ?>">
                    <span class="input-group-addon">
                        <!-- <span class="glyphicon glyphicon-calendar"></span> -->
                        <i class='fa fa-calendar'></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="university">University</label>
                <input type="text" class="form-control" id="university" name="university" value="<?php echo $university ?>">
            </div>
            <div class="form-group">
                <label for="stid">Student ID</label>
                <input type="text" class="form-control" id="stid" name="stid" value="<?php echo $stid ?>">
            </div>
            <div class="form-group">
                <label for="skill">Personal Skills</label>
                <input type="text" class="form-control" id="skill" name="skill" value="<?php echo $skill ?>">
            </div>
            <div class="form-group">
                <label for="exp">Experiences</label>
                <input type="text" class="form-control" id="exp" name="exp" value="<?php echo $exp ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="submit" name="mit" class="btn btn-primary" value="Update">
            <button type="button" onclick="location.href='<?php echo site_url('account/' .$id) ?>'" class="btn btn-success">Back</button>
            </form>
        <?php echo form_close(); ?>
    </div>
</section>

<script language="javascript">
    function reload() {
        location.reload();
    }
</script> 