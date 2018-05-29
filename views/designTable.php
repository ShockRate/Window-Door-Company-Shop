<?php  $i = 1;
echo $series;
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
				    <th style="width: 520px">Ρόλο/Σϊτα</th>
				    <th>Καϊτια</th>
				    <th>Παρατηρησεις</th>   
				    <!-- <th></th>  -->
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
				    <td><?php include 'views/sills.php';?><!-- <img src="<?php //echo $arr['Sills'];?>" width="85" height="94" class="openSillsModal"> --></td>
				    <td><img src="images/<?php echo $arr['Type'];?>.jpg" width="128" height="141" class="img-product"></td>
				    <td><?php echo ($arr['Width'] - $arr['SillLeft'] - $arr['SillRight']).'/<br>'.($arr['Height'] - $arr['SillUp'] - $arr['SillDown']);?></td></td>
				    <td><?php echo $arr['Profile'];?></td>
				    <td><?php echo $arr['Shutters'];?></td>
				    <td><?php echo $arr['Screens'];?></td>
				    <td></td>
				    <td><?php echo $arr['DetailsNotes'];?></td>
				    <td> <div style="text-align: center;">
  						<button class="btn myDetailsBtn">ΛΕΠΤΟΜΕΡΙΕΣ</button>
						</div>
					</td>
				  </tr>
					<?php } 
				}?>
				  
				 
				</table>
				<br>
				
			</div>
		