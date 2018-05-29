<!-- <div>
  <input type="text" id="text1" value="0"> +
  <input type="text" id="text2">
  <button id="testbutton1"> = </button>
  <div id="result1" onclick="myTestFunction()"></div>
</div> -->
	<div>
		<table class="sillsTable1">
		<tr class="sillsTable">
			<td class="sillsTable"></td>
			<td class="sillsTable"><?php echo $arr['SillUp'];?></td>
			<td class="sillsTable"></td>
		</tr>
		<tr class="sillsTable">
			<td class="sillsTable"><?php echo $arr['SillLeft'];?></td>
			<td class="sillsTable"><img src="<?php echo $arr['Sills'];?>" width="85" height="94" class="openSillsModal"></td>
			<td class="sillsTable"><?php echo $arr['SillRight'];?></td>
		</tr>
		<tr class="sillsTable">
			<td class="sillsTable"></td>
			<td class="sillsTable"><?php echo $arr['SillDown'];?></td>
			<td class="sillsTable"></td>
		</tr>
		</table>
		
	</div>