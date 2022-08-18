<?php 

if(isset($_POST['submit1']) || $_POST['submit2'] || $_POST['submit3']){


	$_SESSION['substructureresult']=$_POST['substructureresult'];
	$_SESSION['concreteworkresult']=$_POST['concreteworkresult'];
	$_SESSION['blockworkresult']=$_POST['blockworkresult'];
	
	
	header('location:estimates.php');
	
	
}

?>