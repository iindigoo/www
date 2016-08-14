<div class="box-login">
    <div class="wrapper-register">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <!-- login box on left side -->
        <h2></h2>

        <!-- register form -->
        <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
            <!-- the user name input field uses a HTML5 pattern check -->
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="text" patern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username" required/>
            </div>
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="text" name="user_email" placeholder="e-mail" required/>
            </div>
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="text" name="user_email_repeat" placeholder="Repeat e-mail" required/>
            </div>
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="password" name="user_password_new" pattern=".{6,}" placeholder="Password" required autocomplete="off"/>
            </div>
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat password" autocomplete="off"/>
            </div>
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <img width="280px" height="130px" id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
            <div class="input-wrapper">
                <label for="username"><i class="fa fa-lock fa-2x"></i></label><input type="text" name="captcha" placeholder="Please enter above characters" required/>
            </div>

            <!-- quick & dirty captcha reloader -->
            <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0; text-align: center"
               onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>

            <input type="submit" value="Register" />
        </form>
    </div>
</div>
