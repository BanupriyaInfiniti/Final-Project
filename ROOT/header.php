<div id="loading">
    <div id="loading-center">
        <img src="images/loader.gif" alt="loder">
    </div>
</div>
<header>
    <div class="container-fluid sub-header">
        <div class="row">
            <div class="col-auto mr-auto">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Arabic</a>
                        <a class="dropdown-item" href="#">Chinese</a>
                        <a class="dropdown-item" href="#">French</a>
                    </div>
                </div>
            </div>
            <div class="col-auto sub-main">
                <nav aria-label="breadcrumb">
                    <?php
                        if(isset($_SESSION['CUserName'])){ ?>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="login.php"><?php echo "Welcome ".$_SESSION['CName']; ?></a></li>
                            </ol>
                            <form method="post" action="index.php">
                                <input type="hidden" name="logout_btn" value="">
                                <input id="LogoutBtn" type="submit" style="display: none">
                                <div class="request-btn" onclick="formSubmit()"><a href="#">Logout</a></div>
                            </form>
                            <script>
                                function formSubmit() {
                                    if (confirm("Are you sure to logout ?")) {
                                        document.getElementById("LogoutBtn").click();
                                    }
                                }
                            </script>
                     <?php   }else{ ?>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="login.php">Login</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="register.php">Register</a></li>
                            </ol>
                        <?php    
                            }
                        ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid main-header">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?php echo $CmsData['logo']; ?>" class="img-fluid logo" alt="img">
                        <img src="<?php echo $CmsData['logo']; ?>" class="img-fluid logo-white" alt="img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?php if($actual_link=='/index.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/about-us.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="about-us.php">About Us</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/products.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="products.php">Products</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/technologies.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="technologies.php">Technologies</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/achievements.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="achievements.php">Achievements</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/contact.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item <?php if($actual_link=='/blog.php'){ echo 'active'; } ?>">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
