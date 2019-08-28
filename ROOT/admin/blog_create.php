<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Create</title>
    <?php include "head.php";
        Admin::authCheck2(BASE);
        if (isset($_POST['blogCreteBtn'])){
            // Check if the form was submitted
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $title = $_POST['title'];
                $author = $_POST['author'];
                $description = $_POST['description'];
                $content = $_POST['content'];
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
                            Admin::createBlog($mysqli,$title,$author,$description,BASE."uploads/".$filename,$content);
                        }
                    } else{
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                } else{
                    echo "Error: " . $_FILES["blogImage"]["error"];
                }
            }
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
            <h1><i class="fa fa-dashboard"></i>Blog Create</h1>
            <p>Create new blog</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blog Create</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="pull-left">Blog Creation</span>
                    <a href="<?php echo BASE."admin/blog_all.php" ?>" class="pull-right"><i class="fa fa-list"></i></a>
                </div>
                <div class="card-body">
                    <form method="post" action="blog_create.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" class="form-control" placeholder="Title of the blog">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" class="form-control" placeholder="Description of the blog">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Author</label>
                                    <input name="author" class="form-control" value="<?php echo $AdminData['name'] ?>" placeholder="Author of the blog">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="blogImage" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Main content</label>
                                    <textarea name="content" class="form-control">Main Content of Blog</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <lable>&nbsp;</lable>
                                    <input type="submit" name="blogCreteBtn" class="btn btn-primary fa-pull-right">
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