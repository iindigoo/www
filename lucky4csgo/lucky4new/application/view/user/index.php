
<div class="container user">
    <hr>
    <div class="row">
    <!-- left column -->
    <form action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
        <div class="col-md-3">
            <div class="text-center">
            <?php if (Config::get('USE_GRAVATAR')) { ?>
                    <img class="avatar img-circle" src='<?= $this->user_gravatar_image_url; ?>' />
                <?php } else { ?>
                    <img class="avatar img-circle" src='<?= $this->user_avatar_file; ?>' />
                <?php } ?>
                <h6>Upload a different photo...</h6>
                <input type="file" name="avatar_file" class="form-control" required />
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="submit" class="btn btn-primary" value="Upload image" />
            </div>
        </div>
    </form>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <?php $this->renderFeedbackMessages(); ?>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" action="<?php echo Config::get('URL'); ?>user/changeUser_action" method="post"> 
        <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" name="user_name" type="text" value="<?= $this->user_name; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-8">
              <input class="form-control" name="user_email" type="text" value="<?= $this->user_email; ?>">
            </div>
            </div>
            <h3>Password</h3>
            <hr>
                <div class="form-group">
                <label class="col-md-3 control-label">Current password:</label>
                <div class="col-md-8">
                  <input class="form-control" name="user_password_current" type="password" value="">
                </div>
            </div>

            <div class="form-group">
            <label class="col-md-3 control-label">New password:</label>
            <div class="col-md-8">
              <input class="form-control" name="user_password_new" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Repeat new password:</label>
            <div class="col-md-8">
              <input class="form-control" name="user_password_repeat" type="password" value="">
            </div>
          <div class="">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />    
                <input type="submit" class="btn btn-primary" value="Submit">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>