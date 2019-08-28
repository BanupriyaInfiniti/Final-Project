<!doctype html>
<html lang="en">
<head>
    <title>Achievements</title>
    <?php
        include 'head.php';
        $Achievements = Admin::getAchievements($mysqli);
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-md-6 wow fadeInRight">
                <img src="images/achieve/01.png" class="img-fluid iq-pr-50" alt="">
            </div>
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Achievement</h2>
                <p class="mt-3">The foundation of a good achievement name and achievement description starts with your core: your customers. You should write in a manner that resonates with your target audience. Write in such a way that they understand. Your brand should be reflective of who your target audience is. 

Read More at beeketing.com</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Achievements</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="service-provide Service-shap pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Achievement Provide</h2>
                    <p class="sub-title">The foundation of a good achievement name and achievement description starts with your core:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ($row = $Achievements->fetch_array()){ ?>
                <div class="col-lg-4 col-md-4">
                <div class="rplr-30">
                    <div class="future-services services  text-center wow slideInUp" data-wow-duration="0.5s">
                        <div class="future-img">
                            <img src="<?php echo $row['image']; ?>" class="img-fluid mb-4" alt="">
                        </div>
                        <h4 class="mb-3"><?php echo $row['title']; ?></h4>
                        <p class="mb-0"><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<?php include 'script.php'; ?>
</body>
</html>