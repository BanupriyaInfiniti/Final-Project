<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <?php
        include 'head.php';
        $Blogs = Admin::getBlog($mysqli);

        
        if(isset($_POST["logout_btn"])){
            Admin::clogout(BASE);
        }
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-text">
                    <h5 class="main-color mb-3">Content Management System</h5>
                    <h1 class="font-weight-bold  mb-3">CMS And Blog Website</h1>
                    <p class=" mb-4">For a Web site developer, a home page is the first page presented when a user selects a site or presence on the World Wide Web. The usual address for a Web site is the home page address, although you can enter the address (Uniform Resource Locator) of any page and have that page sent to you.</p>
                    <div class="align-items-center d-flex">
                        <a class="button" href="#">Read More</a>
                        <div class="play-video iq-asked-img">
                            <a href="video/01.mp4" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-type wow fadeInRight">
                    <img class="img-fluid banner-person" src="images/home/01.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <section class="how-it-works conection-shap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="future-services text-center wow slideInUp" data-wow-duration="0.5s">
                        <div class="future-img">
                            <img src="images/blog/blog-img4.jpg" class="img-fluid mb-4" alt="">
                        </div>
                        <h4 class="mb-3">Fully Support</h4>
                        <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="future-services text-center wow slideInUp" data-wow-duration="1s">
                        <div class="future-img">
                            <img src="images/home/02.jpg" class="img-fluid mb-4" alt="">
                        </div>
                        <h4 class="mb-3">Product Review</h4>
                        <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="future-services text-center wow slideInUp" data-wow-duration="1.5s">
                        <div class="future-img">
                            <img src="images/about/a1.png" class="img-fluid mb-4" alt="">
                        </div>
                        <h4 class="mb-3">Product Analysis</h4>
                        <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0 finding-shap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fully-dedicated wow slideInLeft">
                        <img src="images/home/04.png" class="img-fluid " alt="">
                    </div>
                </div>
                <div class="col-md-6 text-left align-self-center">
                    <div class="ml-3 mt-3">
                        <h3 class="font-weight-bold">Fully dedicated to finding the best solutions.</h3>
                        <p class="mt-3">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a class="button mt-3" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-bg counter">
        <div class="container">
            <div class="row iq-counter3 text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-counter iq-pt-30 iq-rmb-30">
                        <span class="timer text-white" data-to="575" data-speed="5000">575</span>
                        <h6 class="mt-3 text-white">Increase in Leads</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-counter iq-pt-30 iq-rmb-30">
                        <span class="timer text-white" data-to="1540" data-speed="5000">1540</span>
                        <h6 class="mt-3 text-white">Lift in ROI</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-counter iq-pt-30 iq-rmb-30">
                        <span class="timer text-white" data-to="110" data-speed="5000">110</span>
                        <h6 class="mt-3 text-white">Increase in Conversions</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-counter iq-pt-30">
                        <span class="timer text-white" data-to="90" data-speed="5000">110</span>
                        <h6 class="mt-3 text-white">Decrease in ECPA</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get-tips-tricks tricks-shap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-md-6">
                    <div class="tips-img wow fadeIn animated bounce slower">
                        <img src="images/home/h1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 text-left align-self-center">
                    <div class="ml-3 mt-3">
                        <h3 class="font-weight-bold">Get tips & tricks on how to skyrocket your sales.</h3>
                        <p class="mt-3">The foundation of a good product name and product description starts with your core: your customers. You should write in a manner that resonates with your target audience. Write in such a way that they understand. Your brand should be reflective of who your target audience is. 

Read More at beeketing.com/blog/optimize-product-description/ © Beeketing Blog.</p>
                        <a class="button mt-3" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-provide Service-shap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title font-weight-bold">Service Provide</h2>
                        <p class="sub-title">The foundation of a good product name and product description starts with your core: your customers. You should write in a manner that resonates with your target audience. Write in such a way that they understand. Your brand should be reflective of who your target audience is. 

Read More at beeketing.com/blog/optimize-product-description/ © Beeketing Blog.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="0.5s">
                            <div class="future-img">
                                <img src="images/home/06.png" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Targeting Autonomous</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="1s">
                            <div class="future-img">
                                <img src="images/services/s2.png" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Media Buying</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="1.5s">
                            <div class="future-img">
                                <img src="images/home/07.png" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Analytics & Insights</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="0.5s">
                            <div class="future-img">
                                <img src="images/home/08.png" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Optimization & Testing</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="1s">
                            <div class="future-img">
                                <img src="images/home/09.png" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Cross-Channel Execution</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="rplr-30">
                        <div class="future-services services text-center wow slideInUp" data-wow-duration="1.5s">
                            <div class="future-img">
                                <img src="images/technology/t1.jpg" class="img-fluid mb-4" alt="">
                            </div>
                            <h4 class="mb-3">Advanced Monitoring</h4>
                            <p class="mb-0">There are many variations of passages of the have suffered in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="iq-blog pt-0 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title font-weight-bold">Recent Stories</h2>
                        <p class="sub-title">Simply dummy has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="2" data-items-laptop="2" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1">
                        <?php while ($row = $Blogs->fetch_array()){ ?>
                            <div class="item" style="margin-left: 40px;">
                            <div class="blog-box">
                                <div class="row no-gutters row-eq-height pb-4">
                                    <div class="col-sm-6 iq-shadow">
                                        <div class="content">
                                            <h5><?php echo $row['title'] ?></h5>
                                            <ul>
                                                <li><span>By:</span> <a href="#"><?php echo $row['created_by'] ?></a></li>
                                                <li><?php echo $row['created_at'] ?></li>
                                            </ul>
                                            <p class="mt-4">Build virtual agents to automate business processes such as front desk customer engagement.</p>
                                            <ul class="iq-tag mt-4">
                                                <center>
                                                    <li><a href="<?php echo BASE.'/blog-details.php?id='.$row['id'] ?>">Read More</a></li>
                                                </center>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img class="img-fluid" src="<?php echo $row['image']; ?>" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="iq-clients pt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title font-weight-bold">They Trust Me</h2>
                        <p class="sub-title">Simply dummy has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="6" data-items-laptop="5" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1">
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img1.png" alt="image" data-toggle="tooltip" title="HTML">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img2.png" alt="image" data-toggle="tooltip" title="Wordpress">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img3.png" alt="image" data-toggle="tooltip" title="Shopify">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img4.png" alt="image" data-toggle="tooltip" title="CSS">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img5.png" alt="image" data-toggle="tooltip" title="jQuery">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-box">
                                <img class="img-fluid client-img" src="images/clients/clients-img6.png" alt="image" data-toggle="tooltip" title="Bootstrap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>
<?php include 'script.php' ?>
</body>
</html>