<?php  $i = 1;
echo $series;
 $tableBuilder   = new tableBuilder;
?>

				<div class="main" class="row">
				<table id="t01">
				  <tr>
				    <th>A/A</th>
				    <th>Θέση</th> 
				    <th>Τύπος</th>
				    <th>Τεμάχια</th>
				    <th>Πλάτος/Υψος</th> 
				    <th>Περβαζια</th>				   
				    <th>Σχέδια από Μέσα</th>
				    <th>Καθαρά Μέτρα</th> 
				    <th>Ψευτόκασα</th>
				    <th>Παντζούρι/Σϊτα</th>
				    <th>Ρόλο/Σϊτα</th>
				    <th>Καϊτια</th>
				    <th>Παρατηρησεις</th>   
				    <th></th> 
				  </tr>

				  <?php 
				  if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])){
				
				  foreach ($_SESSION['Cart'] as $arr) { 
				  	?>
				  <tr>
				    <td><?php echo $i++;?></td>
				    <td></td>
				    <td><?php echo $arr['Name'];?></td>
				    <td><?php echo $arr['Pieces'];?></td>
				    <td><?php echo $arr['Width'].'/<br>'.$arr['Height'];?></td>
				    <td><?php include 'views/divSills.php';?></td>
				  
				    <td class="table-cell"><?php //include 'views/builder/idxDualAction.php';
				    			//echo $tableBuilder->printImg($arr['Type'],$arr['Class'],$arr['Width'],$arr['Height']);
				    			echo $tableBuilder->_printImg($arr['Type'],$arr['Class'],$arr['dimCase1'],$arr['dimCase3'],$arr['dimCase5'],$arr['DimUp'],$arr['DimMiddle'],$arr['dimCase2'],$arr['dimCase4']);
				    			?></td>
				    <td><?php echo ($arr['Width'] - $arr['SillLeft'] - $arr['SillRight']).'/<br>'.($arr['Height'] - $arr['SillUp'] - $arr['SillDown']);?></td>
				    <td><?php echo $arr['Profile'];?></td>
				    <td><?php echo $arr['Shutters'];?></td>
				    <td><?php echo $arr['Screens'];?></td>
				    <td></td>
				    <td><?php echo $arr['DetailsNotes'];?></td>
				    <td><div style="text-align: center;">
  						<button class="btn myDetailsBtn">ΛΕΠΤΟΜΕΡΙΕΣ</button>
						</div>
					</td>
				  </tr>
					<?php } 
				}?>
				  
				 
				</table>
				<br>
				
			</div>
		