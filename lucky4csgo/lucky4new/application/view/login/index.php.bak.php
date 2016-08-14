<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3"> 

        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Login</div>
            </div>     

            <div class="panel-body" >

                <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name="user_name" placeholder="Username or email" required>                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="user_password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                         <!-- <label for="set_remember_me_cookie" class="remember-me-label">
                        <input type="checkbox" name="set_remember_me_cookie" class="remember-me-checkbox" />
                        Remember me for 2 weeks
                    </label> -->
                    <!-- when a user navigates to a page that's only accessible for logged a logged-in user, then
                         the user is sent to this page here, also having the page he/she came from in the URL parameter
                         (have a look). This "where did you came from" value is put into this form to sent the user back
                         there after being logged in successfully.
                         Simple but powerful feature, big thanks to @tysonlist. -->
                    <?php if (!empty($this->redirect)) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                    <?php } ?>
                    <!--
                        set CSRF token in login form, although sending fake login requests mightn't be interesting gap here.
                        If you want to get deeper, check these answers:
                            1. natevw's http://stackoverflow.com/questions/6412813/do-login-forms-need-tokens-against-csrf-attacks?rq=1
                            2. http://stackoverflow.com/questions/15602473/is-csrf-protection-necessary-on-a-sign-up-form?lq=1
                            3. http://stackoverflow.com/questions/13667437/how-to-add-csrf-token-to-login-form?lq=1
                    -->
                    <div class="col-sm-12 controls">
                    <?= Session::get('csrf_token'); ?>
                            <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                            <button type="submit" value="Log in" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                            
                            
                    </div>
                </form>
                        <div class="link-forgot-my-password">
                            <a href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">I forgot my password</a>
                        </div>
                    </div>
                </form>     
            </div>                     
        </div>  
    </div>
</div>
