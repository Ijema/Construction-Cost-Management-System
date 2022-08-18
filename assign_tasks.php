<?php 
include 'db_connect.php';
// THIS QUERY FETCHES ALL THE USERS FROM THE DATABASE EXCEPT FOR THE ADMIN
$employees = $conn->query("SELECT *,concat(firstname,' ',lastname,' ','(',type,')') as name FROM users where type IN ('Architecture', 'Quantity Surveyor','Mechanical Engineer','Electrical Engineer','Mason','Interior Designer') order by concat(firstname,' ',lastname) desc ");
// THIS QUERY ENDS HERE
?>
<div class="container-fluid">
	<form action="" method="post" id="manage-task">
	<?php
	echo"<div class=\"form-group\">";
		echo"<label>Project Name</label>";
			echo"<input type=\"text\" class=\"form-control form-control-sm\" id=\"name\" name=\"name\" value=\"\" onkeyup=\"GetDetail(this.value)\" >";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label>Project Code</label>";
			echo"<input type=\"text\" class=\"form-control form-control-sm\" id=\"contract_code\" name=\"contract_code\" value=\"\" readonly>";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label for=\"\">Task</label>";
			echo"<input type=\"text\" class=\"form-control form-control-sm\" name=\"task\" value=\" {$tasks}\" required>";
		echo"</div>";
		echo"<div class=\"form-group\">";
              echo"<label for=\"\">Project Team Member</label>";
	   		  echo"<input type=\"text\" class=\"form-control form-control-sm\" name=\"team_member\" value=\"{$_SESSION['login_name']}( {$_SESSION['login_type'] } )\" readonly />";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label>Assign Team Member</label>";
			echo"<select class=\"form-control form-control-sm select2\" multiple=\"multiple\" name=\"user_ids[]\">";
				echo"<options></options>";
				echo"<php";
				echo"while($row=$employees->fetch_assoc()):";
				echo"?>";
				echo"<option value=\"{$row[\"id\"] }\" {isset($user_ids) && in_array($row[\"id\"],
				explode(',',$user_ids)) ? "selected" : '' }<?php echo ucwords($row['name']) ?></option>";
              	echo"<?php endwhile; ?>";
			echo"</select>";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label for=\"\">Report</label>";
			echo"<textarea name=\"description\"  cols=\"30\" rows=\"10\" class=\"summernote form-control\">";
				echo"<?php echo isset($description) ? $description : '' ?>";
			echo"</textarea>";
		echo"</div>";
		echo"<div class=\"form-group\">";
		   echo"<label for=\"\" class=\"control-label\">Start Date</label>";
			echo"<input type=\"date\" class=\"form-control form-control-sm\"  name=\"start_date\" value=\"{$start_date}\">";
		echo"</div>";
		echo"<div class=\"form-group\">";
		   echo"<label for=\"\" class=\"control-label\">End Date</label>";
			echo"<input type=\"date\" class=\"form-control form-control-sm\" name=\"end_date\" value=\"{$end_date}\">";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label for=\"\">Amount Spent</label>";
			echo"<input type=\"number\" class=\"form-control form-control-sm\" name=\"amt_used\" value=\"{amt_used}\" required>";
		echo"</div>";
		echo"<div class=\"form-group\">";
			echo"<label>Pictures</label>";
			echo"<br />";
		?>
			<form method="post" id="upload_multiple_images enctype="multipart/form-data">
				<input type="file" name="image[]" id ="image" multiple accept=".jpg, .png, .gif" />
				<br />
				<input type="submit" name="insert" id ="insert"  value ="Submit" class = "btn btn-info" />	
			
		</div>
	</form>
	<br />
	</form>
</div>

<script>
	$(document).ready(function(){

	$('.summernote').summernote({
        height: 200,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })
     })
	 
	 // onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("contract_code").value = "";
				return;
			}
			else {

				// Creates a new XMLHttpRequest object
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {

					// Defines a function to be called when
					// the readyState property changes
					if (this.readyState == 4 &&
							this.status == 200) {
						
						// Typical action to be performed
						// when the document is ready
						var myObj = JSON.parse(this.responseText);

						// Returns the response data as a
						// string and store this array in
						// a variable assign the value
						// received to contract_code input field
						
						document.getElementById
							("contract_code").value = myObj[0];
						
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "search.php?name=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
    
    $('#manage-task').submit(function(e){
    	e.preventDefault()
    	start_load()
    	$.ajax({
    		url:'ajax.php?action=save_task',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.href='index.php?page=task_list'
					},1500)
				}
			}
    	})
    })
	
	
			
</script>