<?php

class Admin {

    public static function login($UserName, $PassWord, $mysqli,$base){
        $query = "SELECT * FROM `admins` WHERE  `email` ='$UserName' AND `password` = '$PassWord'";
        if ($result = $mysqli->query($query)){
            if ($result->num_rows > 0){
                $_SESSION['UserName'] = $UserName;
                $_SESSION['PassWord'] = $PassWord;
                header("Location: ".$base."admin/dashboard.php");
            }else{
                echo "<script>alert('invalid credential!')</script>";
            }
        }
    }

    public static function customerLogin($mysqli,$base,$UserName,$PassWord){
        $query = "SELECT * FROM `users` WHERE  `email` ='$UserName' AND `password` = '$PassWord'";
        if ($result = $mysqli->query($query)){
            if ($result->num_rows > 0){
                $_SESSION['CUserName'] = $UserName;
                $_SESSION['CPassWord'] = $PassWord;
                $UserArr = Self::getCustomerData2($mysqli,$UserName,$PassWord);
                $_SESSION['CName'] = $UserArr['name'];
                header("Location: ".$base."index.php");
            }else{
                echo "<script>alert('invalid credential!')</script>";
            }
        } 
    }

    public static function customerRegister($mysqli,$base,$name,$email,$PassWord,$CPassword){
        if($PassWord!=$CPassword){
            echo "<script>alert('password not matched')</script>";
        }else{
            $query = "INSERT INTO `users`(`name`, `email`, `password`, `created_at`) 
                        VALUES ('$name','$email','$PassWord',NOW())";
            if($mysqli->query($query)){
                $_SESSION['CUserName'] = $email;
                $_SESSION['CPassWord'] = $PassWord;
                $_SESSION['CName'] = $name;
                header("Location: ".$base."index.php");
            }
        }
    }

    public static function getCustomerData2($Conn,$email,$PassWord){
        $data = [];
        $query = "SELECT * FROM `users` WHERE  `email` ='$email' AND `password` = '$PassWord'";
        if ($result = $Conn->query($query)){
            if ($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $data = $row;
                }
            }
        }
        return $data;
    }

    public static function getCustomerData($Conn){
        $data = [];
        $query = "SELECT * FROM `users` WHERE  `email` ='".$_SESSION['CUserName']."' AND `password` = '".$_SESSION['CPassWord']."'";
        if ($result = $Conn->query($query)){
            if ($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $data = $row;
                }
            }
        }
        return $data;
    }

    public static function authCheck($base){
        if (isset($_SESSION['UserName'])&& isset($_SESSION['PassWord'])){
            header("Location: ".$base."admin/dashboard.php");
        }
    }

    public static function authCheck2($base){
        if (!(isset($_SESSION['UserName'])&& isset($_SESSION['PassWord']))){
            header("Location: ".$base."admin/index.php");
        }
    }

    public static function logout($base){
        session_destroy();
        header("Location: ".$base."admin/index.php");
    }

    public static function clogout($base){
        session_destroy();
        header("Location: ".$base."login.php");
    }

    public static function getCMS($Conn){
        $data = [];
        $query = "SELECT * FROM `cms_basic`";
        if ($result = $Conn->query($query)){
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()){
                   $data[$row['purpose']] = $row['link'];
               }
            }
        }
        return $data;
    }

    public static function getBlog($Conn){
        $data = [];
        $query = "SELECT * FROM `blogs` ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
           $data = $result;
        }
        return $data;
    }


    public static function getProducts($Conn){
        $data = [];
        $query = "SELECT * FROM `products` ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result;
        }
        return $data;
    }
    public static function getAchievements($Conn){
        $data = [];
        $query = "SELECT * FROM `achievements` ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result;
        }
        return $data;
    }
    public static function getTechnology($Conn){
        $data = [];
        $query = "SELECT * FROM `technologies` ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result;
        }
        return $data;
    }


    public static function getSingleBlog($Conn,$id){
        $data = [];
        $query = "SELECT * FROM `blogs` WHERE `id`='$id' ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result->fetch_array();
        }
        return $data;
    }

    public static function getSingleProduct($Conn,$id){
        $data = [];
        $query = "SELECT * FROM `products` WHERE `id`='$id' ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result->fetch_array();
        }
        return $data;
    }
    public static function getSingleTechnology($Conn,$id){
        $data = [];
        $query = "SELECT * FROM `technologies` WHERE `id`='$id' ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result->fetch_array();
        }
        return $data;
    }
    public static function getSingleAchievement($Conn,$id){
        $data = [];
        $query = "SELECT * FROM `achievements` WHERE `id`='$id' ORDER BY `id` DESC ";
        if ($result = $Conn->query($query)){
            $data = $result->fetch_array();
        }
        return $data;
    }


    public static function getAdminData($Conn){
        $data = [];
        $query = "SELECT * FROM `admins` WHERE  `email` ='".$_SESSION['UserName']."' AND `password` = '".$_SESSION['PassWord']."'";
        if ($result = $Conn->query($query)){
            if ($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $data = $row;
                }
            }
        }
        return $data;
    }

    public static function basicUpdate($Conn, $title, $contact, $address,$comapany_mail){
        $query = "UPDATE `cms_basic`
                    SET link = (case 
                                     when purpose = 'title' then '$title'
                                     when purpose = 'contact' then '$contact'
                                     when purpose = 'address' then '$address'
                                     when purpose = 'company_mail' then '$comapany_mail'
                                end),
                    updated_at = NOW() WHERE id IN (4,5,6,7)";
        $Conn->query($query);
    }

    public static function socialUpdate($Conn, $facebook, $twitter, $instagram, $google){
        $query = "UPDATE `cms_basic`
                    SET link = (case 
                                     when purpose = 'facebook' then '$facebook'
                                     when purpose = 'twitter' then '$twitter'
                                     when purpose = 'instagram' then '$instagram'
                                     when purpose = 'google' then '$google'
                                end),
                    updated_at = NOW() WHERE id IN (1,2,3,8)";
        $Conn->query($query);
    }

    public static function updateLogo($Conn, $url){
        $query = "UPDATE `cms_basic` SET `link`='$url' WHERE `purpose`='logo'";
        $Conn->query($query);
    }

    public static function createBlog($Conn,$title,$author,$description,$imageUrl,$content){
        $query = "INSERT INTO `blogs`(`title`, `created_by`, `created_at`, `description`, `image`, `content`) 
                    VALUES ('$title','$author',NOW(),'$description','$imageUrl','$content')";
        $Conn->query($query);
    }

    public static function createProduct($Conn,$title,$description,$imageUrl){
        $query = "INSERT INTO `products`(`title`, `created_at`, `description`, `image`) 
                    VALUES ('$title',NOW(),'$description','$imageUrl')";
        $Conn->query($query);
    }
    public static function createAchievement($Conn,$title,$description,$imageUrl){
        $query = "INSERT INTO `achievements`(`title`, `created_at`, `description`, `image`) 
                    VALUES ('$title',NOW(),'$description','$imageUrl')";
        $Conn->query($query);
    }
    public static function createTechnology($Conn,$title,$description,$imageUrl){
        $query = "INSERT INTO `technologies`(`title`, `created_at`, `description`, `image`) 
                    VALUES ('$title',NOW(),'$description','$imageUrl')";
        $Conn->query($query);
    }

    public static function updateBlog($Conn,$title,$author,$description,$imageUrl,$content,$id){
        $query = "UPDATE `blogs`  
                        SET `title`='$title', 
                            `created_by`='$author', 
                            `description`='$description', 
                            `image`='$imageUrl', 
                            `content`='$content'
                        WHERE `id`='$id'";
        $Conn->query($query);
    }

    public static function updateProduct($Conn,$title,$description,$imageUrl,$id){
        $query = "UPDATE `products`  
                        SET `title`='$title',  
                            `description`='$description', 
                            `image`='$imageUrl' 
                        WHERE `id`='$id'";
        $Conn->query($query);
    }
    public static function updateAchievement($Conn,$title,$description,$imageUrl,$id){
        $query = "UPDATE `achievements`  
                        SET `title`='$title',  
                            `description`='$description', 
                            `image`='$imageUrl' 
                        WHERE `id`='$id'";
        $Conn->query($query);
    }
    public static function updateTechnology($Conn,$title,$description,$imageUrl,$id){
        $query = "UPDATE `technologies`  
                        SET `title`='$title',  
                            `description`='$description', 
                            `image`='$imageUrl' 
                        WHERE `id`='$id'";
        $Conn->query($query);
    }

}

