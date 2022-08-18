<?php 
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM project_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
$manager = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users where id = $manager_id");
$manager = $manager->num_rows > 0 ? $manager->fetch_array() : array();
?>
<form action="" method="POST">
<div class="col-lg-12">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-outline card-primary">
				<div class="card">
					<div class="card-body">
						<div class="col-sm-6">
							<dt><b class="border-bottom border-primary">Contract</b></dt>
								<dd><?php echo ucwords($name) ?></dd>
								<?php
									if(isset($name)){

										$_SESSION['$name'] = TRUE;
										$_SESSION['$name']=$name;
									}
									?>
								<dt><b class="border-bottom border-primary">Contract No.</b></dt>
								<dd><?php echo html_entity_decode($contract_code) ?></dd>
								<?php
									if(isset($contract_code)){

										$_SESSION['$contract_code'] = TRUE;
										$_SESSION['$contract_code']=$contract_code;
									}
									?>
								<dt><b class="border-bottom border-primary">Contract Location</b></dt>
								<dd><?php echo html_entity_decode($location) ?></dd>
								<dt><b class="border-bottom border-primary">Description</b></dt>
								<dd><?php echo html_entity_decode($description) ?></dd>
								<dt><b class="border-bottom border-primary">Contract Sum</b></dt>
								<?php if($_SESSION['login_type'] == "Admin"): ?>
								<dd><?php echo "₦"; echo html_entity_decode(number_format($estimates)) ?></dd>
								<dt><b class="border-bottom border-primary">Amount Used So Far</b></dt>
								<dd><?php 
								$sql = $conn->query("SELECT sum(total) from excavation_of_trenches WHERE name = '$name' ");
								while($row = mysqli_fetch_array($sql)){
								echo "₦"; echo number_format($row['sum(total)']);?>
								</dd>
								<dt><b class="border-bottom border-primary">Total Amount Left</b></dt>
								<dd><?php 
								$amt_used_so_far=$row['sum(total)'];
								$amt_left = number_format($estimates-$amt_used_so_far);
								echo "₦"; echo $amt_left;?>
								<?php } ?></dd>
								<?php endif ?>
								<dt><b class="border-bottom border-primary">Category</b></dt>
								<dd><?php echo $type;?></dd>
							</dl>
						</div>
						<div class="col-md-6">
						<dl>
							<dt><b class="border-bottom border-primary">Source of Fund</b></dt>
							<dd><?php echo $source_of_fund ?></dd>
							<dt><b class="border-bottom border-primary">Commencement Date</b></dt>
							<dd><?php echo date("F d, Y",strtotime($start_date)) ?></dd>
							<dt><b class="border-bottom border-primary">Completion Date</b></dt>
							<dd><?php echo date("F d, Y",strtotime($end_date)) ?></dd>
							<?php
								$date1 = strtotime($start_date);
								$date2 = strtotime($end_date);
								$daysleft = $date2-$date1;
								$percentage = round((($daysleft/24)/60)/60);
							?>
							<dt><b class="border-bottom border-primary">Contract Period</b></dt>
							<dd><div style="width: <?php echo $percentage; ?>%;"><span><?php echo round($percentage,2); ?>days</span></div></dd>
							<?php
							$date1 = strtotime($start_date);
							$date2 = strtotime($end_date);
							$today = time();

							if ($today < $date1) {
								$percentage = "error";
							} elseif ($today > $date1) {
								$daysleft = $date2-$today;
								$percentage = round((($daysleft/24)/60)/60);
							} 
							?>
							<dt><b class="border-bottom border-primary">Days Left</b></dt>
							<dd><div style="width: <?php echo $percentage; ?>%;"><span><?php echo round($percentage,2); ?>days left</span></div></dd>
							<dt><b class="border-bottom border-primary">Contract/Project Manager</b></dt>
							<dd>
									<?php if(isset($manager['id'])) : ?>
									<div class="d-flex align-items-center mt-1">
										<img class="img-circle img-thumbnail p-0 shadow-sm border-info img-sm mr-3" src="assets/uploads/<?php echo $manager['avatar'] ?>" alt="Avatar">
										<b><?php echo ucwords($manager['name']) ?></b>
									</div>
									<?php else: ?>
										<small><i>Manager Deleted from Database</i></small>
									<?php endif; ?>
							</dd>
						</dl>
						</div>
						<div class="col-sm-6">
						<dl>
							<dt><b class="border-bottom border-primary">View Photos</b></dt>
							<dd><button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="image_upload"><i class="fa fa-plus"></i> View Photos</button>
						</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<div class="col-lg-12">
		<div class="row">
		<div class="col-md-12">
		<div class="card card-outline card-primary">
			<div class="card">
				<div class="card-header">
					<span><b>Team Member/s:</b></span>
					<div class="card-tools">
						<!-- <button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="manage_team">Manage</button> -->
					</div>
				</div>
				<div class="card-body">
					<ul class="users-list clearfix">
						<?php 
						if(!empty($user_ids)):
							$members = $conn->query("SELECT *,concat(firstname,' ',lastname,' (',type,')') as name FROM users where id in ($user_ids) order by concat(firstname,' ',lastname) asc");
							while($row=$members->fetch_assoc()):
						?>
								<li>
			                        <img src="assets/uploads/<?php echo $row['avatar'] ?>" alt="User Image">
			                        <a href="javascript:void(0)"><?php echo ucwords($row['name']) ?></a>
			                        <!-- <span class="users-list-date">Today</span> -->
		                    	</li>
						<?php 
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="col-lg-12">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-outline card-primary">
				<div class="card">
					<div class="card-header">
					<span><b>Project Report List:</b></span>
				</div>
				<div class="card-header">
					<span><b>Substructure Report:</b></span>
					<div class="card-tools">
						<button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="new_substructure_report"><i class="fa fa-plus"></i> New Report</button>
					</div>
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
					<table class="table table-condensed m-0 table-hover">
						<colgroup>
							<col width="5%">
							<col width="15%">
							<col width="5%">
							<col width="5%">
							<col width="10%">
							<col width="15%">
							<col width="10%">
							<col width="25%">
							<col width="15%">
						</colgroup>
						<thead>
							<th style="text-align:center">#</th>
							<th style="text-align:center">Materials</th>
							<th style="text-align:center">Qty</th>
							<th style="text-align:center">Unit</th>
							<th style="text-align:center">Unit Price(₦)</th>
							<th style="text-align:center">Total(₦)</th>
							<th style="text-align:center">Team Member</th>
							<th>Report</th>
							<th style="text-align:center">Action</th>
							
						</thead>
						<tbody>
							<?php 
							$i = 1;
							$tasks = $conn->query("SELECT * FROM task_list where id = {$id} order by task asc");
							while($row=$tasks->fetch_assoc()):
								$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
								unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
								$desc = strtr(html_entity_decode($row['description']),$trans);
								$desc=str_replace(array("<li>","</li>"), array("",", "), $desc);
							?>
								<tr>
			                        <td class="text-center"><?php echo $i++ ?></td>
			                        <td class=""><b><?php echo ucwords($row['task']) ?></b></td>
									<td class=""><?php echo ucwords($row['team_member']) ?></b>
									</td>
			                        <td class=""><p class="truncate"><?php echo strip_tags($desc) ?></p></td>
			                        <td>
			                        	<?php 
			                        	if($row['status'] == 1){
									  		echo "<span class='badge badge-secondary'>Pending</span>";
			                        	}elseif($row['status'] == 2){
									  		echo "<span class='badge badge-primary'>On-Progress</span>";
			                        	}elseif($row['status'] == 3){
									  		echo "<span class='badge badge-success'>Done</span>";
			                        	}
			                        	?>
			                        </td>
			                        <td class="text-center">
										<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					                     Action
					                    </button>
					                    <div class="dropdown-menu" style="">
					                      <a class="dropdown-item view_task" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"  data-task="<?php echo $row['task'] ?>">View</a>
					                      <div class="dropdown-divider"></div>
					                      <?php if($_SESSION['login_type'] != 3): ?>
					                      <a class="dropdown-item edit_task" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"  data-task="<?php echo $row['task'] ?>">Edit</a>
					                      <div class="dropdown-divider"></div>
					                      <a class="dropdown-item delete_task" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
											<?php endif; ?>
										</div>
									</td>
		                    	</tr>
									<?php 
									endwhile;
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
</form>
<script>
	$('#new_substructure_report').click(function(){
		uni_modal("New Substructure Report For <?php echo ucwords($name) ?>","manage_substructure.php?pid=<?php echo $id ?>", "mid-large")
	})
	$('.edit_task').click(function(){
		uni_modal("Edit Task: "+$(this).attr('data-task'),"manage_task.php?pid=<?php echo $id ?>&id="+$(this).attr('data-id'),"mid-large")
	})
	$('.view_task').click(function(){
		uni_modal("Task Details","view_task.php?id="+$(this).attr('data-id'),"mid-large")
	})
	$('#new_productivity').click(function(){
		uni_modal("<i class='fa fa-plus'></i> New Progress","manage_progress.php?pid=<?php echo $id ?>",'large')
	})
	$('.manage_progress').click(function(){
		uni_modal("<i class='fa fa-edit'></i> Edit Progress","manage_progress.php?pid=<?php echo $id ?>&id="+$(this).attr('data-id'),'large')
	})
	$('.delete_progress').click(function(){
	_conf("Are you sure to delete this progress?","delete_progress",[$(this).attr('data-id')])
	})
	function delete_progress($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_progress',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
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
	})
</script>