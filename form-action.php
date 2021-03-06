<?php 

if ( isset($_POST['submit']) ) {

	function sanitizeInput($myInput) {
		$myInput = trim($myInput);
		$myInput = strip_tags($myInput);
		return $myInput;
	}
	
	$expected = array('name','email','commission','deadline','specs');
	
	$required = array(
		'name' => 'You must enter a name.',
		'email' => 'You must enter an email.',
		// 'noGuarantee' => 'Please agree to the terms.'
 	);
	
	$errors = array();

	foreach ($expected as $value) {
		
		if ( !isset($_POST["$value"]) ) {
			$_POST["$value"] = array();
		}
		
		if ( is_array($_POST["$value"]) ) {
			${$value} = array();
			foreach ($_POST["$value"] as $subValue) {
				${$value}[] = sanitizeInput($subValue);
			}
		}
		else {
			${$value} = sanitizeInput($_POST["$value"]);
		}
	}
		
	foreach ($required as $key => $value) {
		if (empty(${$key}))  {
			$errors[$key] = $value;
		}
	}
						
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = "That email is not valid.";
		}
	
	if (empty($errors)) {
		require_once('form-send-email.php');
		require_once('thankyou.html');
	}
	else {
		require_once('form-error.php');
	}
	
}

?>