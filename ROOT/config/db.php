<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATA","cms_blog");
define("BASE","http://localhost/");

$mysqli = new mysqli(HOST, USER, PASS, DATA);
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

