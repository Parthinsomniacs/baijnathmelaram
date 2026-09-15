<?php
include_once("../inc-global.php");

if (isset($_POST) && !empty($_POST) && $_POST['contact'] == "" && $_POST['site_url'] == $url) {

	require $utm;
	require $browserfunction;

	$fname = (isset($_POST['fname'])) ? mysqli_real_escape_string($connection, $_POST['fname']) : '';
	$lname = (isset($_POST['lname'])) ? mysqli_real_escape_string($connection, $_POST['lname']) : '';
	$email = (isset($_POST['email'])) ? mysqli_real_escape_string($connection, $_POST['email']) : '';
	$phone = (isset($_POST['phone'])) ? mysqli_real_escape_string($connection, $_POST['phone']) : '';
	$message = (isset($_POST['message'])) ? mysqli_real_escape_string($connection, $_POST['message']) : '';
	$formtype = (isset($_POST['formtype'])) ? mysqli_real_escape_string($connection, $_POST['formtype']) : '';
	$random_val = (isset($_POST['random_val'])) ? mysqli_real_escape_string($connection, $_POST['random_val']) : '';
	$name = $fname . ' ' . $lname;

	/* Generate Logs */
	$leadslogs = $_POST;
	$leadslogs['utm_source'] = $utm_source;
	$leadslogs['utm_medium'] = $utm_medium;
	$leadslogs['utm_campaign'] = $utm_campaign;
	$leadslogs['utm_content'] = $utm_content;
	$leadslogs['utm_term'] = $utm_term;
	$leadslogs['utm_isource'] = $utm_isource;
	$leadslogs['utm_imedium'] = $utm_imedium;
	$leadslogs['utm_icampaign'] = $utm_icampaign;
	$leadslogs['utm_icontent'] = $utm_icontent;
	$leadslogs['utm_iterm'] = $utm_iterm;
	$leadslogs['utm_initial_referrer'] = $utm_initial_referrer;
	$leadslogs['utm_last_referrer'] = $utm_last_referrer;
	$leadslogs['utm_landing_page'] = $utm_landing_page;
	$leadslogs['utm_visits'] = $utm_visits;
	$leadslogs['browser_name'] = $browser_name;
	$leadslogs['browser_version'] = $browser_version;
	$leadslogs['browser_platform'] = $browser_platform;
	$leadslogs['ip_address'] = $ip_address;

	generatelogs("leads", $leadslogs, $localpath);


	//Validation begins
	$errorStatus = 0;
	$errmsg = '';
	if ($name == "") {
		$errorStatus = 1;
		$errmsg .= 'Full Name is required.';
	} else if (!preg_match("/^[A-Za-z\-'., ]+$/", $name)) {
		$errorStatus = 1;
		$errmsg .= 'Enter a valid Name. Only Alphabets accepted. ';
	}

	/*If site accepts Only India phone Number phone*/
	if ($phone == "") {
		$errorStatus = 1;
		$errmsg .= 'Mobile Number is required. ';
	} else if (!ctype_digit($phone)) {
		$errorStatus = 1;
		$errmsg .= 'Mobile Number should be numberic. ';
	} else if (strlen($phone) != 10) {
		$errorStatus = 1;
		$errmsg .= 'Mobile Number should contain 10 digits. ';
	} else if (!preg_match("/^[0]?[6789]\d{9}$/", $phone)) {
		$errorStatus = 1;
		$errmsg .= 'Provide proper mobile number. ';
	}
	/*Duplicate entry check on mobile number start*/
	/*/else {
        $mSql = "SELECT * FROM contact WHERE phone = '".$phone."' and utm_source like '".$utm_source."' and date(created_at) = CURDATE()";
        $result = $connection->query($mSql);
        $fech = $result->fetch_assoc();
        if (count($fech) > 0) {
            $errorStatus = 1;
            $errmsg .= "Mobile Number Alredy Available";
        }
    }/*/
	/*Duplicate entry check on mobile number end*/
	if ($email == "") {
		$errorStatus = 1;
		$errmsg .= 'Email Address is required.';
	} else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
		$errorStatus = 1;
		$errmsg .= 'Enter a valid Email Address.';
	}

	if ($errorStatus == 0) {

		/* code for avoid lead duplication start */
		// $mSql = "SELECT * FROM leads WHERE phone = '" . $phone . "' and utm_source = '" . $utm_source . "' and date(created_at) = '" . date("Y-m-d") . "' and HOUR(created_at) = '" . date("H") . "'";
		// $result = $connection->query($mSql);
		// if ($result->num_rows > 0) {
		// 	$fech = $result->fetch_assoc();
		// 	if (count($fech) > 0) {
		// 		if ($mode != 'test') {
		// 			echo '<script>window.location="' . $thankyou . '?reg=success&type=leadalreadycaptured"</script>';
		// 		}
		// 	}
		// } else {

		/* code for avoid lead duplication end*/


		if (in_array($random_val, $a)) {
			$sql = "INSERT INTO leads (fname,lname,email,phone,formtype,message,random_val,utm_source,utm_medium,utm_campaign,utm_content,utm_term,utm_isource,utm_imedium,utm_icampaign,utm_icontent,utm_iterm,utm_initial_referrer,utm_last_referrer,utm_landing_page,utm_visits,browser_name,browser_version,browser_platform,ip_address,created_at)
			values('$fname','$lname','$email','$phone','$formtype','$message','$random_val','$utm_source','$utm_medium','$utm_campaign','$utm_content','$utm_term','$utm_isource','$utm_imedium','$utm_icampaign','$utm_icontent','$utm_iterm','$utm_initial_referrer','$utm_last_referrer','$utm_landing_page','$utm_visits','$browser_name','$browser_version','$browser_platform','$ip_address','$currentimestamp')";
		} else {
			$sql = "INSERT INTO junkleads (fname,lname,email,phone,formtype,message,random_val,utm_source,utm_medium,utm_campaign,utm_content,utm_term,utm_isource,utm_imedium,utm_icampaign,utm_icontent,utm_iterm,utm_initial_referrer,utm_last_referrer,utm_landing_page,utm_visits,browser_name,browser_version,browser_platform,ip_address,created_at)
			values('$fname','$lname','$email','$phone','$formtype','$message','$random_val','$utm_source','$utm_medium','$utm_campaign','$utm_content','$utm_term','$utm_isource','$utm_imedium','$utm_icampaign','$utm_icontent','$utm_iterm','$utm_initial_referrer','$utm_last_referrer','$utm_landing_page','$utm_visits','$browser_name','$browser_version','$browser_platform','$ip_address','$currentimestamp')";
		}

		// $sql = "INSERT INTO leads (fname,lname,email,phone,formtype,utm_source,utm_medium,utm_campaign,utm_content,utm_term,utm_isource,utm_imedium,utm_icampaign,utm_icontent,utm_iterm,utm_initial_referrer,utm_last_referrer,utm_landing_page,utm_visits,browser_name,browser_version,browser_platform,ip_address,created_at)
		// 	values('$fname','$lname','$email','$phone','$formtype','$utm_source','$utm_medium','$utm_campaign','$utm_content','$utm_term','$utm_isource','$utm_imedium','$utm_icampaign','$utm_icontent','$utm_iterm','$utm_initial_referrer','$utm_last_referrer','$utm_landing_page','$utm_visits','$browser_name','$browser_version','$browser_platform','$ip_address','$currentimestamp')";

		if ($connection->query($sql)) {

			/* Generate Success DB Logs */
			generatelogs("dbtransaction", $_POST, $localpath);
			// require $crmleadsintegrate;

			$sendEmail = true;
			if ($sendEmail == true) {
				if ($mode != 'test') {
					echo '<script>window.location="' . $thankyou . '?reg=success&name=' . $name . '&phone=' . $phone . '&email=' . $email . '&formtype=' . $formtype . '"</script>';
				} else {
					require $leadsendmail;
					echo 'Success<br/><br/>'; /*Success Message*/
					echo $subject . '<br/><br/>'; /*Output Subject*/
					echo $body; /*Output Whole MailBody*/
				}
			} else {
				if ($mode != 'test') {
					echo '<script>window.location="' . $siteurl . '?reg=email-error"</script>';
				} else {
					require $leadsendmail;
					echo 'Email Fails<br/><br/>';
					echo $mail->ErrorInfo . '<br/><br/>';
					echo $subject . '<br/><br/>'; /*Output Subject*/
					echo $body; /*Output Whole MailBody*/
				}
			}
		} else {

			if ($mode != 'test') {
				echo '<script>window.location="' . $siteurl . '?reg=data-insertion-error"</script>';
			} else {
				echo 'Data fails to insert into DB<br/><br/>';
				echo $connection->error . "<br/><br/>";
				/*/echo $subject.'<br/><br/>'; /*Output Subject*/
				/*/echo $body; /*Output Whole MailBody*/
			}

			/* Generate Failed DB Logs */
			generatelogs("dbtransaction", $sql . "->" . $connection->error, $localpath);
		}

		/* code for avoid lead duplication comma */
		// }
		/* code for avoid lead duplication comma*/
	} else {
		if ($mode != 'test') {
			echo '<script>window.location="' . $siteurl . '?reg=validation-error"</script>';
		} else {
			// echo 'Validation fails<br/><br/>' . $errmsg;
			echo '<script>window.location="' . $siteurl . '?reg=' . $errmsg . '"</script>';
			/*/ echo $subject . '<br/><br/>'; /*Output Subject*/
			/*/ echo $body; /*Output Whole MailBody*/
		}
	}
} else {

	generatelogs("leads", "Attack: " . json_encode($_POST), $localpath);

	reportSpamAttach(json_encode($_POST));

	if ($mode != 'test') {
		echo '<script>window.location="' . $siteurl . '?reg=fail"</script>';
	} else {
		echo 'Fails totally<br/><br/>';
		/*/ echo $subject . '<br/><br/>'; /*Output Subject*/
		/*/ echo $body; /*Output Whole MailBody*/
	}
}
