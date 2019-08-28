<!doctype html>
<html lang="en">
<head>
    <title>Contact</title>
    <?php include "head.php"; ?>
</head>
<body>
<?php include "header.php"; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-md-6">
                <img src="images/clients/02.png" class="img-fluid iq-pr-50" alt="">
            </div>
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Contact Us</h2>
                <p class="mt-3">Contact us pages are often the go-to for a new visitor on a mission. It’s where they go when they have a question and truly want to speak to an individual at your organization.</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <section class="iq-contactbox pt-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 align-self-center">
                    <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <p>It is a long established fact</p>
                        <form class="p-0" id="contact">
                            <div class="contact-form mt-4">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3">
                                        <div class="form-group section-field textarea wow fadeInUp" data-wow-duration="2.5s">
                                            <label class="mb-2">Message</label>
                                            <textarea class="input-message w-100" name="message" id="message" placeholder="Type Your Message Here" rows="5"></textarea>
                                        </div>
                                        <div class="section-field iq-mt-20">
                                            <div class="g-recaptcha" data-sitekey="6LdA3mYUAAAAANpUuZTLbKM_s23tTHlcdJ7dYfgI"></div>
                                        </div>
                                        <input type="hidden" name="action" value="sendEmail">
                                        <button id="submit" name="submit" type="submit" value="Send" class="button pull-right wow fadeInUp" data-wow-duration="1.0s">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-bg">
                        <h2>Contact Info</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="iq-contact text-white">
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <p><?php echo $CmsData['contact']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <p><?php echo $CmsData['company_mail']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><?php echo $CmsData['address']; ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840289118572!2d144.95373631550405!3d-37.81720974201396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1543402448828" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
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
<?php include "footer.php"; ?>
<?php include "script.php"; ?>
</body>
</html>