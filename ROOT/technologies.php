<!doctype html>
<html lang="en">
<head>
    <title>Technology</title>
    <?php
        include 'head.php';
        $Technologies = Admin::getTechnology($mysqli);
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-md-6 wow fadeInRight">
                <img src="images/technology/01.png" class="img-fluid iq-pr-50" alt="">
            </div>
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Technologies</h2>
                <p class="mt-3">Technology can be viewed as an activity that forms or changes culture. Additionally, technology is the application of math, science, and the arts for the benefit of life as it is known. A modern example is the rise of communication technology, which has lessened barriers to human interaction and as a result has helped spawn new subcultures; the rise of cyberculture has at its basis the development of the Internet and the computer.</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Technologies</li>
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
                    <h2 class="title font-weight-bold">Technology Provide</h2>
                    <p class="sub-title">Technology can be viewed as an activity that forms or changes culture. Additionally, technology is the application of math, science, and the arts for the benefit of life as it is known. A modern example is the rise of communication technology, which has lessened barriers to human interaction and as a result has helped spawn new subcultures; the rise of cyberculture has at its basis the development of the Internet and the computer..</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ($row = $Technologies->fetch_array()){ ?>
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