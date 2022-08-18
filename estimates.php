<?php include 'db_connect.php'; ?>

          <div class="card-header">	<span><b>Project Estimation</b></span></div>
		
<style>
.print {
  position: absolute;
  right: 20px;
}
</style>
<form method="post" name="submitform" id="manage_estimates">
<?php
if(isset($_SESSION['concreteworkresult'])){
		$concretework = $_SESSION['concreteworkresult'];
}



?>
<div class="card">
<div class="col-lg-12">
		<div class="card-body">
			<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Project Name</label>
					<input type="text" class="form-control form-control-sm" name="name" id="name" value="">
					
				</div>
			</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Contract No.</label>
					<input type="text" class="form-control form-control-sm" name="contract_code" id ="contract_code" value="" onkeyup="getheader()">
				</div>
			</div>
		</div>
    			<div class="card-body p-0">
				<div class="table-responsive">
					<table class="table table-condensed m-0 table-hover">
						<colgroup>
							<col width="0.01">
							<col width="40%">
							<col width="40%">
						</colgroup>
						<thead>
							<th style="text-align:center">S/N</th>
							<th>Work Description and Scope of Works</th>
							<th>Total Cost</th>
						</thead>
						<tbody>
							<?php 
							$i = 1;
							
									
							
							echo "<tr>";
								echo "<td colspan=\"3\"><div class='card'>";
								echo "<div class=\"card-header\">";
								echo "<span><b>Substructure</b></span>";
								echo "<div class='card-tools'>";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=substructure\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div>";
								echo "</div>";
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
			                        echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
			                        echo "<td><b><label>Substructure</label></b></td>";
									echo "<td><b><input id=\"substructure\" name=\"substructure\" type=\"number\" value=\"{$_SESSION['substructureresult']}\" onchange=\"sum()\" /></b></td>
							</tr>";
							echo "<tr>";
							echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Concrete Work</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=concretework\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Concrete Work</label></b></td>";
									echo "<td><b><input id=\"concretework\" name=\"concretework\" type=\"number\" value=\"{$concretework}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Block Work</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=blockwork\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Block Work</label></b></td>";
									echo "<td><b><input id=\"blockwork\" name =\"blockwork\" type=\"number\" value=\"{$_SESSION['blockworkresult']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Roofing</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=roofing\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Roofing</label></b></td>";
									echo "<td><b><input id=\"roofing\" name=\"roofing\" type=\"number\" value=\"{$_SESSION['roofingresult']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Windows</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=windows\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Windows</label></b></td>";
									echo "<td><b><input id=\"windows\" name=\"windows\" type=\"number\" value=\"{$_SESSION['windowsresult']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Doors</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=doors\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Doors</label></b></td>";
									echo "<td><b><input id=\"doors\" name=\"doors\" type=\"number\"  value=\"{$_SESSION['doorsresult']}\" onchange=\"sum()\" onchange=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Fittings And Fixtures</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=fittings_fixtures\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Fittings And Fixtures</label></b></td>";
									echo "<td><b><input id=\"fittings_fixtures\" name=\"fittings_fixtures\" type=\"number\" value=\"{$_SESSION['fittings_fixtures_result']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Metal Work</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=metal_works\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Metal Work</label></b></td>";
									echo "<td><b><input id=\"metal_works\" name=\"metal_works\" type=\"number\" value=\"{$_SESSION["metal_works_result"]}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Finishings</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=finishings\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Finishings</label></b></td>";
									echo "<td><b><input id=\"finishings\" name=\"finishings\" type=\"number\" value=\"{$_SESSION['finishingsresult']}\" onchange=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Paintings And Decorations</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=paintings_decorations\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Paintings And Decorations</label></b></td>";
									echo "<td><b><input id=\"paintings_decorations\" name=\"paintings_decorations\" type=\"number\" value=\"{$_SESSION['paintings_decorations_result']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Mechanical Services</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=mechanical_services\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Mechanical Services</label></b></td>";
									echo "<td><b><input id=\"mechanical_services\" name=\"mechanical_services\" type=\"number\" value=\"{$_SESSION['mechanical_services_result']}\" onchange=\"sum()\"  /></b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b>Electrical Services</b></span>";
								echo "<div class=\"card-tools\">";
									echo "<a class=\"btn btn-primary bg-gradient-primary btn-sm\" type=\"button\" href=\"./index.php?page=electrical_services\"><i class=\"fa fa-plus\"></i> Estimate</a>";
								echo "</div>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"><?php echo $i++ ?></td>";
									echo "<td><b><label>Electrical Services</label></b></td>";
									echo "<td><b><input id=\"electrical_services\" name=\"electrical_services\" type=\"number\" value=\"{$_SESSION['electrical_services_result']}\" onchange=\"sum()\"  /></b></td>";							
									echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><div class=\"card-header\">";
								echo "<span><b></b></span>";
								echo "</div></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">Site Clearing</label></b></td>";
									echo "<td><b><input id=\"site_clearing\" name=\"site_clearing\" type=\"number\" onchange=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">Total Estimated Direct Cost</label></b></td>";
									echo "<td><b><input id=\"estimates\" name=\"estimates\" type=\"number\" value=\"{}\" onchange=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">OCM(Overhead, Contigencies and Miscellaneous  Expenses)</label></b></td>";
									echo "<td><b><input id=\"contigency\" name=\"contigency\" type=\"number\" onkeyup=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">Profit</label></b></td>";
									echo "<td><b><input id=\"profit\" name=\"profit\" type=\"number\"  onkeyup=\"sum()\"/></b></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">Vat</label></b></td>";
									echo "<td><b><input id=\"vat\" name=\"vat\" type=\"number\"  onchange=\"sum()\" /></b></td>";
							echo "</tr>";
							echo "<tr>";
									echo "<td class=\"text-center\"></td>";
									echo "<td><b><label style=\"text-align:right\" class=\"control-label\" id=\"label\">Total Estimates</label></b></td>";
									echo "<td><b><input id=\"total_estimates\" name=\"total_estimates\" type=\"number\" value=\"<?php {$total_estimates}\" /></b></td>";
							echo "</tr>";
			echo "</tbody>";
					echo "</table>";
					?>
				</div>
			</div>
</form>

	  <div>&nbsp;</div>
   
				<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage_estimates" style="align:right">Submit</button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='#'" style="align:right">Cancel</button>
    		
				</div>	
									
				
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
		function sum(){
			var textresult1 = document.getElementById('substructure').value;
            var textresult2 = document.getElementById('concretework').value;
            var textresult3 = document.getElementById('blockwork').value;
            var textresult4 = document.getElementById('roofing').value;
            var textresult5 = document.getElementById('windows').value;
            var textresult6 = document.getElementById('doors').value;
            var textresult7 = document.getElementById('fittings_fixtures').value;
			var textresult8 = document.getElementById('metal_works').value;
            var textresult9 = document.getElementById('finishings').value;
            var textresult10 = document.getElementById('paintings_decorations').value;
            var textresult11 = document.getElementById('mechanical_services').value;
            var textresult12 = document.getElementById('electrical_services').value;
            var textresult13 = document.getElementById('site_clearing').value;

                      
			var result = parseInt(textresult1) + parseInt(textresult2)+ parseInt(textresult3)+ parseInt(textresult4)+ parseInt(textresult5)+ parseInt(textresult6)+ parseInt(textresult7)+ parseInt(textresult8)+ parseInt(textresult9)+ parseInt(textresult10)+ parseInt(textresult11)+ parseInt(textresult12) + parseInt(textresult13);
			
			
            
			if (!isNaN(result)) {
				document.submitform.estimates.value = result;
			}
			<!-- CHECK FOR VAT -->
			if(result > 2000000){
				document.submitform.vat.value=9000;
			} else {
				document.submitform.vat.value=4000;
			}
			<!-- END CHECK FOR VAT -->
			
			
		
			var textresult13 = document.getElementById('profit').value;
            var textresult14 = document.getElementById('contigency').value;
            var textresult15 = document.getElementById('vat').value;
			
			var result1 = result + parseInt(textresult13)+ parseInt(textresult14)+ parseInt(textresult15);
			
			if (!isNaN(result)) {
				document.submitform.total_estimates.value = result1;
				
			}
		}
		function getheader(){
			var name = document.getElementById('name').value;
			var contract_code= document.getElementById('contract_code').value;
			var estimates=document.getElementById('estimates').value;
			sessionStorage.setItem("names", name);
			document.getElementById('name').value = sessionStorage.getItem("names");
			sessionStorage.setItem("contract_codes", contract_code);
			document.getElementById('contract_code').value = sessionStorage.getItem("contract_codes");
			
			
		}
 $('#manage_estimates').submit(function(e){
    	e.preventDefault()
    	start_load()
    	$.ajax({
    		url:'ajax.php?action=save_estimate',
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
						location.reload()
					},1500)
					
				}else{
						alert_toast('Data not successfully saved',"success");
						setTimeout(function(){
						location.reload()
					},1500)
					}
			}
    	})
    })

 
</script>
