<?php 
date_default_timezone_set('Africa/Lagos');
session_start();

$dbServername ='localhost';
$dbUsername="root";
$dbPassword="";
$database = 'AttrotechDb';

 $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$database);

 // Contact form 

		$client_name_error = ""; $client_email_error = " "; $client_subject_error = ""; $message_error = "";
		$form_error_array  = array();
	$client_name = " "; $client_email = " "; $client_subject= " ";$message = " ";
	$attrotechEmail = " ";
	// TRIMMING , REMOVING SLASHES , SPECIAL CHARACTERS
function validate_input($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

if (isset($_POST['ContactUS'])) {
$client_name = $_POST['client_name'];
$client_email = $_POST['client_email'];
$client_subject = $_POST['client_subject'];
$message= $_POST['message'];

// form validation
if (empty($client_name)) {
	$client_name_error = 'Name is required';
	array_push($form_error_array, $client_name_error);
}
if (empty($client_email)) {
	$client_email_error = 'Email is required';
	array_push($form_error_array, $client_email_error);
}
if (!empty($client_email)) {
	if (!filter_var($client_email,FILTER_VALIDATE_EMAIL)) {
		$client_email_error = 'Invalid Email address';
	array_push($form_error_array, $client_email_error);

	}
}
if (empty($client_subject)) {
	$client_subject_error = 'Message Subject is required';
	array_push($form_error_array, $client_subject_error);
}

if (empty($message)) {
	$message_error = 'Enter your Message';
	array_push($form_error_array, $message_error);
}


if (count($form_error_array) == 0) {
	
	$client_name = validate_input($client_name);
	$client_email = validate_input($client_email);
	$client_subject = validate_input($client_subject);
	$message = validate_input($message);

//insert details into Db table
$InsertQuery="INSERT INTO Custormer_contacts"




	$attrotechEmail = "attrotech@gmail.com";

	$message_body = "Name: ".$client_name."\n";
	$message_body .= "Email: ".$client_email."\n";
	$message_body .= "Message Subject: ".$client_subject."\n";
	$message_body .= "Message: ".$message."\n";
   mail($attrotechEmail, $client_subject, $message_body);
   		header('location:index.php');
   	echo "<script> alert('Message Succefully Sent!');";

}




}