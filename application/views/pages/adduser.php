<section id="mainContent">
    <div class="col-md-2"></div>
    <div class="jumbotron col-md-8">
        <?php echo form_open('ccrud/save', 'role="form"'); ?>
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
            <span class="text-danger"><?php echo form_error('fullname'); ?></span>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
            <span class="text-danger"><?php echo form_error('username'); ?></span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            <span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
        </div>
        <div class="form-group">
            <label for="ustatus">Status</label>
            <select class="form-control m-bot15" id="ustatus" name="ustatus">
                <option>0 (Send email to user for verifying)</option>
                <option>1 (Verified user)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control m-bot15" id="role" name="role">
            <option>user</option>
            <option>admin</option>
            </select>
        </div>
        <input type="submit" name="mit" class="btn btn-primary" value="Submit">
        <button class="btn btn-primary btn-md" onclick="history.go(-1);"><i class="fa fa-angle-double-left"></i> Back</button>
        </form>
        <?php echo form_close(); ?>
    </div>
</section>