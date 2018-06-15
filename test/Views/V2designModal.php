<br>
<div style="text-align: center;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#designModal">
  NEW DESIGN
  </button>
</div>




<div class="modal fade"  tabindex="-1" id="designModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Codes &amp; Company</h4>
      </div>
        <div class="modal-body">
<div class="row">
          <form method="post" action="index.php">
            <div class="productSidebar">
              <img id="productImage" src="images/2P-DA-L.jpg">
              <span id="productLabel" name ="productLabel"></span>
              <input type="hidden" name="productName" id="productName">
              <input type="hidden" name="productClass" id="productClass">
            
              <div class="formContent">
                
                    <div class="block">
                      <label class="input-label">ΠΛΑΤΟΣ:</label>
                      <input class="input-dim" type="number" id="width" name="width" step="0.01" value="2000" min="-9999.99" max="9999.99" required /><br>
                    </div>
                    <div class="block">
                      <label class="input-label">ΥΨΟΣ:</label>
                      <input class="input-dim" type="number" id="height" name="height"  step="0.01" value="2300" min="-9999.99" max="9999.99" required /><br>
                    </div> 
                  
              </div>
            </div> <!--MODAL LEFT END-->
            <div class="main-panel">
              <div class="panel-body">
                <?php for ($row = 3; $row <= 17; ++ $row) { 
                  $vartype =$typesWorksheet->getCellByColumnAndRow('2',"$row")->getValue();
                  $varclass=$typesWorksheet->getCellByColumnAndRow('3',"$row")->getValue();
                  $varname =$typesWorksheet->getCellByColumnAndRow('1',"$row")->getValue(); ?>
                  <label class="checkbox-inline">
                  <img src='../images/<?php echo $vartype;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>"/>
                  <br>
                  <input type="radio" name="productType" id="contype" onchange="WhatToDo()" value="<?php echo $vartype;?>" required <?php //echo $Check->RadioChecked($type, $varname) ?>>
                  <p class="radioLabels" name="productRadioName"> 
                        <?php echo $varname;?> 
                  </p>
                  <p class="hidden" name="productRadioClass"> 
                        <?php echo $varclass;?> 
                  </p>              
                  </label>
                      <?php }?>
              </div> <!-- panel-body fbody -->
            </div>            


          </form>
</div>
        </div> <!-- modal-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->
