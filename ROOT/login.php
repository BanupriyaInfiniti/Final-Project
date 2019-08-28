<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <?php 
        include 'head.php'; 
        if(isset($_POST['cloginBtn'])){
            Admin::customerLogin($mysqli,BASE,$_POST['email'],$_POST['password']);
        }
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<div class="main-content">
    <section class="iq-login-regi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Login</h2>
                    <p class="mt-3 mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <h5>You can Login With <i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
                    <ul class="iq-media mt-3 mb-5">
                        <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus"><i class="fa fa-google"></i></a></li>
                        <li><a href="#" class="lkd"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="iq-login">
                        <form class="iq-loginbox" method="post" action="<?php echo BASE.'login.php'; ?>">
                            <div class="login-boxes mb-3">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" name="email"class="form-control email-bg" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="login-boxes mb-3">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control email-bg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" name="cloginBtn" class="button">Login</button>
                        </form>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="link">Forgot Password?</a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="text-right">
                                    <div class="link">Don't Have an Account?</div>
                                    <div class="link"> <a href="register.php">Register Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>
<?php include 'script.php'; ?>
</body>
</html>