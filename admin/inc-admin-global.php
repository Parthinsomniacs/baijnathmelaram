<?php

/* global settings */
date_default_timezone_set('Asia/Kolkata');
ob_start();
@session_start();

/*************************EDIT BLOCK STARTS*************************/


$server = "local";                      /*live/paypride/local*/


if ($server == "live") {
    $host = "localhost";
    $database = "inso-theme";
    $user = "inso-theme";
    $password = "Inso12345!@#$%";
} else if ($server == "development") {
    $host = "localhost";
    $database = "inso-theme";
    $user = "inso-theme";
    $password = "Inso12345!@#$%";
} else if ($server == "local") {
    $host = "localhost";
    $database = "baijnathmelaram";
    $user = "root";
    $password = "";
} else {
    echo "Global Configuration Error";
    exit();
}

/* Crete DB Connection */
$connection = new mysqli($host, $user, $password, $database) or die("Cannot Connect to Database. Please try again later.");

/* Load all admin settings */
$query = "SELECT * FROM settings where status = 1 order by settings_group";
$res = $connection->query($query);

while ($row = mysqli_fetch_assoc($res)) {
    ${$row['settings_key']} = $row['settings_value'];
}

if ($site == "live") {
    $localpath = $_SERVER['DOCUMENT_ROOT'] . "/baijnathmelaram/";
    $cdn = $cdn;
    $url = $url;
} else {
    $localpath = $_SERVER['DOCUMENT_ROOT'] . $site;
    $cdn = $cdn . $site;
    $url = $url;
}

/*=============================================================*/

$utmsource = "admin";

$exportslug = "Insomniacs";
$tableloginname = "login";
$tablename1 = "leads";
$tablename2 = "settings";
$tablename3 = ""; //"blocks";

$sitename = "insomniacs";
$companyname = "insomniacs";
$copyrightname = "insomniacs";
$copyrighttext = "All Rights Reserved";
$poweredby = "insomniacs";
$poweredbylink = "https://insomniacs.in/?utm_source=" . $utmsource . "&amp;utm_medium=footerlink&amp;utm_campaign=poweredby";
$pagetype = "";

$mediaslug = "media";
$imageslug = "images";
$cssslug = "css";
$jsslug = "js";
$fontsslug = "fonts";

if ($site == "live") {
    $siteurl = $url . "admin/";
    $localpath = $localpath . "admin/";
    $mediaurl = $cdn . "admin/" . $mediaslug . "/";
} else {
    $siteurl = $url . $site . "/admin/";
    $mediaurl = $cdn . $site . "/admin/" . $mediaslug . "/";
    $localpath = $localpath . $site . "/admin/";
    $database = $database . "b";
}


$imagesurl = $mediaurl . $imageslug . "/";
$cssurl = $mediaurl . $cssslug . "/";
$jsurl = $mediaurl . $jsslug . "/";
$fontsurl = $mediaurl . $fontsslug . "/";


$head = $localpath . "include/inc-head-admin.php";
$header = $localpath . "include/inc-header-admin.php";
$footer = $localpath . "include/inc-foot-admin.php";
$footscripts = $localpath . "include/inc-foot-scripts-admin.php";
$db = $localpath . "include/db.php";

$maxleadbar = 100;

function generatelogs($filename, $message, $localpath)
{
    $filename = $localpath . "logs/" . $filename . ".txt";
    $fp = fopen($filename, "a"); //opens file in append mode
    fwrite($fp, "\n\nType : " . $filename);
    fwrite($fp, "\nMessage : " . json_encode($message));
    fwrite($fp, "\nlogged at : " . date("Y-m-d H:i:s") . "\n");
    fwrite($fp, "=======================================================");
    fclose($fp);
}
