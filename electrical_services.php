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
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials" type="text" name="materials" value = "pipping and pipping fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty" type="number" name="qty" value ="<?php echo isset($qty)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit" type="text" name="unit" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price" type="number" name="unit_price" value ="<?php echo isset($unit_price)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total" name= "total" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Supply, Deliver and Fix the Following Conduit Materials:</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials1" type="text" name="materials1" value = "20mm Diameter PVC Pipe" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty1" type="number" name="qty1" value ="<?php echo isset($qty1)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit1" type="text" name="unit1" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price1" type="number" name="unit_price1" value ="<?php echo isset($unit_price1)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total1" name= "total1" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials2" type="text" name="materials2" value = "25mm Diameter PVC pipe" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty2" type="number" name="qty2" value ="<?php echo isset($qty2)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit2" type="text" name="unit2" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price2" type="number" name="unit_price2" value ="<?php echo isset($unit_price2)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total2" name= "total2" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials3" type="text" name="materials3" value = "75mm x 75mm Knockout Box" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty3" type="number" name="qty3" value ="<?php echo isset($qty3)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit3" type="text" name="unit3" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price3" type="number" name="unit_price3" value ="<?php echo isset($unit_price3)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total3" name= "total3" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials4" type="text" name="materials4" value = "150mm x 75mm Knockout Box" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty4" type="number" name="qty4" value ="<?php echo isset($qty4)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit4" type="text" name="unit4" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price4" type="number" name="unit_price4" value ="<?php echo isset($unit_price4)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total4" name= "total4" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials5" type="text" name="materials5" value = "20mm Coupler" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty5" type="number" name="qty5" value ="<?php echo isset($qty5)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit5" type="text" name="unit5" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price5" type="number" name="unit_price5" value ="<?php echo isset($unit_price5)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total5" name= "total5" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials6" type="text" name="materials6" value = "20mm 4 way boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty6" type="number" name="qty6" value ="<?php echo isset($qty6)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit6" type="text" name="unit6" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price6" type="number" name="unit_price6" value ="<?php echo isset($unit_price6)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total6" name= "total6" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials7" type="text" name="materials7" value = "20mm U Boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty7" type="number" name="qty7" value ="<?php echo isset($qty7)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit7" type="text" name="unit7" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price7" type="number" name="unit_price7" value ="<?php echo isset($unit_price7)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total7" name= "total7" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials8" type="text" name="materials8" value = "20mm Y way boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty8" type="number" name="qty8" value ="<?php echo isset($qty)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit8" type="text" name="unit8" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price8" type="number" name="unit_price8" value ="<?php echo isset($unit_price8)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total8" name= "total8" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials9" type="text" name="materials9" value = "25mm Coupler" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty9" type="number" name="qty9" value ="<?php echo isset($qty9)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit9" type="text" name="unit9" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price9" type="number" name="unit_price9" value ="<?php echo isset($unit_price9)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total9" name= "total9" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials10" type="text" name="materials10" value = "ELCB Boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty10" type="number" name="qty10" value ="<?php echo isset($qty10)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit10" type="text" name="unit10" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price10" type="number" name="unit_price10" value ="<?php echo isset($unit_price10)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total10" name= "total10" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials11" type="text" name="materials11" value = "Cooker unit box" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty11" type="number" name="qty11" value ="<?php echo isset($qty11)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit11" type="text" name="unit11" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price11" type="number" name="unit_price11" value ="<?php echo isset($unit_price11)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total11" name= "total11" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials12" type="text" name="materials12" value = "Abro gum" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty12" type="number" name="qty12" value ="<?php echo isset($qty12)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit12" type="text" name="unit12" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price12" type="number" name="unit_price12" value ="<?php echo isset($unit_price12)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total12" name= "total12" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials13" type="text" name="materials13" value = "300mm x 300mm Adaptable boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty13" type="number" name="qty13" value ="<?php echo isset($qty13)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit13" type="text" name="unit13" value = "Length" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price13" type="number" name="unit_price13" value ="<?php echo isset($unit_price13)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total13" name= "total13" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials14" type="text" name="materials14" value = "150mm x 150mm Adaptable boxes" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty14" type="number" name="qty14" value ="<?php echo isset($qty14)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit14" type="text" name="unit14" value = "Length" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price14" type="number" name="unit_price14" value ="<?php echo isset($unit_price14)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total14" name= "total14" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials15" type="text" name="materials15" value = "Screws" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty15" type="number" name="qty15" value ="<?php echo isset($qty15)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit15" type="text" name="unit15" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price15" type="number" name="unit_price15" value ="<?php echo isset($unit_price15)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total15" name= "total15" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials16" type="text" name="materials16" value = "BA Screws" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty16" type="number" name="qty16" value ="<?php echo isset($qty16)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit16" type="text" name="unit16" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price16" type="number" name="unit_price16" value ="<?php echo isset($unit_price16)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total16" name= "total16" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials17" type="text" name="materials17" value = "Nails" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty17" type="number" name="qty17" value ="<?php echo isset($qty17)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit17" type="text" name="unit17" value = "Inch" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price17" type="number" name="unit_price17" value ="<?php echo isset($unit_price17)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total17" name= "total17" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials18" type="text" name="materials18" value = "Meter board" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty18" type="number" name="qty18" value ="<?php echo isset($qty18)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit18" type="text" name="unit18" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price18" type="number" name="unit_price18" value ="<?php echo isset($unit_price18)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total18" name= "total18" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials19" type="text" name="materials19" value = "Bolts and Nuts" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty19" type="number" name="qty19" value ="<?php echo isset($qty19)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit19" type="text" name="unit19" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price19" type="number" name="unit_price19" value ="<?php echo isset($unit_price19)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total19" name= "total19" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Power Equipement</label></th>';
				echo '<tr>';
				echo '<th colspan="6"><label>A&B or Equal and Approved Stove Enamelled, Sheet Steel Case, Removable Screw, Fixed Front Cover with Latch Openable Access Door Complete with Miniature Circuit Breakers</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials20" type="text" name="materials20" value = "Distribution Boards" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty20" type="number" name="qty20" value ="<?php echo isset($qty20)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit20" type="text" name="unit20" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price20" type="number" name="unit_price20" value ="<?php echo isset($unit_price20)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total20" name= "total20" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials21" type="text" name="materials21" value = "200A Change over switches" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty21" type="number" name="qty21" value ="<?php echo isset($qty21)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit21" type="text" name="unit21" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price21" type="number" name="unit_price21" value ="<?php echo isset($unit_price21)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total21" name= "total21" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials22" type="text" name="materials22" value = "Cut and base fuse" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty22" type="number" name="qty22" value ="<?php echo isset($qty22)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit22" type="text" name="unit22" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price22" type="number" name="unit_price22" value ="<?php echo isset($unit_price22)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total22" name= "total22" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials23" type="text" name="materials23" value = "ELCB Complete" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty23" type="number" name="qty23" value ="<?php echo isset($qty23)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit23" type="text" name="unit23" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price23" type="number" name="unit_price23" value ="<?php echo isset($unit_price23)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total23" name= "total23" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials24" type="text" name="materials24" value = "Connector base fuse" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty24" type="number" name="qty24" value ="<?php echo isset($qty24)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit24" type="text" name="unit24" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price24" type="number" name="unit_price24" value ="<?php echo isset($unit_price24)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total24" name= "total24" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials25" type="text" name="materials25" value = "Panel base" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty25" type="number" name="qty25" value ="<?php echo isset($qty25)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit25" type="text" name="unit25" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price25" type="number" name="unit_price25" value ="<?php echo isset($unit_price25)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total25" name= "total25" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials26" type="text" name="materials26" value = "Ceiling rods" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty26" type="number" name="qty26" value ="<?php echo isset($qty26)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit26" type="text" name="unit26" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price26" type="number" name="unit_price26" value ="<?php echo isset($unit_price26)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total26" name= "total26" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Cables and Wiring</label></th>';
				echo '<tr>';
				echo '<th colspan="6"><label>Coleman Cables or Equal and Approved Cables, PVC Insulated and Colour Coded, (m/s) in Pipe Sleeves Conduits Include Cable Connections, Cable Joints, Cable Termination Gland and All Other Cable Accessories and Ancilliaries Deemed Necessary for a Complete Installation</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials27" type="text" name="materials27" value = "1.5 mmsq Single Core PVC Cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty27" type="number" name="qty27" value ="<?php echo isset($qty27)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit27" type="text" name="unit27" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price27" type="number" name="unit_price27" value ="<?php echo isset($unit_price27)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total27" name= "total27" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials28" type="text" name="materials28" value = "Ditto Earthing" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty28" type="number" name="qty28" value ="<?php echo isset($qty28)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit28" type="text" name="unit28" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price28" type="number" name="unit_price28" value ="<?php echo isset($unit_price28)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total28" name= "total28" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials29" type="text" name="materials29" value = "2.5mmsq Single core PVC cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty29" type="number" name="qty29" value ="<?php echo isset($qty29)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit29" type="text" name="unit29" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price29" type="number" name="unit_price29" value ="<?php echo isset($unit_price29)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total29" name= "total29" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials30" type="text" name="materials30" value = "4.0mmsq Single core PVC cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty30" type="number" name="qty30" value ="<?php echo isset($qty30)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit30" type="text" name="unit30" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price30" type="number" name="unit_price30" value ="<?php echo isset($unit_price30)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total30" name= "total30" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials31" type="text" name="materials31" value = "6.0mmsq Single core PVC cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty31" type="number" name="qty31" value ="<?php echo isset($qty31)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit31" type="text" name="unit31" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price31" type="number" name="unit_price31" value ="<?php echo isset($unit_price31)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total31" name= "total31" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials32" type="text" name="materials32" value = "16mmsq Single core PVC cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty32" type="number" name="qty32" value ="<?php echo isset($qty32)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit32" type="text" name="unit32" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price32" type="number" name="unit_price32" value ="<?php echo isset($unit_price32)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total32" name= "total32" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Lightings Fittings</label></th>';
				echo '<tr>';
				echo '<th colspan="6"><label>Supply and Fix Approved Quality Lighting Fittings and Accessories in Accordance with Manufacturers Instructions</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials33" type="text" name="materials33" value = "1x40W Ceiling Mounted LED Lighting Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty33" type="number" name="qty33" value ="<?php echo isset($qty33)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit33" type="text" name="unit33" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price33" type="number" name="unit_price33" value ="<?php echo isset($unit_price33)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total33" name= "total33" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials34" type="text" name="materials34" value = "1 x 40W Bulkhead Lightening Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty34" type="number" name="qty34" value ="<?php echo isset($qty34)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit34" type="text" name="unit34" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price34" type="number" name="unit_price34" value ="<?php echo isset($unit_price34)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total34" name= "total34" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials35" type="text" name="materials35" value = "1 x 12W LED lightening fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty35" type="number" name="qty35" value ="<?php echo isset($qty35)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit35" type="text" name="unit35" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price35" type="number" name="unit_price35" value ="<?php echo isset($unit_price35)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total35" name= "total35" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials36" type="text" name="materials36" value = "1 x 20W Surface Mounted Lighting Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty36" type="number" name="qty36" value ="<?php echo isset($qty36)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit36" type="text" name="unit36" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price36" type="number" name="unit_price36" value ="<?php echo isset($unit_price36)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total36" name= "total36" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials37" type="text" name="materials37" value = "1 x 40W Wall Bracket" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty37" type="number" name="qty37" value ="<?php echo isset($qty37)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit37" type="text" name="unit37" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price37" type="number" name="unit_price37" value ="<?php echo isset($unit_price37)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total37" name= "total37" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials38" type="text" name="materials38" value = "Bulb Lightening Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty38" type="number" name="qty38" value ="<?php echo isset($qty38)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit38" type="text" name="unit38" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price38" type="number" name="unit_price38" value ="<?php echo isset($unit_price38)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total38" name= "total38" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials39" type="text" name="materials39" value = "Hiding Lighting Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty39" type="number" name="qty39" value ="<?php echo isset($qty39)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit39" type="text" name="unit39" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price39" type="number" name="unit_price39" value ="<?php echo isset($unit_price39)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total39" name= "total39" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials40" type="text" name="materials40" value = "Fan extractor" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty40" type="number" name="qty40" value ="<?php echo isset($qty40)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit40" type="text" name="unit40" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price40" type="number" name="unit_price40" value ="<?php echo isset($unit_price40)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total40" name= "total40" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Switches and Sockets</label></th>';
				echo '<tr>';
				echo '<th colspan="6"><label>Accessories as Manufactured by MK or Equal and Approved Switches Including Steel Knockout Boxes Fixed to Form Complete Installation</label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th colspan="6"><label>Switches </label></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials41" type="text" name="materials41" value = "5A; 1- gang 1- way Ditto" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty41" type="number" name="qty41" value ="<?php echo isset($qty41)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit41" type="text" name="unit41" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price41" type="number" name="unit_price41" value ="<?php echo isset($unit_price41)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total41" name= "total41" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials42" type="text" name="materials42" value = "5A; 2 - gang 1-way Ditto" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty42" type="number" name="qty42" value ="<?php echo isset($qty42)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit42" type="text" name="unit42" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price42" type="number" name="unit_price42" value ="<?php echo isset($unit_price42)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total42" name= "total42" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials43" type="text" name="materials43" value = "5A; 3-gang 1-way Ditto" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty43" type="number" name="qty43" value ="<?php echo isset($qty43)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit43" type="text" name="unit43" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price43" type="number" name="unit_price43" value ="<?php echo isset($unit_price43)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total43" name= "total43" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials44" type="text" name="materials44" value = "Television Outlet switches" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty44" type="number" name="qty44" value ="<?php echo isset($qty44)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit44" type="text" name="unit44" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price44" type="number" name="unit_price44" value ="<?php echo isset($unit_price44)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total44" name= "total44" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials45" type="text" name="materials45" value = "Telephone Switches" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty45" type="number" name="qty45" value ="<?php echo isset($qty45)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit45" type="text" name="unit45" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price45" type="number" name="unit_price45" value ="<?php echo isset($unit_price45)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total45" name= "total45" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Sockets</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials46" type="text" name="materials46" value = "13A; 1-gang Single socket outlets" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty46" type="number" name="qty46" value ="<?php echo isset($qty46)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit46" type="text" name="unit46" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price46" type="number" name="unit_price46" value ="<?php echo isset($unit_price46)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total46" name= "total46" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Casement Windows with Net Complete</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials47" type="text" name="materials47" value = "13A; 1-gang twin ditto" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty47" type="number" name="qty47" value ="<?php echo isset($qty47)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit47" type="text" name="unit47" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price47" type="number" name="unit_price47" value ="<?php echo isset($unit_price47)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total47" name= "total47" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials48" type="text" name="materials48" value = "15A AC Socket outlets" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty48" type="number" name="qty48" value ="<?php echo isset($qty48)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit48" type="text" name="unit48" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price48" type="number" name="unit_price48" value ="<?php echo isset($unit_price48)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total48" name= "total48" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials49" type="text" name="materials49" value = "Water Heater socket outlets" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty49" type="number" name="qty49" value ="<?php echo isset($qty49)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit49" type="text" name="unit49" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price49" type="number" name="unit_price49" value ="<?php echo isset($unit_price49)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total49" name= "total49" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials50" type="text" name="materials50" value = "Cooker unit outlets" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty50" type="number" name="qty50" value ="<?php echo isset($qty50)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit50" type="text" name="unit50" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price50" type="number" name="unit_price50" value ="<?php echo isset($unit_price50)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total50" name= "total50" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Thunder Arrestor</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials51" type="text" name="materials51" value = "16mm Earth Cable" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty51" type="number" name="qty51" value ="<?php echo isset($qty51)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit51" type="text" name="unit51" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price51" type="number" name="unit_price51" value ="<?php echo isset($unit_price51)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total51" name= "total51" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials52" type="text" name="materials52" value = "Metal" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty52" type="number" name="qty52" value ="<?php echo isset($qty52)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit52" type="text" name="unit52" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price52" type="number" name="unit_price52" value ="<?php echo isset($unit_price52)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total52" name= "total52" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials53" type="text" name="materials53" value = "Iron Pointhead" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty53" type="number" name="qty53" value ="<?php echo isset($qty53)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit53" type="text" name="unit53" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price53" type="number" name="unit_price53" value ="<?php echo isset($unit_price53)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total53" name= "total53" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials54" type="text" name="materials54" value = "Mask tape" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty54" type="number" name="qty54" value ="<?php echo isset($qty54)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit54" type="text" name="unit54" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price54" type="number" name="unit_price54" value ="<?php echo isset($unit_price54)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total54" name= "total54" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials55" type="text" name="materials55" value = "Charcoal" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty55" type="number" name="qty55" value ="<?php echo isset($qty55)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit55" type="text" name="unit55" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price55" type="number" name="unit_price55" value ="<?php echo isset($unit_price55)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total55" name= "total55" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials56" type="text" name="materials56" value = "Animal dung" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty56" type="number" name="qty56" value ="<?php echo isset($qty56)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit56" type="text" name="unit56" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price56" type="number" name="unit_price56" value ="<?php echo isset($unit_price56)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total56" name= "total56" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials57" type="text" name="materials57" value = "Industrial salt" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty57" type="number" name="qty57" value ="<?php echo isset($qty57)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit57" type="text" name="unit57" value = "Bag" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price57" type="number" name="unit_price57" value ="<?php echo isset($unit_price57)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total57" name= "total57" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials58" type="text" name="materials58" value = "Clamp" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty58" type="number" name="qty58" value ="<?php echo isset($qty58)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit58" type="text" name="unit58" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price58" type="number" name="unit_price58" value ="<?php echo isset($unit_price58)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total58" name= "total58" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials59" type="text" name="materials59" value = "Earth rod" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty59" type="number" name="qty59" value ="<?php echo isset($qty59)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit59" type="text" name="unit59" value = "M" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price59" type="number" name="unit_price59" value ="<?php echo isset($unit_price59)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total59" name= "total59" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<th colspan="6"><label>Labour</label></th>';
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials60" type="text" name="materials60" value = "Builders Works in Connection with Pipping Works" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty60" type="number" name="qty60" value ="<?php echo isset($qty60)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit60" type="text" name="unit60" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price60" type="number" name="unit_price60" value ="<?php echo isset($unit_price60)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total60" name= "total60" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials61" type="text" name="materials61" value = "Ditto wiring" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty61" type="number" name="qty61" value ="<?php echo isset($qty61)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit61" type="text" name="unit61" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price61" type="number" name="unit_price61" value ="<?php echo isset($unit_price61)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total61" name= "total61" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials62" type="text" name="materials62" value = "Ditto Fittings" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty62" type="number" name="qty62" value ="<?php echo isset($qty62)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit62" type="text" name="unit62" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price62" type="number" name="unit_price62" value ="<?php echo isset($unit_price62)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total62" name= "total62" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '<tr>';
				echo '<th class="text-center"><?php echo $i++ ?></th>';
				echo '<td><input id="materials63" type="text" name="materials63" value = "Masks Tape" style = "border:none; background-color:#F6F2FF" readonly /></td>';
				echo '<td><input style = "width:150px" id="qty63" type="number" name="qty63" value ="<?php echo isset($qty63)?>" onkeyup="sum()"/></td>';
				echo '<td><input  style = "width:150px" id="unit63" type="text" name="unit63" value = "N/r" readonly /></td>';
				echo '<td><input style="width:150px" id="unit_price63" type="number" name="unit_price63" value ="<?php echo isset($unit_price63)?>" onkeyup="sum()"/></td>';
				echo '<td><input id="total63" name= "total63" type="number" value ="0" readonly /></td>';
				echo '</tr>';
				
				echo '</table>';
				?>
    
   <div>
        <td> Total Estimate <input id="electrical_services_result" name="electrical_services_result" type="number" readonly /></td>
    </div>
				<div class="d-flex w-100 justify-content-center align-items-center">
    			<input type="submit" class="btn btn-flat  bg-gradient-primary mx-2" value="Save" name="submit12">
    			<input class="btn btn-flat bg-gradient-secondary mx-2" type="reset" value="Clear">
    		
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
			var qty22 = document.getElementById('qty22').value;
            var unit_price22 = document.getElementById('unit_price22').value;
            var result = parseInt(qty22) * parseInt(unit_price22);
            if (!isNaN(result)) {
                document.getElementById('total22').value = result;
            }
			var qty23 = document.getElementById('qty23').value;
            var unit_price23 = document.getElementById('unit_price23').value;
            var result = parseInt(qty23) * parseInt(unit_price23);
            if (!isNaN(result)) {
                document.getElementById('total23').value = result;
            }
			var qty24 = document.getElementById('qty24').value;
            var unit_price24 = document.getElementById('unit_price24').value;
            var result = parseInt(qty24) * parseInt(unit_price24);
            if (!isNaN(result)) {
                document.getElementById('total24').value = result;
            }
			var qty25 = document.getElementById('qty25').value;
            var unit_price25 = document.getElementById('unit_price25').value;
            var result = parseInt(qty25) * parseInt(unit_price25);
            if (!isNaN(result)) {
                document.getElementById('total25').value = result;
            }
			var qty26 = document.getElementById('qty26').value;
            var unit_price26 = document.getElementById('unit_price26').value;
            var result = parseInt(qty26) * parseInt(unit_price26);
            if (!isNaN(result)) {
                document.getElementById('total26').value = result;
            }
			var qty27 = document.getElementById('qty27').value;
            var unit_price27 = document.getElementById('unit_price27').value;
            var result = parseInt(qty27) * parseInt(unit_price27);
            if (!isNaN(result)) {
                document.getElementById('total27').value = result;
            }
			var qty28 = document.getElementById('qty28').value;
            var unit_price28 = document.getElementById('unit_price28').value;
            var result = parseInt(qty28) * parseInt(unit_price28);
            if (!isNaN(result)) {
                document.getElementById('total28').value = result;
            }
			var qty29 = document.getElementById('qty29').value;
            var unit_price29 = document.getElementById('unit_price29').value;
            var result = parseInt(qty29) * parseInt(unit_price29);
            if (!isNaN(result)) {
                document.getElementById('total29').value = result;
            }
			var qty30 = document.getElementById('qty30').value;
            var unit_price30 = document.getElementById('unit_price30').value;
            var result = parseInt(qty30) * parseInt(unit_price30);
            if (!isNaN(result)) {
                document.getElementById('total30').value = result;
            }
			var qty31 = document.getElementById('qty31').value;
            var unit_price31 = document.getElementById('unit_price31').value;
            var result = parseInt(qty31) * parseInt(unit_price31);
            if (!isNaN(result)) {
                document.getElementById('total31').value = result;
            }
			var qty32 = document.getElementById('qty32').value;
            var unit_price32 = document.getElementById('unit_price32').value;
            var result = parseInt(qty32) * parseInt(unit_price32);
            if (!isNaN(result)) {
                document.getElementById('total32').value = result;
            }
			var qty33 = document.getElementById('qty33').value;
            var unit_price33 = document.getElementById('unit_price33').value;
            var result = parseInt(qty33) * parseInt(unit_price33);
            if (!isNaN(result)) {
                document.getElementById('total33').value = result;
            }
			var qty34 = document.getElementById('qty34').value;
            var unit_price34 = document.getElementById('unit_price34').value;
            var result = parseInt(qty34) * parseInt(unit_price34);
            if (!isNaN(result)) {
                document.getElementById('total34').value = result;
            }
			var qty35 = document.getElementById('qty35').value;
            var unit_price35 = document.getElementById('unit_price35').value;
            var result = parseInt(qty35) * parseInt(unit_price35);
            if (!isNaN(result)) {
                document.getElementById('total35').value = result;
            }
			var qty36 = document.getElementById('qty36').value;
            var unit_price36 = document.getElementById('unit_price36').value;
            var result = parseInt(qty36) * parseInt(unit_price36);
            if (!isNaN(result)) {
                document.getElementById('total36').value = result;
            }
			var qty37 = document.getElementById('qty37').value;
            var unit_price37 = document.getElementById('unit_price37').value;
            var result = parseInt(qty37) * parseInt(unit_price37);
            if (!isNaN(result)) {
                document.getElementById('total37').value = result;
            }
			var qty38 = document.getElementById('qty38').value;
            var unit_price38 = document.getElementById('unit_price38').value;
            var result = parseInt(qty38) * parseInt(unit_price38);
            if (!isNaN(result)) {
                document.getElementById('total38').value = result;
            }
			var qty39 = document.getElementById('qty39').value;
            var unit_price39 = document.getElementById('unit_price39').value;
            var result = parseInt(qty39) * parseInt(unit_price39);
            if (!isNaN(result)) {
                document.getElementById('total39').value = result;
            }
			var qty40 = document.getElementById('qty40').value;
            var unit_price40 = document.getElementById('unit_price40').value;
            var result = parseInt(qty40) * parseInt(unit_price40);
            if (!isNaN(result)) {
                document.getElementById('total40').value = result;
            }
			var qty41 = document.getElementById('qty41').value;
            var unit_price41 = document.getElementById('unit_price41').value;
            var result = parseInt(qty41) * parseInt(unit_price41);
            if (!isNaN(result)) {
                document.getElementById('total41').value = result;
            }
			var qty42 = document.getElementById('qty42').value;
            var unit_price42 = document.getElementById('unit_price42').value;
            var result = parseInt(qty42) * parseInt(unit_price42);
            if (!isNaN(result)) {
                document.getElementById('total42').value = result;
            }
			var qty43 = document.getElementById('qty43').value;
            var unit_price43 = document.getElementById('unit_price43').value;
            var result = parseInt(qty43) * parseInt(unit_price43);
            if (!isNaN(result)) {
                document.getElementById('total43').value = result;
            }
			var qty44 = document.getElementById('qty44').value;
            var unit_price44 = document.getElementById('unit_price44').value;
            var result = parseInt(qty44) * parseInt(unit_price44);
            if (!isNaN(result)) {
                document.getElementById('total44').value = result;
            }
			var qty45 = document.getElementById('qty45').value;
            var unit_price45 = document.getElementById('unit_price45').value;
            var result = parseInt(qty45) * parseInt(unit_price45);
            if (!isNaN(result)) {
                document.getElementById('total45').value = result;
            }
			var qty46 = document.getElementById('qty46').value;
            var unit_price46 = document.getElementById('unit_price46').value;
            var result = parseInt(qty46) * parseInt(unit_price46);
            if (!isNaN(result)) {
                document.getElementById('total46').value = result;
            }
			var qty47 = document.getElementById('qty47').value;
            var unit_price47 = document.getElementById('unit_price47').value;
            var result = parseInt(qty47) * parseInt(unit_price47);
            if (!isNaN(result)) {
                document.getElementById('total47').value = result;
            }
			var qty48 = document.getElementById('qty48').value;
            var unit_price48 = document.getElementById('unit_price48').value;
            var result = parseInt(qty48) * parseInt(unit_price48);
            if (!isNaN(result)) {
                document.getElementById('total48').value = result;
            }
			var qty49 = document.getElementById('qty49').value;
            var unit_price49 = document.getElementById('unit_price49').value;
            var result = parseInt(qty49) * parseInt(unit_price49);
            if (!isNaN(result)) {
                document.getElementById('total49').value = result;
            }
			var qty50 = document.getElementById('qty50').value;
            var unit_price50 = document.getElementById('unit_price50').value;
            var result = parseInt(qty50) * parseInt(unit_price50);
            if (!isNaN(result)) {
                document.getElementById('total50').value = result;
            }
			var qty51 = document.getElementById('qty51').value;
            var unit_price51 = document.getElementById('unit_price51').value;
            var result = parseInt(qty51) * parseInt(unit_price51);
            if (!isNaN(result)) {
                document.getElementById('total51').value = result;
            }
			var qty52 = document.getElementById('qty52').value;
            var unit_price52 = document.getElementById('unit_price52').value;
            var result = parseInt(qty52) * parseInt(unit_price52);
            if (!isNaN(result)) {
                document.getElementById('total52').value = result;
            }
			var qty53 = document.getElementById('qty53').value;
            var unit_price53 = document.getElementById('unit_price53').value;
            var result = parseInt(qty53) * parseInt(unit_price53);
            if (!isNaN(result)) {
                document.getElementById('total53').value = result;
            }
			var qty54 = document.getElementById('qty54').value;
            var unit_price54 = document.getElementById('unit_price54').value;
            var result = parseInt(qty54) * parseInt(unit_price54);
            if (!isNaN(result)) {
                document.getElementById('total54').value = result;
            }
			var qty55 = document.getElementById('qty55').value;
            var unit_price55 = document.getElementById('unit_price55').value;
            var result = parseInt(qty55) * parseInt(unit_price55);
            if (!isNaN(result)) {
                document.getElementById('total55').value = result;
            }
			var qty56 = document.getElementById('qty56').value;
            var unit_price56 = document.getElementById('unit_price56').value;
            var result = parseInt(qty56) * parseInt(unit_price56);
            if (!isNaN(result)) {
                document.getElementById('total56').value = result;
            }
			var qty57 = document.getElementById('qty57').value;
            var unit_price57 = document.getElementById('unit_price57').value;
            var result = parseInt(qty57) * parseInt(unit_price57);
            if (!isNaN(result)) {
                document.getElementById('total57').value = result;
            }
			var qty58 = document.getElementById('qty58').value;
            var unit_price58 = document.getElementById('unit_price58').value;
            var result = parseInt(qty58) * parseInt(unit_price58);
            if (!isNaN(result)) {
                document.getElementById('total58').value = result;
            }
			var qty59 = document.getElementById('qty59').value;
            var unit_price59 = document.getElementById('unit_price59').value;
            var result = parseInt(qty59) * parseInt(unit_price59);
            if (!isNaN(result)) {
                document.getElementById('total59').value = result;
            }
			var qty60 = document.getElementById('qty60').value;
            var unit_price60 = document.getElementById('unit_price60').value;
            var result = parseInt(qty60) * parseInt(unit_price60);
            if (!isNaN(result)) {
                document.getElementById('total60').value = result;
            }
			var qty61 = document.getElementById('qty61').value;
            var unit_price61 = document.getElementById('unit_price61').value;
            var result = parseInt(qty61) * parseInt(unit_price61);
            if (!isNaN(result)) {
                document.getElementById('total61').value = result;
            }
			var qty62 = document.getElementById('qty62').value;
            var unit_price62 = document.getElementById('unit_price62').value;
            var result = parseInt(qty62) * parseInt(unit_price62);
            if (!isNaN(result)) {
                document.getElementById('total62').value = result;
            }
			var qty63 = document.getElementById('qty63').value;
            var unit_price63 = document.getElementById('unit_price63').value;
            var result = parseInt(qty63) * parseInt(unit_price63);
            if (!isNaN(result)) {
                document.getElementById('total63').value = result;
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
            var total22 = document.getElementById('total22').value;
			var total23 = document.getElementById('total23').value;
            var total24 = document.getElementById('total24').value;
            var total25 = document.getElementById('total25').value;
            var total26 = document.getElementById('total26').value;
            var total27 = document.getElementById('total27').value;
            var total28 = document.getElementById('total28').value;
            var total29 = document.getElementById('total29').value;
            var total30 = document.getElementById('total30').value;
            var total31 = document.getElementById('total31').value;
            var total32 = document.getElementById('total32').value;
            var total33 = document.getElementById('total33').value;
			var total34 = document.getElementById('total34').value;
            var total35 = document.getElementById('total35').value;
            var total36 = document.getElementById('total36').value;
            var total37 = document.getElementById('total37').value;
            var total38 = document.getElementById('total38').value;
            var total39 = document.getElementById('total39').value;
            var total40 = document.getElementById('total40').value;
            var total41 = document.getElementById('total41').value;
			var total42 = document.getElementById('total42').value;
            var total43 = document.getElementById('total43').value;
            var total44 = document.getElementById('total44').value;
            var total45 = document.getElementById('total45').value;
            var total46 = document.getElementById('total46').value;
            var total47 = document.getElementById('total47').value;
            var total48 = document.getElementById('total48').value;
            var total49 = document.getElementById('total49').value;
			var total50 = document.getElementById('total50').value;
            var total51 = document.getElementById('total51').value;
            var total52 = document.getElementById('total52').value;
			var total53 = document.getElementById('total53').value;
            var total54 = document.getElementById('total54').value;
			var total55 = document.getElementById('total55').value;
            var total56 = document.getElementById('total56').value;
            var total57 = document.getElementById('total57').value;
            var total58 = document.getElementById('total58').value;
            var total59 = document.getElementById('total59').value;
            var total60 = document.getElementById('total60').value;
            var total61 = document.getElementById('total61').value;
            var total62 = document.getElementById('total62').value;
			var total63 = document.getElementById('total63').value;
          		
			var result = parseInt(total) + parseInt(total1) + parseInt(total2)+ parseInt(total3)+ parseInt(total4)+ parseInt(total5)+ parseInt(total6) + parseInt(total7)+ parseInt(total8)+ parseInt(total9)+ parseInt(total10)+ parseInt(total11)+ parseInt(total12)+ parseInt(total13) + parseInt(total14)+ parseInt(total15)+ parseInt(total16)+ parseInt(total17)+ parseInt(total18)+ parseInt(total19) + parseInt(total20)+ parseInt(total21)+ parseInt(total22) + parseInt(total23) + parseInt(total24)+ parseInt(total25)+ parseInt(total26)+ parseInt(total27)+ parseInt(total28) + parseInt(total29)+ parseInt(total30)+ parseInt(total31)+ parseInt(total32)+ parseInt(total33)+ parseInt(total34)+ parseInt(total35) + parseInt(total36)+ parseInt(total37)+ parseInt(total38)+ parseInt(total39)+ parseInt(total40)+ parseInt(total41)+ parseInt(total42)+ parseInt(total43)+ parseInt(total44)+ parseInt(total45)+ parseInt(total46) + parseInt(total47)+ parseInt(total48)+ parseInt(total49)+ parseInt(total50)+ parseInt(total51)+ parseInt(total52)+ parseInt(total53)+ parseInt(total54)+ parseInt(total55)+ parseInt(total56)+ parseInt(total57)+ parseInt(total58)+ parseInt(total59)+ parseInt(total60)+ parseInt(total61)+ parseInt(total62) + parseInt(total63);
            
			if (!isNaN(result)) {
				
			document.getElementById("electrical_services_result").value = result ;
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
    		url:'ajax.php?action=save_electrical_services_estimate',
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