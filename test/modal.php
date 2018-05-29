<h2>ΠΑΡΑΔΕΙΓΜΑ ΦΟΡΜΑΣ</h2>

<!-- Trigger/Open The Modal -->
	 <div style="text-align: center;">
		<button class="btn myBtn"  id="myBtn" >ΝΕΑ ΚΑΤΑΣΚΕΥΗ</button>		
	</div>
	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="text-align: center;" >
  NEW DESIGN
</button> -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">  	  	
  	<div class="main">

  		
    	<span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    <!-- ΑΚΟΛΟΥΘΕΙ Η ΦΟΡΜΑ ΠΡΟΣΘΗΚΗΣ ΚΑΤΑΣΚΕΥΗΣ -->
    <div class="modal-body">
	    <form method="post" action="index.php">
	    
	    		<div id="modal-left">
					<img id="productImage" src="images/ΔΑΑ-R.jpg" style = "max-width: 100%; max-height: 100%;">
					<span id="productName" name ="productName"></span>
						A.ΑΡΙΘΜΟΣ:<input type="number" name="aa" step="1" required/><br>
						ΠΛΑΤΟΣ:<input type="number" name="width" step="0.01" required/><br>
						ΥΨΟΣ:<input type="number" name="height"  step="0.01" required/><br>
						<br>
						<input type="submit" value="Προσθήκη" class="btn btn-primary" name="newItem">
				</div>
				<br>
			<!-- ΑΚΟΛΟΥΘΟΥΝ ΟΙ ΦΩΤΟΓΡΑΦΙΕΣ ΤΩΝ ΚΑΤΑΣΚΕΥΩΝ -->	
	   				
				<div id="modal-right">
					<div class="panel-body fbody" >
						<?php for ($row = 3; $row <=  $worksheet->getHighestRow('D'); ++ $row) { 
							$varname =$worksheet->getCellByColumnAndRow('4',"$row")->getValue(); ?>
			            	<label class="checkbox-inline">
				             	<img src='images/<?php echo $varname;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>"/>
				              	<br/>
				              	<input type="radio" name="productType" id="contype" onchange="WhatToDo()" value="<?php echo $varname;?>" required <?php echo $Check->RadioChecked($type, $varname) ?>>
				               	<p class="test"> 
				                 <?php echo $varname;?> 
				              	</p>				
			            	</label>
			            <?php }?>
			         </div> 
			    </div> 	
	     	   	
			</form>
		</div>  
	</div>
  </div>
</div>