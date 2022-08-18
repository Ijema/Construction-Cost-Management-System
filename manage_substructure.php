<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM substructure_report where name = '".$name."' ")->fetch_array();
foreach($qry as $k => $v){
	$data .= ", $k='$v' ";
}
include 'substructure.php';
?>