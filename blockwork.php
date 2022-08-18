<?php include 'db_connect.php'; ?>

			<div class="card-tools">
				<button class="btn btn-flat btn-sm bg-gradient-success btn-success print" id="print" onclick="display()"><i class="fa fa-print"></i> Print</button>
			</div>
        

<style>
.print {
  position: absolute;
  right: 20px;
}
</style>
 
<form method="post" name="submitform" id ="submitform">

<?php
if(isset($_POST['submit3'])){

	$_SESSION['$blockworkresult'] = TRUE;
	$_SESSION['blockworkresult']=$_POST['blockworkresult'];
	echo "<script>location.href='estimates.php';</script>";
}
?>
<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Project Name</label>
					<input type="text" id="name" class="form-control form-control-sm" name= "name" value ="">
				</div>
			</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Contract No.</label>
					<input type="text" class="form-control form-control-sm" name="contract_code" id ="contract_code" value="" >
				</div>
			</div>
			</div>
    <div>
	<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<colgroup>
					<col width="2%">
					<col width="35%">
					<col width="15%">
					<col width="15%">
					<col width="20%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr>
						
						<th class="text-center">S/N</th>
						<th>MATERIALS</th>
						<th>QUANTITY</th>
						<th>UNIT</th>
						<th>BASIC PRICE (N)</th>
						<th>AMOUNT (N)</th>
					</tr>
				</thead>
				<tbody>
				<tr>
				<?php
					$i = 1;
				
				echo '<th colspan="6"><label>Hollow Concrete Blocks</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials" type="text" name="materials" value = "6 Block" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty" type="number" name="qty" value ="<?php echo isset($qty)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit" type="text" name="unit" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price" type="number" name="unit_price" value ="<?php echo isset($unit_price)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total" name= "total" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials1" type="text" name="materials1" value = "9 Block" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty1" type="number" name="qty1" value ="<?php echo isset($qty1)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit1" type="text" name="unit1" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price1" type="number" name="unit_price1" value ="<?php echo isset($unit_price1)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total1" name= "total1" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials2" type="text" name="materials2" value = "Sharp Sand(10 tyres tipper)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty2" type="number" name="qty2" value ="<?php echo isset($qty2)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit2" type="text" name="unit2" value = "Trip" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price2" type="number" name="unit_price2" value ="<?php echo isset($unit_price2)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total2" name= "total2" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials3" type="text" name="materials3" value = "Cement" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty3" type="number" name="qty3" value ="<?php echo isset($qty3)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit3" type="text" name="unit3" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price3" type="number" name="unit_price3" value ="<?php echo isset($unit_price3)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total3" name= "total3" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials4" type="text" name="materials4" value = "Labours (Bricklayers)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty4" type="number" name="qty4" value ="<?php echo isset($qty4)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit4" type="text" name="unit4" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price4" type="number" name="unit_price4" value ="<?php echo isset($unit_price4)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total4" name= "total4" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials5" type="text" name="materials5" value = "Labour(for conveyance of blocks upstair)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty5" type="number" name="qty5" value ="<?php echo isset($qty5)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit5" type="text" name="unit5" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price5" type="number" name="unit_price5" value ="<?php echo isset($unit_price5)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total5" name= "total5" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				
				echo '</table>';
				?>
     <div> Total Estimate <input id="blockworkresult" name="blockworkresult" type="number" readonly ></div>   
    <div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2" name="submit1" form="submitform" style="align:right">Save</button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" style="align:right">Cancel</button>
    		
    </div>
</form>


<script type="text/javascript">
       function sum() {
			var qty = document.getElementById('qty').value;
            var unit_price = document.getElementById('unit_price').value;
            var result = parseInt(qty) * parseInt(unit_price);
            if (!isNaN(result)) {
                document.getElementById('total').value = result;
            }
            var qty1 = document.getElementById('qty1').value;
            var unit_price1 = document.getElementById('unit_price1').value;
            var result = parseInt(qty1) * parseInt(unit_price1);
            if (!isNaN(result)) {
                document.getElementById('total1').value = result;
			}	
			var qty2 = document.getElementById('qty2').value;
            var unit_price2 = document.getElementById('unit_price2').value;
            var result = parseInt(qty2) * parseInt(unit_price2);
            if (!isNaN(result)) {
                document.getElementById('total2').value = result;
            }
			
			var qty3 = document.getElementById('qty3').value;
            var unit_price3 = document.getElementById('unit_price3').value;
            var result = parseInt(qty3) * parseInt(unit_price3);
            if (!isNaN(result)) {
                document.getElementById('total3').value = result;
            }
			
			var qty4 = document.getElementById('qty4').value;
            var unit_price4 = document.getElementById('unit_price4').value;
            var result = parseInt(qty4) * parseInt(unit_price4);
            if (!isNaN(result)) {
                document.getElementById('total4').value = result;
            }
			
			var qty5 = document.getElementById('qty5').value;
            var unit_price5 = document.getElementById('unit_price5').value;
            var result = parseInt(qty5) * parseInt(unit_price5);
            if (!isNaN(result)) {
                document.getElementById('total5').value = result;
            }
			
		
			var total = document.getElementById('total').value;
			var total1 = document.getElementById('total1').value;
            var total2 = document.getElementById('total2').value;
            var total3 = document.getElementById('total3').value;
            var total4 = document.getElementById('total4').value;
            var total5 = document.getElementById('total5').value;
           
            
			var result = parseInt(total) + parseInt(total1) + parseInt(total2)+ parseInt(total3)+ parseInt(total4)+ parseInt(total5);
            
			if (!isNaN(result)) {
				document.getElementById("blockworkresult").value = result ;
			
			}
		}
		
	var name = sessionStorage.getItem("names");
document.getElementById("name").value = name ;
var contract_code = sessionStorage.getItem("contract_codes");
document.getElementById("contract_code").value = contract_code ;

 $('#submitform').submit(function(e){
    	e.preventDefault()
    	start_load()
    	$.ajax({
    		url:'ajax.php?action=save_thirdestimate',
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
						history.back()
					},1500)
				}
			}
    	})
    })
    
    </script>
</html>