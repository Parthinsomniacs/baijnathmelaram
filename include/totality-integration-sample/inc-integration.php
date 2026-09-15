<?php

    /* update api tokens */

    $accesstoken = "610ce71c13cacb61e10a03ad";
    $accessapikey = "3fc9c96acfa8ae1fe8e5b0c201294cff";
    $policycode = "P624ea4d7e781b";
    $project = "WorldHome Towers";
    $siteurl = "https://example.com";

    /* API inputs */

    $fname = isset($_POST['fname'])?$_POST['fname']:"";
    $lname = isset($_POST['lname'])?$_POST['lname']:"";
    $phone = isset($_POST['phone'])?$_POST['phone']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";

    /* Totality Integrations */

	$curl = curl_init();
	$first_name = $fname;
	$middle_name = "";
	$last_name = $lname;
	$mobile = $phone;
	$email = $email;
	$note = ""; /* https://rhbf.in*/
	$tracker_code = isset($_POST["tracker_code"])?$_POST["tracker_code"]:"";
	$lead_secondary_status = "New";
	$note = $siteurl;
	$lead_source = "Media Online";
	$lead_secondary_source = "Website";
	$lead_tertiary_source = "Microsite";
	$lead_source_detail = "";
	$policycode = $policycode;
	$project = $project;


	$post_fields = [
		"LeadDetails"=> [
			[
				"Attribute"=> "FirstName",
				"Value"=> $first_name
			],
			[
				"Attribute"=> "LastName",
				"Value"=> $last_name
			],
			[
				"Attribute"=> "LeadStatusSecondary",
				"Value"=> "New"
			],
			[
				"Attribute"=> "Mobile",
				"Value"=> $mobile
			],
			[
				"Attribute"=> "Email",
				"Value"=> $email
			],
			[
				"Attribute"=> "policycode",
				"Value"=> $policycode
			]
		],
		"ProjectDetails"=> [
			[
				"Attribute"=> "Project",
				"Value"=> $project
			],
			[
				"Attribute"=> "LeadSource",
				"Value"=> $lead_source
			],
			[
				"Attribute"=> "LeadSecondarySource",
				"Value"=> $lead_secondary_source
			],
			[
				"Attribute"=> "LeadTertiarySource",
				"Value"=> $lead_tertiary_source
			],
			[
				"Attribute"=> "Notes",
				"Value"=> $note
			],
			[
				"Attribute"=> "Trackercode",
				"Value"=> $tracker_code
			]
		]
	];
	echo  "API url: "."<strong>https://realtyx.totalityre.com/api/leadsapi.php?accesstoken=".$accesstoken."&accessapikey=".$accessapikey."</strong><br/>";
	echo "Request body:<br/>";
	echo "<strong>".json_encode($post_fields)."</strong>";


	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://realtyx.totalityre.com/api/leadsapi.php?accesstoken=".$accesstoken."&accessapikey=".$accessapikey,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>json_encode($post_fields),
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		),
	));
	$response = curl_exec($curl);
	curl_close($curl);

	echo "<br/>Response:<br/>";
	echo "<strong>".$response."</strong>";
	exit();

?>