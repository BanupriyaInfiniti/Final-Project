<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cms Setup Page</title>
    <?php
        include "head.php";
        Admin::authCheck2(BASE);
        if (isset($_POST["basicUpdateBtn"])){
            Admin::basicUpdate($mysqli,$_POST['title'],$_POST['contact'],$_POST['address'],$_POST['company_mail']);
        }
        if (isset($_POST["socialUpdateBtn"])){
            Admin::socialUpdate($mysqli,$_POST['facebook'],$_POST['twitter'],$_POST['instagram'],$_POST['google']);
        }
        if (isset($_POST['logoUpdateBtn'])){
            // Check if the form was submitted
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Check if file was uploaded without errors
                if(isset($_FILES["LogoImage"]) && $_FILES["LogoImage"]["error"] == 0){
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                    $filename = $_FILES["LogoImage"]["name"];
                    $filetype = $_FILES["LogoImage"]["type"];
                    $filesize = $_FILES["LogoImage"]["size"];
                    // Verify file extension
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                    // Verify file size - 5MB maximum
                    $maxsize = 5 * 1024 * 1024;
                    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    // Verify MYME type of the file
                    if(in_array($filetype, $allowed)){
                        // Check whether file exists before uploading it
                        if(file_exists("../uploads/" . $filename)){
                            echo $filename . " is already exists.";
                        } else{
                            move_uploaded_file($_FILES["LogoImage"]["tmp_name"], "../uploads/" . $filename);
                            echo "Your file was uploaded successfully.";
                            Admin::updateLogo($mysqli,BASE."uploads/".$filename);
                        }
                    } else{
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                } else{
                    echo "Error: " . $_FILES["LogoImage"]["error"];
                }
            }
        }
        $CmsData = Admin::getCMS($mysqli);
    ?>
</head>
<body class="app sidebar-mini rtl">
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Basic CMS</h1>
            <p>To update basic content management system</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"> Basic </div>
                <div class="card-body">
                    <form action="cms_setup.php" method="post">
                        <div class="form-group">
                            <lable>Company Name</lable>
                            <input class="form-control" type="text" name="title" value="<?php echo $CmsData['title'] ?>" placeholder="Website Title">
                        </div>
                        <div class="form-group">
                            <lable>Contact</lable>
                            <input class="form-control" type="text" name="contact" value="<?php echo $CmsData['contact'] ?>" placeholder="Phone / Mobile Number">
                        </div>
                        <div class="form-group">
                            <lable>Address</lable>
                            <input class="form-control" type="text" name="address" value="<?php echo $CmsData['address'] ?>" placeholder="Office Address">
                        </div>
                        <div class="form-group">
                            <lable>Company Mail</lable>
                            <input class="form-control" type="text" name="company_mail" value="<?php echo $CmsData['company_mail'] ?>" placeholder="Company Mail">
                        </div>
                        <div class="form-group">
                            <lable>&nbsp;</lable>
                            <input class="form-control btn btn-primary" type="submit" name="basicUpdateBtn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <span class="pull-right">Last Update : <?php echo date('Y-m-d') ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"> Social Link </div>
                <div class="card-body">
                    <form method="post" action="cms_setup.php">
                        <div class="form-group">
                            <lable>Facebook link</lable>
                            <input class="form-control" type="text" name="facebook" value="<?php echo $CmsData['facebook'] ?>" placeholder="Facebook Link">
                        </div>
                        <div class="form-group">
                            <lable>Twitter link</lable>
                            <input class="form-control" type="text" name="twitter" value="<?php echo $CmsData['twitter'] ?>" placeholder="Twitter Link">
                        </div>
                        <div class="form-group">
                            <lable>Instagram link</lable>
                            <input class="form-control" type="text" name="instagram" value="<?php echo $CmsData['instagram'] ?>" placeholder="Instagram Link">
                        </div>
                        <div class="form-group">
                            <lable>Google link</lable>
                            <input class="form-control" type="text" name="google" value="<?php echo $CmsData['google'] ?>" placeholder="Google Link">
                        </div>
                        <div class="form-group">
                            <lable>&nbsp;</lable>
                            <input class="form-control btn btn-primary" type="submit" name="socialUpdateBtn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <span class="pull-right">Last Update : <?php echo date('Y-m-d') ?></span>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="height: 100%;">
                <div class="card-header">Logo Update</div>
                <div class="card-body">
                    <form method="post" action="cms_setup.php" enctype="multipart/form-data">
                        <input type="file" name="LogoImage" accept=".png">
                        <input type="submit" value="upload" name="logoUpdateBtn">
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">View Logo</div>
                <div class="card-body">
                    <center>
                        <img src="<?php echo $CmsData['logo']; ?>" class="img-fluid logo" alt="img">
                    </center>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</main>
<?php include "script.php"; ?>
</body>
</html>