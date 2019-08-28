<?php session_start() ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
<link rel="stylesheet" href="css/typography.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<?php include "config/db.php" ?>
<?php include "admin/Helper.php" ?>
<?php $CmsData = Admin::getCMS($mysqli) ?>
<?php $actual_link = "{$_SERVER['REQUEST_URI']}";?>
