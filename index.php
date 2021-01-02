<?php
require_once 'Models/DBConnectGeneral.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $flag = $db->login($username, $password);
    if($flag){
        header("Location: Views/homeGeneral.php");
    } else {
        $message = "Username of password was incorrect! If you don't have an account please sign up.";
    }
}
$title="Login";
include 'Views/layoutGeneral/_header.php'; 
?>

<div class="container">
<div class="row">
    <div class="col-md-6">
        <?php if(isset($message)): ?>
        <div class="alert-danger"><?= $message; ?></div>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-6">
                    <img src="Views/assetsGeneral/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h5> User Login </h5>
            </div>
            <div class="panel-body">
                <form class="form-vertical" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Login</button>
                        <p class="text-danger">Don't have a username and Password?</p>
                        <a class="btn btn-lg btn-danger" href="users/register.php">Signup</a>
                    </div>
                </form>
            </div>
			</div>
        </div>
    </div>
    <div class="col-md-4">
        <img src="Views/assetsGeneral/left-index-logo.jpg" class="img img-responsive">
    </div>
</div>

<?php include 'Views/layoutGeneral/_footer.php'; ?>

