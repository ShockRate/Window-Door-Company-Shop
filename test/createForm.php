<?php 
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
 ?>

<form method="post" action="index.php">
		
		<table>
		
		<?php
		

		for ($col = 1; $col < $highestColumnIndex; ++ $col) {
			$curcol = Coordinate::stringFromColumnIndex($col);
		?>

			<tr><td>
				
			<?php echo $worksheet->getCellByColumnAndRow($col,'1')->getValue();?>
			</td><td>
			<?php echo $lastRow = $worksheet->getHighestRow($curcol);?>
			</td><td>
			<!-- BREAK POINT-->
			 <select name="<?php echo $worksheet->getCellByColumnAndRow($col,'1')->getValue();?>">
					<?php for ($row = 2; $row <= $lastRow; $row++) { ?>
						<option value="<?php echo $worksheet->getCellByColumnAndRow($col,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow($col,$row)->getValue();?></option>
					<?php } ?>
				</select>
			</td></tr>
		<?php } ?>
		</table>
			
			<br>

				<div class="form-group">
	                <label for="inputAnzahl" class="col-xs-2 control-label">Α/Α</label>
	                <div class="col-xs-4">
	                    <input type="text" class="form-control red" name="anzahl" placeholder="Αριθμός" value="" >
	                </div>
	            </div>

		<br>
			 <div style="text-align: center">
					<input type="submit" value="Empty Cart" name="emptyCart"/>
					<button name="Download" class="btn btn-primary" onclick="example_ajax_post()">Download</button>
			 </div>
		</form>
		