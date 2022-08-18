<?php

// Get the user id
$name = $_REQUEST['name'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "tms_db");

if ($name !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT contract_code,
	estimates FROM estimates WHERE name='$name'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$contract_code = $row["contract_code"];

	// Get the first name
	$estimates = $row["estimates"];
}

// Store it in a array
$result = array("$contract_code", "$estimates");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
