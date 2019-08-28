<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Edit</title>
    <?php include "head.php";
    Admin::authCheck2(BASE);
    if (isset($_POST['blogUpdateBtn'])){
        // Check if the form was submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $content = $_POST['content'];
            $id = $_POST['id'];
            // Check if file was uploaded without errors
            if(isset($_FILES["blogImage"]) && $_FILES["blogImage"]["error"] == 0){
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["blogImage"]["name"];
                $filetype = $_FILES["blogImage"]["type"];
                $filesize = $_FILES["blogImage"]["size"];
                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                // Verify MYME type of the file
                if(in_array($filetype, $allowed)){
                    $filename = date('m-d-Y-h-i-s-a', time())."-".$filename;
                    // Check whether file exists before uploading it
                    if(file_exists("../uploads/" . $filename)){
                        echo $filename . " is already exists.";
                    } else{
                        move_uploaded_file($_FILES["blogImage"]["tmp_name"], "../uploads/" . $filename);
                        echo "Your file was uploaded successfully.";
                        Admin::updateBlog($mysqli,$title,$author,$description,BASE."uploads/".$filename,$content,$id);
                    }
                } else{
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            } else{
                echo "Error: " . $_FILES["blogImage"]["error"];
            }
        }
    }
    if (isset($_GET['id'])){
       $SingleBlog =  Admin::getSingleBlog($mysqli,$_GET['id']);
    }else{
        header('Location:'.BASE.'/admin/blog_all.php');
    }
    ?>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body class="app sidebar-mini rtl">
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Blog Edit</h1>
            <p>Create new blog</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blog Edit</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="pull-left">Blog Modification</span>
                    <a href="<?php echo BASE."admin/blog_all.php" ?>" class="pull-right"><i class="fa fa-list"></i></a>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php if (isset($_GET['id'])){ echo BASE.'/admin/blog_edit.php';}else{echo BASE.'/admin/blog_create.php';}?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" class="form-control" value="<?php if (isset($_GET['id'])){ echo $SingleBlog['title'];}?>" placeholder="Title of the blog">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" class="form-control" value="<?php if (isset($_GET['id'])){ echo $SingleBlog['description'];}?>" placeholder="Description of the blog">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Author</label>
                                    <input name="author" class="form-control" value="<?php echo $AdminData['name'] ?>" placeholder="Author of the blog">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="blogImage" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Main content</label>
                                    <textarea name="content" class="form-control"><?php if (isset($_GET['id'])){ echo $SingleBlog['content']; }else{echo "Enter content of Blog";}?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <input type="submit" name="blogUpdateBtn" class="btn btn-primary fa-pull-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "script.php"; ?>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
