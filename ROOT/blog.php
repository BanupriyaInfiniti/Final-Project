<!doctype html>
<html lang="en">
<head>
    <title>Blog</title>
    <?php
        include 'head.php';
        $Blogs = Admin::getBlog($mysqli)
    ?>
</head>
<body>
<?php include 'header.php'; ?>
<section class="iq-breadcrumb text-left green-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-md-6 wow fadeInRight">
                <img src="images/blog/blog_png.png" class="img-fluid iq-pr-50" alt="">
            </div>
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Blog</h2>
                <p class="mt-3">A blog is an online journal or informational website displaying information in the reverse chronological order, with latest posts appearing first. It is a platform where a writer or even a group of writers share their views on an individual subject.

</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">
                                <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="blog" style="margin-top: -100px;">
    <div class="container">
        <div class="row">
            <?php while ($row = $Blogs->fetch_array()){ ?>
                <div class="col-sm-12 col-lg-6">
                <div class="blog-box mt-5">
                    <div class="row no-gutters row-eq-height pb-4">
                        <div class="col-sm-6 iq-shadow">
                            <div class="content">
                                <h6 class="mb-2"><?php echo $row['title'] ?></h6>
                                <ul>
                                    <li><span>By:</span> <a href="#"><?php echo $row['created_by'] ?></a></li>
                                    <li><?php echo $row['created_at'] ?></li>
                                </ul>
                                <p class="mt-4"><?php echo $row['description'] ?></p>
                                <ul class="iq-tag mt-4">
                                    <center><li><a href="<?php echo BASE.'blog-details.php?id='.$row['id']; ?>">Read More</a></li></center>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid" src="<?php echo $row['image'] ?>" alt="image">
                        </div>
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