<!DOCTYPE html>
<html lang="eng">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Share core</title>
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>

<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Shares core</a>
                </div>
                    <div id="w0-collapse" class="collapse navbar-collapse">
                        <ul id="w1" class="navbar-nav navbar-right nav">
                            <li class="active"><a href="#">Login</a></li>
                        </ul></div>
                    </div>
    </nav>

    <div class="container">

            <div class="site-login">
                <h1>Login</h1>

            <form id="login-form" class="form-horizontal" action="process.php">
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


    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Share-core <?= date('Y') ?></p>
    </div>
</footer>

    <script src="lib/jquery/dist/jquery.min.js""></script>
    <script src="lib/bootstrap/dist/js/bootstrap.min.js""></script>
    <script src="assets/js/app.min.js""></script>
</body>
</html>
    