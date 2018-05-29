<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#designModal" style="text-align: center;" >
  NEW DESIGN
</button>
<br>
<!-- bs-example-modal-sm -->
<div class="modal fade" tabindex="-1" id="designModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="mySmallModalLabel">Codes &amp; Company</h4>
      </div>
      <div class="modal-body">

        <form method="post" action="index.php">
        <!-- <div class="row"> -->
         <!-- <div class="col-md-6"> -->
          <div id="modal-left">
          <img id="productImage" src="images/ΔΑΑ-R.jpg" style = "max-width: 100%; max-height: 100%;">
          <span id="productName" name ="productName"></span>
            A/A:<input type="number" name="aa" step="1" required/><br>
            ΠΛΑΤΟΣ:<input type="number" name="width" step="0.01" required/><br>
            ΥΨΟΣ:<input type="number" name="height"  step="0.01" required/><br>
            </br>
            <input type="submit" value="Προσθήκη" class="btn btn-primary" name="newItem">
          </div> <!-- modal-left or col-md-6-->
          <br>
          <!-- <div class="col-md-6" style="overflow-y: scroll;"> -->
          <div id="modal-right">
          <div class="panel-body fbody">
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
          </div> <!-- panel-body fbody -->
          </div> <!-- modal-right or col-md-6-->
         <!--  </div> --> <!-- row -->
      </form>
      </div> <!-- modal-body -->
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->
<br>
<!-- 
class="col-md-6" -->