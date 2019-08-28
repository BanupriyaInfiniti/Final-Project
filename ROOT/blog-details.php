<!doctype html>
<html lang="en">
<head>
    <title>Blog Details</title>
    <?php
        include 'head.php';
        if (isset($_GET['id'])){
            $SingleBlog =  Admin::getSingleBlog($mysqli,$_GET['id']);
            $Blogs = Admin::getBlog($mysqli);
        }else{
            header('Location:'.BASE.'/blog.php');
        }
    ?>
</head>
<body>
<?php include "header.php"; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-md-6 wow fadeInRight">
                <img src="images/about/07.png" class="img-fluid iq-pr-50" alt="">
            </div>
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Blog Details</h2>
                <p class="mt-3">Printer Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and a type specimen book.</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <section class="pt-0">
        <div class="blogdetailbox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 re-mtb-30">
                        <div class="iq-blogbox">
                            <div class="iq-blog-entry">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <span class="date main-bg">12<small>Aug</small></span>
                                        <ul class="media-box mt-4">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="iq-entry-image">
                                            <img class="img-fluid wow fadeInUp" data-wow-duration="1.0s" src="<?php echo $SingleBlog['image']; ?>" alt="image">
                                        </div>
                                        <div class="iq-blog-detail mt-5">
                                            <div class="iq-entry-tag wow fadeInUp" data-wow-duration="1.0s">
                                                <span class="main-bg"> fashion</span>
                                                <span class="main-bg"> style</span>
                                            </div>
                                            <div class="iq-entry-title wow fadeInUp" data-wow-duration="1.0s">
                                                <h5><?php echo $SingleBlog['title']; ?></h5>
                                                <div class="blog-box">
                                                    <ul>
                                                        <li>By: <a href="#"><?php echo $SingleBlog['created_by']; ?></a></li>
                                                        <li><?php echo $SingleBlog['created_at']; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-detail-box mt-4">
                                            <p class=" wow fadeInUp" data-wow-duration="1.0s">
                                                <?php echo $SingleBlog['description']; ?>
                                            </p>
                                            <div class="special-text">
                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                <p><?php echo $SingleBlog['content']; ?></p>
                                            </div>
                                            <div class="row mb-5 mt-5">
                                                <div class="col-md-4">
                                                    <img class="img-fluid" src="images/blog/blog-img1.jpg" alt="blog">
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-fluid" src="images/blog/blog-img2.jpg" alt="blog">
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-fluid" src="images/blog/blog-img3.jpg" alt="blog">
                                                </div>
                                            </div>
                                            <h3>Established fact that a reader will be</h3>
                                            <p class="wow fadeInUp" data-wow-duration="1.0s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        </div>
                                        <div class="blog-commentbox">
                                            <div class="media info-block wow fadeInUp" data-wow-duration="1.0s">
                                                <img class="mr-3" src="images/testomonial/01.jpg" alt="image">
                                                <div class="media-body">
                                                    <h5>Rinks Kevin</h5>
                                                    <div class="iq-comment-metadata white"><a href="#"><i class="ion-ios-calendar-outline"></i>
                                                            <span>May 10, 2017 at 12:00 am</span>
                                                        </a>
                                                    </div>
                                                    <p class="mt-3 mb-0"> CEO &amp; It was popularised in the 1960s with the and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <div id="comments">
                                                <h3 class="wow fadeInUp" data-wow-duration="1.0s">Comments <small>/ 21</small></h3>
                                                <div class="iq-comment-list">
                                                    <div class="media iq-comments-media wow fadeInUp" data-wow-duration="1.0s">
                                                        <img class="mr-3" src="images/testomonial/02.jpg" alt="image">
                                                        <div class="media-body">
                                                            <h5>Kevin Martin</h5>
                                                            <div class="iq-comment-metadata"><a href="#"><i class="ion-ios-calendar-outline"></i>
                                                                    <span>May 14, 2017 at 5:00 pm</span>
                                                                </a>
                                                            </div>
                                                            <a href="#" class="btn-black green">Reply</a>
                                                            <p class="mt-3 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-contact">
                                                <h3>Post A Comment</h3>
                                                <form class="iq-contactbox">
                                                    <div class="contact-form contact-box">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="form-group section-field">
                                                                    <label for="name">Name</label>
                                                                    <input id="name" type="text" placeholder="Your Name*" name="name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="form-group section-field">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Your Email*" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-sm-12">
                                                                <div class="form-group section-field">
                                                                    <label>Phone</label>
                                                                    <input type="text" placeholder="Your No*" name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="form-group section-field textarea">
                                                                    <label>Comment</label>
                                                                    <textarea class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
                                                                </div>
                                                                <input type="hidden" name="action" value="sendEmail">
                                                                <button id="submit" name="submit" type="submit" value="Send" class="button pull-right">Send Post</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="iq-post-sidebar iq-rmt-30">
                            <div class="iq-sidebar-widget search-box wow fadeInUp" data-wow-duration="1.0s">
                                <div class="iq-widget-search"> <i class="ion-ios-search"></i>
                                    <input type="search" placeholder="Search" class="form-control placeholder">
                                </div>
                            </div>
                            <div class="iq-sidebar-widget wow fadeInUp" data-wow-duration="1.0s">
                                <h5>Recent Articles</h5>
                                <div class="iq-widget-menu mt-4">
                                    <div class="list-inline iq-widget-menu">
                                        <ul class="iq-post">
                                            <?php $i=1; while ($row = $Blogs->fetch_array()){ $i++; if ($i>11){break;}?>
                                            <li class="mt-3">
                                                <div class="post-img"> <img src="images/blog/blog-detail/01.jpg" alt="#"> </div>
                                                <div class="post-blog">
                                                    <div class="blog-box">
                                                        <ul>
                                                            <li>By: <a href="#"><?php echo $row['created_by']; ?></a></li>
                                                            <li><?php echo $row['created_at']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <a href="<?php echo BASE.'blog-details.php?id='.$row['id']; ?>"><?php echo $row['title']; ?></a>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-sidebar-widget wow fadeInUp" data-wow-duration="1.0s">
                                <h5>Tags</h5>
                                <ul class="iq-tag list-inline mt-4">
                                    <li class="mt-3"><a href="#">Bootstrap</a>(1)</li>
                                    <li class="mt-3"><a href="#">HTML5</a>(5)</li>
                                    <li class="mt-3"><a href="#">Wordpress</a>(3)</li>
                                    <li class="mt-3"><a href="#">CSS3</a>(7)</li>
                                    <li class="mt-3"><a href="#">Creative</a>(6)</li>
                                    <li class="mt-3"><a href="#">Multipurpose</a>(2)</li>
                                    <li class="mt-3"><a href="#">Bootstrap</a>(7)</li>
                                    <li class="mt-3"><a href="#">HTML5</a>(4)</li>
                                    <li class="mt-3"><a href="#">Wordpress</a>(2)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "script.php"; ?>
<?php include "footer.php"; ?>
</body>
</html>