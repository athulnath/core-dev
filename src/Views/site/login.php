<div class="site-login">
    <h1>Login</h1>

<form id="login-form" class="form-horizontal" action="/?c=site&a=login" method="post">
        <div class="form-group field-loginform-username required has-error">
             <label class="col-lg-1 control-label" for="loginform-username">Username</label>
                <div class="col-lg-3">
                    <input type="text" id="loginform-username" class="form-control" name="username" autofocus="">
                </div>
                <div class="col-lg-8">
                    <p class="help-block help-block-error">Username cannot be blank.</p>
                </div>
        </div>
        <div class="form-group field-loginform-password required">
            <label class="col-lg-1 control-label" for="loginform-password">Password</label>
            <div class="col-lg-3">
                <input type="password" id="loginform-password" class="form-control" name="password">
            </div>
            <div class="col-lg-8">
                <p class="help-block help-block-error"></p>
            </div>
        </div>
        <div class="form-group field-loginform-rememberme">
            <div class="col-lg-offset-1 col-lg-3">
                <input type="hidden" name="LoginForm[rememberMe]" value="0">
                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked=""> 
                <label for="loginform-rememberme">Remember Me</label>
            </div>
        <div class="col-lg-8">
            <p class="help-block help-block-error"></p>
        </div>
        </div>
        <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <button type="submit" class="btn btn-primary" name="login-button">Login</button>                
            <span style="color:#999;margin:1em 0">If you forgot your password you can <a href="/site/request-password-reset">reset it</a>.
            </span>
        </div>
</div>

</form>
</div>