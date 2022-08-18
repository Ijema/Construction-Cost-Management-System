<?php 
include 'db_connect2.php';

header('Content-type: application/json; charset=utf-8');

if(isset($_POST['id'])){
$json = array();
$id =  trim($_POST['id']);
$query = "SELECT id, FirstName, LastName FROM student WHERE id = ?";
$statement = $databaseConnection->prepare($query);
$statement->bind_param('s', $id);
$statement->execute();
$statement->bind_result($nId, $nFirstName, $nLastName);
while ($statement->fetch()){
   $user=array('id'=>$nId,'FirstName'=>$nFirstName,'LastName'=>$nLastName);
    array_push($json,$user);
}
echo json_encode($json, true);

 }
 ?>