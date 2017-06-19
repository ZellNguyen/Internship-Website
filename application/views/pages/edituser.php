<section id="mainContent">
    <div class="col-md-2"></div>
    <div class="jumbotron col-md-8">
        <div class="text-center"><b>Edit User Information</b></div>
        <?php echo form_open('ccrud/update', 'role="form"'); ?>
            <div class="form-group">
                <label for="ufullname">Full Name</label>
                <input type="text" class="form-control" id="ufullname" name="ufullname" value ="<?php echo $ufullname ?>" >
            </div>
            <div class="form-group">
                <label for="uusername">Username</label>
                <input type="text" class="form-control" id="uusername" name="uusername" value="<?php echo $uusername ?>">
            </div>
            <div class="form-group">
                <label for="uemail">Email</label>
                <input type="text" class="form-control" id="uemail" name="uemail" value="<?php echo $uemail ?>">
            </div>
            <div class="form-group">
                <label for="upassword">Password</label>
                <input type="password" class="form-control" id="upassword" name="upassword" value="<?php echo $upassword ?>">
            </div>
            <div class="form-group">
                <label for="ustatus">Status</label>
                <select class="form-control m-bot15" id="ustatus" name="ustatus">
                <?php if ($ustatus == 0 ) {
                    echo "<option>0 (Not verified)</option>
                    <option>1 (Verified)</option>";
                } else {
                    echo "<option>1 (Verified)</option>
                    <option>0 (Not verified)</option>";
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="urole">Role</label>
                <select class="form-control m-bot15" id="urole" name="urole">
                <?php if ($urole == user) {
                echo "<option>user</option>
                <option>admin</option>";
                } else {
                echo "<option>admin</option>
                <option>user</option>";
                }
                ?>
                </select>
            </div>
            <input type="hidden" name="uid" value="<?php echo $uid ?>" />
            <input type="submit" name="mit" class="btn btn-primary" value="Update">
            <button type="button" onclick="location.href='<?php echo site_url('ccrud') ?>'" class="btn btn-success">Back</button>
            </form>
        <?php echo form_close(); ?>
    </div>
</section>