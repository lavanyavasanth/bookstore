<?php
session_start();
include('view/pages/header.php');
?>

<head>
<link href="view/css/style.css" rel="stylesheet" type="text/css">
</head>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="control/pdologin.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="username" required autofocus pattern="[a-zA-Z]{3,}" title="Invalid Username">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name= "password" required pattern="[a-zA-Z]{3,}" title="Invalid password">
<!--
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
-->
                <input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Sign In">
            </form><!-- /form -->
<!--
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
-->
        </div><!-- /card-container -->
    </div><!-- /container -->
    
