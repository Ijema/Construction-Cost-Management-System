<?php 

// Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_host = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$clear_db = substr($cleardb_url["path"], 1);

$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn= new mysqli($cleardb_host, $cleardb_username,$cleardb_password,$cleardb_db)or die("Could not connect to mysql".mysqli_error($conn));
