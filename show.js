<script>
$(document).ready(function(){
	load_images();
	function load_images(){
		$.ajax({
			url:"fetch_images.php",
			success:function(data){
				$('#images_list').html(data);
			}
		});
	
	}
	}
$(document).ready(function(){
		$('#upload_multiple_images').on('submit', function(event){
			event.preventDefault();
			var image_name =$('#image').val();
			if(image_name == ''){
				alert("Please Select Pictures");
				return false;
			} else{
				$.ajax({
					url:"insert.php",
					method:"POST",
					data: new FormData(this),
					contenetType:false,
					processData:false,
					success:function(data)
					{
						$('#image').val('');
						load_images();
					}
				});
			}
		});
	});
			
</script>