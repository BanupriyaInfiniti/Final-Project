<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <?php 
        include 'head.php'; 
        if(isset($_POST['cregisterBtn'])){
            Admin::customerRegister($mysqli,BASE,$_POST['name'],$_POST['email'],$_POST['password'],$_POST['cpassword']);
        }
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<div class="main-content">
    <section class="iq-login-regi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 mb-5">
                    <h2 class="mt-3">Register</h2>
                    <p class="mt-3 mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <h5>You can Login With <i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
                    <ul class="iq-media mt-3">
                        <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus"><i class="fa fa-google"></i></a></li>
                        <li><a href="#" class="lkd"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="iq-login register-box">
                        <form class="iq-registertbox" method="post">
                            <div class="register-boxes mb-3">
                                <label for="exampleInputName">Name</label>
                                <input type="text" name="name" class="form-control email-bg" id="exampleInputName" placeholder="Name">
                            </div>
                            <div class="register-boxes mb-3">
                                <label for="exampleInputEmail">Email</label>
                                <input type="email" name="email" class="form-control email-bg" id="exampleInputEmail" placeholder="Email">
                            </div>
                            <div class="register-boxes mb-3">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control email-bg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="register-boxes mb-3">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control email-bg" id="exampleInputPassword2" placeholder="Confirm Password">
                            </div>
                            <button type="submit" name="cregisterBtn" class="button">Register</button>
                        </form>
                        <div class="row justify-content-between">
                            <div class="col-auto mr-auto">
                                <div class="link">Don't Have an Account?</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-right">
                                    <div class="link"> <a href="login.php">Login Now</a></div>
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