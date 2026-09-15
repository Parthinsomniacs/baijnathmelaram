<?php
ob_start();
@session_start();
if (!isset($_SESSION['eligibility'])) {
    $_SESSION['eligibility'] = '';
}

// $random_val = rand(1,9);
$a = array(
    "12345678901234567890",
    "23456789012345678901",
    "34567890123456789012",
    "45678901234567890123",
    "56789012345678901234",
    "67890123456789012345",
    "78901234567890123456",
    "89012345678901234567",
    "90123456789012345678",
    "01234567890123456789"
);

/*************************EDIT BLOCK STARTS*************************/

date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$currentimestamp = date('Y-m-d H:i:s');

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

/* Load all settings */
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

/*************************EDIT BLOCK ENDS*************************/

$mediaslug = "media";
$imageslug = "images";
$cssslug = "css";
$jsslug = "js";
$fontsslug = "fonts";

$reg = isset($_GET["reg"]) ? $_GET["reg"] : "";
if ($site == "live") {
    $siteurl = $url;
    $mediaurl = $cdn . $mediaslug . "/";
} else {
    $siteurl = $url . $site . "/";
    $mediaurl = $cdn . $site . "/" . $mediaslug . "/";
    $localpath = $localpath . $site . "/";
    /*$bcc1 = $testbcc1;
        $bcc2 = $testbcc2;
        $bcc3 = $testbcc3;*/
    $database = $database . "b";
}

$title = $sitename;
$description = $sitename;
$keywords = $sitename;
$image = "seo";
$type = "website";
$canurl = $siteurl;

$imagesurl = $mediaurl . $imageslug . "/";
$cssurl = $mediaurl . $cssslug . "/";
$jsurl = $mediaurl . $jsslug . "/";
$fontsurl = $mediaurl . $fontsslug . "/";
$thankyou = $siteurl . "thankyou/";
$emailimg = $imagesurl . "email/";
$emailbanner = $emailimg . "banner.jpg";

$pagetype = "";
$onepagemenu = "";
$slider = "";
$swiperjs = "";
$popup = "";
$utm = "";

/* CRM integration check & Trackercode check */
$crmintegration = true;
$trackercodeintegration = true;

$head = $localpath . "include/inc-head.php";
$seo = $localpath . "include/inc-seo.php";
$trackingcodes = $localpath . "include/inc-trackingcodes.php";
$header = $localpath . "include/inc-header.php";
$footer = $localpath . "include/inc-footer.php";
$footscripts = $localpath . "include/inc-foot-scripts.php";

$utm = $localpath . "include/inc-utm.php";
$smtp = $localpath . "include/inc-smtp.php";
$browserfunction = $localpath . "include/inc-browserfunction.php";
$leadinsert = $localpath . "include/inc-leads.php";
$leadsendmail = $localpath . "include/leads-sendmail.php";
$crmleadsintegrate = $localpath . "include/inc-crm.php";
$spamdetector = $localpath . "include/inc-spamdetector.php";

$stylecss = $localpath . $mediaslug . "/" . $cssslug . "/style/style.php";
$inccss = $localpath . $mediaslug . "/" . $cssslug . "/inc-css.php";
$inccustomcss = $localpath . $mediaslug . "/" . $cssslug . "/all-custom.php";
$alljs = $localpath . $mediaslug . "/" . $jsslug . "/all-js.php";

/* Global constants */

$captcha = false;
$math1 = rand(0, 9);
$math2 = rand(0, 9);
$captcharesult = (int)$math1 + (int)$math2;

/* function for generating logs */
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

/* function for getting ip address */
function getIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

/* function for report spam leads */
function reportSpamAttach($data)
{
    if ($data != "") {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://paypride.com/spam-detector/spam-detection.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'data' => $data,
                'site_url' => $url . ' & hit from :' . getIPAddress()
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
}
