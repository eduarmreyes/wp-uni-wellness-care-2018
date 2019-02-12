<?php
	function http_parse_headers ($raw) {
		$res = [];
		foreach (explode("\n", $raw) as $h) {
			$h = explode(':', $h, 2);
			$first = @trim($h[0]);
			$last = @trim($h[1]);
			
			if (array_key_exists($first, $res)) {
				$res[$first] .= ", " . $last;
			} else
			if (isset($h[1])) {
				$res[$first] = $last;
			} else {
				$res[] = $first;
			}
		}
		return $res;
	}

	
	function remote_post($url, $data){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($s, CURLOPT_TIMEOUT,0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json',
			'Content-Length: ' . strlen($data)
		));
			
		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$result = curl_exec($ch);

		$response['response_code'] = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
		$response['body'] = $result;
		return $response;
	}

	function subscribe($opts, $email, $fname, $lname, $title, $company, $phone_number) {
    $api_key     = $opts['api_key'];
    $tags_key    = $opts['tags_key'];
    $api_url     = "https://api.hatchbuck.com/api/v1/contact/";

		$data = array( 'emails' => array(array('address' => $email,'type'  => 'Work')),'status' => array('name' => 'Lead'));	
    if(!empty($fname)) $data['firstName'] = $fname;
		if(!empty($lname)) $data['lastName'] = $lname;
		if(!empty($title)) $data['title'] = $title;
		if(!empty($company)) $data['company'] = $company;
		$data['phones'] = array("number" => "(239) 628-9209");
		$data = json_encode($data);

    try {
      $result = remote_post($api_url . '?api_key='. $api_key, 
        $data                         
			);
		}
    catch (Exception $e) {
      return "Server error.";
    }
        
    if ($result['response_code'] == 200) {
			$result = json_decode($result['body']);
			$contactId  = $result->contactId;
      try {
        $info = json_encode($tags_key);

        $result = remote_post(                            
          $api_url . $contactId . '/tags?api_key='. $api_key, 
          $info                 
        );
      }
      catch (Exception $e) {
        return "Server error.";
      }
			if ($result['response_code'] == 201) {
				return 1;
			} else {
				return "Fail to add tag.";
			}

		} else
		if ($result['response_code'] == 401)            {
			return "Invalid API Key";
		} else
		if ($result['response_code'] == 400)            {
			$result = json_decode($result['body']);
      return $result->Message;
		}

		return "Invalid response from server";
	}

	$api_key = "ajFBejUxX1ZCTE1BYjVQNi1UemwtaUxxU0g1YnFoa3JZaEFEdUJLUThUWTE1";
	$tags_key = array(
		array('id' => "Sm9meEpLbUt2U0ZIczhVZ3B6U21FeDdBMGlKUkZ4MlAwdHo4aUJ2alVWMDE1"), // UWC_emaillist
	);
	if ($_POST["contact"]) {
		array_push($tags_key, array('id' => "azJ6bTRxZGxEbDZsMzZfcGxZNC1RM3Bic095dlVpYWtIRXZBR1hudWp3TTE1")); // UniW_Demo
	}
  $api_url = 'https://api.hatchbuck.com/api/v1/contact/';
	$opts['api_key']    = $api_key;
	$opts['tags_key']    = $tags_key;
	$phone_number = $_POST["phone_number"];
	// if ($phone_number) {
	// 	$numbers = explode("\n", $_POST["phone_number"]);

	// 	foreach($numbers as $number) {
	// 		$phone_number = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $number);
	// 	}
	// }
	$result = subscribe(
		$opts,
		$_POST["email"],
		$_POST["first_name"],
		$_POST["last_name"],
		$_POST["title"],
		$_POST["company"],
		$phone_number
	); // Return 1 if everything successfull

	if ($result == 1) { 
		if ($data)  print "<p class='hatchbuck_info'>" .$data['hb_thank_you'] . "</p>";
		else print "<p class='hatchbuck_info'>Thank for subscribing." . "</p>";
	}
	else {
			print "<p class='hatchbuck_error'>" . $result . "</p>";
	}
?>