<?php

// Get the user id
$name = $_REQUEST['name'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "tms_db");

if ($name !== "") {
	
	// Get corresponding contract code and
	$query = mysqli_query($con, "SELECT contract_code,
	FROM estimates WHERE name='$name'");

	$row = mysqli_fetch_array($query);

	// Get the Contract Code
	$contract_code = $row["contract_code"];

}

// Store it in a array
$result = array("$contract_code");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
