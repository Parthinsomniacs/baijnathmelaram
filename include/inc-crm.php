<?php

      /* Totality Integrations */

	$curl = curl_init();
	$first_name = $fname;
	$middle_name = "";
	$last_name = $lname;
	$mobile = $phone;
	$email = $email;
	$note = ""; 
	$tracker_code = isset($_POST["tracker_code"])?$_POST["tracker_code"]:"";
	$gclid = isset($_POST["gclid"])?$_POST["gclid"]:"";
	$lead_secondary_status = "New";
	$note = $siteurl;
	$lead_source = "Media Online";
	$lead_secondary_source = "Website";
	$lead_tertiary_source = "Microsite";
	$lead_source_detail = "";
	$policycode = "P61619aa641d71";
	$project = "projectname";


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
			],
			[
				"Attribute"=> "gclid",
				"Value"=> $gclid
			]
		]
	];

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://realtyx.totalityre.com/api/leadsapi.php?accesstoken=s1d32f13sdfsdf3sd6f65adsf&accessapikey=s1d32f13sdfsdf3sd6f65adsf",
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

	/* Generate Third Party API Logs */
	generatelogs("thirdpartyapi", $post_fields, $localpath);
	generatelogs("thirdpartyapi", $response, $localpath);

?>