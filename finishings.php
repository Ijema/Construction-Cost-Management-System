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

<form method="post" name="submitform" id="submitform">
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
					<input type="text" class="form-control form-control-sm" name="contract_code" id ="contract_code" value="" />
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
					
				echo '<th colspan="6"><label>Internal and External Walls</label></th>';
				echo '<tr>';
				echo '<th colspan="6"><label>Wall Finishings (Plastering)</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials" type="text" name="materials" value = "Cement" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty" type="number" name="qty" value ="<?php echo isset($qty)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit" type="text" name="unit" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price" type="number" name="unit_price" value ="<?php echo isset($unit_price)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total" name= "total" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials1" type="text" name="materials1" value = "Plaster Sand(10 tyres tipper)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty1" type="number" name="qty1" value ="<?php echo isset($qty1)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit1" type="text" name="unit1" value = "Trip" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price1" type="number" name="unit_price1" value ="<?php echo isset($unit_price1)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total1" name= "total1" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials2" type="text" name="materials2" value = "Labour" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty2" type="number" name="qty2" value ="<?php echo isset($qty2)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit2" type="text" name="unit2" value = "Trip" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price2" type="number" name="unit_price2" value ="<?php echo isset($unit_price2)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total2" name= "total2" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Wall Tiles</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials3" type="text" name="materials3" value = "Cement" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty3" type="number" name="qty3" value ="<?php echo isset($qty3)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit3" type="text" name="unit3" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price3" type="number" name="unit_price3" value ="<?php echo isset($unit_price3)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total3" name= "total" type="number3" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials4" type="text" name="materials4" value = " White Cement" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty4" type="number" name="qty4" value ="<?php echo isset($qty4)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit4" type="text" name="unit4" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price4" type="number" name="unit_price4" value ="<?php echo isset($unit_price4)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total4" name= "total4" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials5" type="text" name="materials5" value = "Gum (Royal)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty5" type="number" name="qty5" value ="<?php echo isset($qty5)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit5" type="text" name="unit5" value = "Gallon" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price5" type="number" name="unit_price5" value ="<?php echo isset($unit_price5)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total5" name= "total5" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials6" type="text" name="materials6" value = "300 x 600mm Wall Tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty6" type="number" name="qty6" value ="<?php echo isset($qty6)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit6" type="text" name="unit6" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price6" type="number" name="unit_price6" value ="<?php echo isset($unit_price6)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total6" name= "total6" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials7" type="text" name="materials7" value = "Labour" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty7" type="number" name="qty7" value ="<?php echo isset($qty7)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit7" type="text" name="unit7" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price7" type="number" name="unit_price7" value ="<?php echo isset($unit_price7)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total7" name= "total7" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Wall Screeding</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials8" type="text" name="materials8" value = "Screeding materials complete" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty8" type="number" name="qty8" value ="<?php echo isset($qty8)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit8" type="text" name="unit8" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price8" type="number" name="unit_price8" value ="<?php echo isset($unit_price8)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total8" name= "total8" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials9" type="text" name="materials9" value = "Labour for screeding" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty9" type="number" name="qty9" value ="<?php echo isset($qty9)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit9" type="text" name="unit9" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price9" type="number" name="unit_price9" value ="<?php echo isset($unit_price9)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total9" name= "total9" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Ceiling Finishings</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials10" type="text" name="materials10" value = "POP (material complete)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty10" type="number" name="qty10" value ="<?php echo isset($qty10)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit10" type="text" name="unit10" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price10" type="number" name="unit_price10" value ="<?php echo isset($unit_price10)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total10" name= "total10" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials11" type="text" name="materials11" value = "POP Labour" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty11" type="number" name="qty11" value ="<?php echo isset($qty11)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit11" type="text" name="unit11" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price11" type="number" name="unit_price11" value ="<?php echo isset($unit_price11)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total11" name= "total11" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Floor Tiles</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials12" type="text" name="materials12" value = "Cement" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty12" type="number" name="qty12" value ="<?php echo isset($qty12)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit12" type="text" name="unit12" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price12" type="number" name="unit_price12" value ="<?php echo isset($unit_price12)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total12" name= "total12" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials13" type="text" name="materials13" value = "Sharp sand (10tyres tipper)" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty13" type="number" name="qty13" value ="<?php echo isset($qty13)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit13" type="text" name="unit13" value = "Trip" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price13" type="number" name="unit_price13" value ="<?php echo isset($unit_price13)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total13" name= "total13" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials14" type="text" name="materials14" value = "Gum Royal" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty14" type="number" name="qty14" value ="<?php echo isset($qty14)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit14" type="text" name="unit14" value = "Gallon" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price14" type="number" name="unit_price14" value ="<?php echo isset($unit_price14)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total14" name= "total14" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials15" type="text" name="materials15" value = "300 x 600mm Nigerian Granite Floor Tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty15" type="number" name="qty15" value ="<?php echo isset($qty15)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit15" type="text" name="unit15" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price15" type="number" name="unit_price15" value ="<?php echo isset($unit_price15)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total15" name= "total15" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials16" type="text" name="materials16" value = "100mm Thick Nigerian Granite Floor Slabs" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty16" type="number" name="qty16" value ="<?php echo isset($qty16)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit16" type="text" name="unit16" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price16" type="number" name="unit_price16" value ="<?php echo isset($unit_price16)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total16" name= "total16" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials17" type="text" name="materials17" value = "600 x600m Nigerian Vitrified Floor Tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty17" type="number" name="qty17" value ="<?php echo isset($qty17)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit17" type="text" name="unit17" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price17" type="number" name="unit_price17" value ="<?php echo isset($unit_price17)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total17" name= "total17" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials18" type="text" name="materials18" value = "400 x 400mm Nigerian unglazed Floor Tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty18" type="number" name="qty18" value ="<?php echo isset($qty18)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit18" type="text" name="unit18" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price18" type="number" name="unit_price18" value ="<?php echo isset($unit_price18)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total18" name= "total18" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				

				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials19" type="text" name="materials19" value = "Labour for laying of tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty19" type="number" name="qty19" value ="<?php echo isset($qty19)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit19" type="text" name="unit19" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price19" type="number" name="unit_price19" value ="<?php echo isset($unit_price19)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total19" name= "total19" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials20" type="text" name="materials20" value = "Labour for laying granite tiles and slabs" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty20" type="number" name="qty20" value ="<?php echo isset($qty20)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit20" type="text" name="unit20" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price20" type="number" name="unit_price20" value ="<?php echo isset($unit_price20)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total20" name= "total20" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials21" type="text" name="materials21" value = "Ditto floor tiles" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty21" type="number" name="qty21" value ="<?php echo isset($qty21)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit21" type="text" name="unit21" value = "mm" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price21" type="number" name="unit_price21" value ="<?php echo isset($unit_price21)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total21" name= "total21" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				
				echo '</table>';
				?>
    
    <div><td> Total Estimate <input id="finishingsresult" name="finishingsresult" type="number" readonly /></td></div>
		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2" name="submit1" form="submitform" style="align:right">Save</button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" style="align:right">Cancel</button>
    		
    </div>
</form>

 <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
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
			
			var qty6 = document.getElementById('qty6').value;
            var unit_price6 = document.getElementById('unit_price6').value;
            var result = parseInt(qty6) * parseInt(unit_price6);
            if (!isNaN(result)) {
                document.getElementById('total6').value = result;
            }
			
			var qty7 = document.getElementById('qty7').value;
            var unit_price7 = document.getElementById('unit_price7').value;
            var result = parseInt(qty7) * parseInt(unit_price7);
            if (!isNaN(result)) {
                document.getElementById('total7').value = result;
            }
			
			var qty8 = document.getElementById('qty8').value;
            var unit_price8 = document.getElementById('unit_price8').value;
            var result = parseInt(qty8) * parseInt(unit_price8);
            if (!isNaN(result)) {
                document.getElementById('total8').value = result;
            }
			
			var qty9 = document.getElementById('qty9').value;
            var unit_price9 = document.getElementById('unit_price9').value;
            var result = parseInt(qty9) * parseInt(unit_price9);
            if (!isNaN(result)) {
                document.getElementById('total9').value = result;
            }
			
			var qty10 = document.getElementById('qty10').value;
            var unit_price10 = document.getElementById('unit_price10').value;
            var result = parseInt(qty10) * parseInt(unit_price10);
            if (!isNaN(result)) {
                document.getElementById('total10').value = result;
            }
			
			var qty11 = document.getElementById('qty11').value;
            var unit_price11 = document.getElementById('unit_price11').value;
            var result = parseInt(qty11) * parseInt(unit_price11);
            if (!isNaN(result)) {
                document.getElementById('total11').value = result;
            }
			
			var qty12 = document.getElementById('qty12').value;
            var unit_price12 = document.getElementById('unit_price12').value;
            var result = parseInt(qty12) * parseInt(unit_price12);
            if (!isNaN(result)) {
                document.getElementById('total12').value = result;
            }
			
			var qty13 = document.getElementById('qty13').value;
            var unit_price13 = document.getElementById('unit_price13').value;
            var result = parseInt(qty13) * parseInt(unit_price13);
            if (!isNaN(result)) {
                document.getElementById('total13').value = result;
            }
			var qty14 = document.getElementById('qty14').value;
            var unit_price14 = document.getElementById('unit_price14').value;
            var result = parseInt(qty14) * parseInt(unit_price14);
            if (!isNaN(result)) {
                document.getElementById('total14').value = result;
            }
			var qty15 = document.getElementById('qty15').value;
            var unit_price15 = document.getElementById('unit_price15').value;
            var result = parseInt(qty15) * parseInt(unit_price15);
            if (!isNaN(result)) {
                document.getElementById('total15').value = result;
            }
			var qty16 = document.getElementById('qty16').value;
            var unit_price16 = document.getElementById('unit_price16').value;
            var result = parseInt(qty16) * parseInt(unit_price16);
            if (!isNaN(result)) {
                document.getElementById('total16').value = result;
            }
			var qty17 = document.getElementById('qty17').value;
            var unit_price17 = document.getElementById('unit_price17').value;
            var result = parseInt(qty17) * parseInt(unit_price17);
            if (!isNaN(result)) {
                document.getElementById('total17').value = result;
            }
			var qty18 = document.getElementById('qty18').value;
            var unit_price18 = document.getElementById('unit_price18').value;
            var result = parseInt(qty18) * parseInt(unit_price18);
            if (!isNaN(result)) {
                document.getElementById('total18').value = result;
            }
			var qty19 = document.getElementById('qty19').value;
            var unit_price19 = document.getElementById('unit_price19').value;
            var result = parseInt(qty19) * parseInt(unit_price19);
            if (!isNaN(result)) {
                document.getElementById('total19').value = result;
            }
			var qty20 = document.getElementById('qty20').value;
            var unit_price20 = document.getElementById('unit_price20').value;
            var result = parseInt(qty20) * parseInt(unit_price20);
            if (!isNaN(result)) {
                document.getElementById('total20').value = result;
            }
			var qty21 = document.getElementById('qty21').value;
            var unit_price21 = document.getElementById('unit_price21').value;
            var result = parseInt(qty21) * parseInt(unit_price21);
            if (!isNaN(result)) {
                document.getElementById('total21').value = result;
            }
		
			
			var total = document.getElementById('total').value;
			var total1 = document.getElementById('total1').value;
            var total2 = document.getElementById('total2').value;
            var total3 = document.getElementById('total3').value;
            var total4 = document.getElementById('total4').value;
            var total5 = document.getElementById('total5').value;
            var total6 = document.getElementById('total6').value;
            var total7 = document.getElementById('total7').value;
            var total8 = document.getElementById('total8').value;
            var total9 = document.getElementById('total9').value;
            var total10 = document.getElementById('total10').value;
            var total11 = document.getElementById('total11').value;
            var total12 = document.getElementById('total12').value;
            var total13 = document.getElementById('total13').value;
            var total14 = document.getElementById('total14').value;
            var total15 = document.getElementById('total15').value;
            var total16 = document.getElementById('total16').value;
            var total17 = document.getElementById('total17').value;
            var total18 = document.getElementById('total18').value;
            var total19 = document.getElementById('total19').value;
            var total20 = document.getElementById('total20').value;
            var total21 = document.getElementById('total21').value;
            
			var result = parseInt(total) + parseInt(total1) + parseInt(total2)+ parseInt(total3)+ parseInt(total4)+ parseInt(total5)+ parseInt(total6) + parseInt(total7)+ parseInt(total8)+ parseInt(total9)+ parseInt(total10)+ parseInt(total11)+ parseInt(total12)+ parseInt(total13) + parseInt(total14)+ parseInt(total15)+ parseInt(total16)+ parseInt(total17)+ parseInt(total18)+ parseInt(total19) + parseInt(total20)+ parseInt(total21);
            
			if (!isNaN(result)) {
				document.submitform.finishingsresult.value = result;
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
    		url:'ajax.php?action=save_finishingsestimate',
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
	
		
function display() {
            window.print();
         }
              
    </script>
</html>