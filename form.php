<?php
$conn = mysqli_connect('localhost','root','','tms_db');
if($conn){
	echo 'connection_failed';
}
if(isset($_POST['submit'])){
	$imageCount = count($_FILES['image']['name']);
	for($i=0;$i<$imageCount;$i++){
		$imageName=$_FILES['image']['name'][$i];
		$imageTempName = $_FILES['image']['tmp_name'][$i];
		$targetPath = "./images/".$imageName;
		if(move_uploaded_file($imageTempName, $targetPath)){
			$sql = "INSERT INTO images(images)VALUES('$imageName')";
			$result=$conn->query($sql);
		}
	}
	if($result){
		header('location:form.php?msg=ins');
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multiple Image Uploading in Php</title>
	<style type="text/css">
		.formdesign{
			width:50%;
			margin:auto;
			padding:20px 15px;
			background-color: #e91e63;
		}
	</style>
	</head>
  <body>
      <h2 align="center">Multiple Image Uploading in Php with Mysql</h2>
	  <?php
	  if(isset($_GET['msg']) AND $_GET['msg'] =='ins'){
		  echo'<h4 align=center>Images Uploaded Succesfully...!!</h4>';
	  }
	 ?>
	 <div class="formdesign">
		<form action="form.php" method="POST" enctype="multipart/form-data">
		Please Select Image<br><br>
		<input type="file" name="image[]" multiple ><br><br>
		<input type="submit" name="submit" value="Upload">
		</form><br>
	<?php
		$sql="SELECT * FROM images";
		$result=$conn->query($sql);
		if($result->num_rows >0){
		while($row = $result->fetch_assoc()) { 
		?>
		<img src="images/<?php echo $row['image']; ?>" width=100 height=100>
		<?php
		}
	}
?>	
		
	
    </div>
  </body>
</html>