<br>
<div style="text-align: center;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#designModal" style="text-align: center; left: 50%" >
  NEW DESIGN
  </button>
</div>



<!-- bs-example-modal-sm -->
<div class="modal fade" tabindex="-1" id="designModal">
  <<!-- div class="modal-dialog"> -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="mySmallModalLabel">Codes &amp; Company</h4>
        <div class="tab" style="text-align: center;">
                  <button class="tablinks" onclick="openTab(event, 'tab-meters')" id="defaultOpen">Meters</button>
                  <button class="tablinks" onclick="openTab(event, 'tab-feet')">Feet</button>
                 
              </div>

      </div>
      <div class="modal-body">
        
        <form method="post" action="index.php">
          <!-- <div class="container"> -->
            <div class="row">
           <div class="col-xs-3 col-lg-3" >
               
           <!--  <div id="modal-left"> -->
            <div style="position: fixed;" >
            <img id="productImage" src="images/2P-DA-L.jpg" style = "max-width: 236px; max-height: 236px;">
            <span id="productLabel" name ="productLabel"></span>
            <input type="hidden" name="productName" id="productName">
            <input type="hidden" name="productclass" id="productClass">
             
            <div class="formContent">
                <div id="tab-meters" class="tabcontent">
                  <div class="block">
                    <label class="input-label">ΠΛΑΤΟΣ:</label>
                    <input class="input-dim" type="number" id="width" name="width" step="0.01" value="2000" min="-9999.99" max="9999.99" required /><br>
                  </div>
                  <div class="block">
                    <label class="input-label">ΥΨΟΣ:</label>
                    <input class="input-dim" type="number" id="height" name="height"  step="0.01" value="2300" min="-9999.99" max="9999.99" required /><br>
                  </div> 
                </div>
                <div id="tab-feet" class="tabcontent">
                  <div class="block">
                    <label class="input-label">WIDTH:</label>
                    <div class="block">
                    <input type="number" id="feet-width" name="feet-width" placeholder="ft" 
                    oninput="LengthConverter()" 
                    onchange="LengthConverter()"/><br>
                    <input type="number" id="inches-width" name="inches-width" placeholder="inches"
                    oninput="LengthConverter()" 
                    onchange="LengthConverter()"/>
                    </div>
                  </div>
                  <div class="block">
                    <label class="input-label">HEIGHT:</label>
                    <div class="block">
                    <input type="number" id="feet-height" name="feet-height"  placeholder="ft" 
                    oninput="HeightConverter()" 
                    onchange="HeightConverter()"/><br>
                    <input type="number" id="inches-height" name="inches-height" placeholder="inches"
                    oninput="HeightConverter()" 
                    onchange="HeightConverter()"/>
                    </div>
                  </div> 
                              <p>Width: <span id="outputWidth"></span></p>
                              <p>Height: <span id="outputHeight"></span></p>
                </div> 
              </div>
              <br>
              <input type="submit" value="Προσθήκη" class="btn btn-primary" name="newItem">
              </div>
            </div> <!-- modal-left or col-md-6-->
            
           
            
            <div class="col-xs-9 col-lg-9" >
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#windows">Windows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sliding">Sliding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#doors">Doors</a>
              </li>
            </ul>

            <div class="tab-content">
                <div id="windows" class="tab-pane active"><br>
                  <h3>Windows</h3>
                  <div class="panel-body">
                    <?php for ($row = 3; $row <= 17; ++ $row) { 
                      $vartype =$typesWorksheet->getCellByColumnAndRow('2',"$row")->getValue();
                      $varclass=$typesWorksheet->getCellByColumnAndRow('3',"$row")->getValue();
                      $varname =$typesWorksheet->getCellByColumnAndRow('1',"$row")->getValue(); ?>
                      <label class="checkbox-inline">
                      <img src='images/<?php echo $vartype;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>"/>
                      <br>
                      <input type="radio" name="productType" id="contype" onchange="WhatToDo()" value="<?php echo $vartype;?>" required <?php echo $Check->RadioChecked($type, $varname) ?>>
                      <p class="test" name="productRadioName"> 
                            <?php echo $varname;?> 
                      </p>
                      <p class="hidden" name="productRadioClass"> 
                            <?php echo $varclass;?> 
                      </p>              
                      </label>
                          <?php }?>
                  </div> <!-- panel-body fbody -->
                </div>
                <div id="sliding" class="tab-pane fade"><br>
                  <h3>Sliding</h3>
                  <div class="panel-body">
                    <?php for ($row = 18;$row <=  33; ++ $row) { 
                      $vartype =$typesWorksheet->getCellByColumnAndRow('2',"$row")->getValue();
                      $varclass=$typesWorksheet->getCellByColumnAndRow('3',"$row")->getValue();
                      $varname =$typesWorksheet->getCellByColumnAndRow('1',"$row")->getValue(); ?>
                      <label class="checkbox-inline">
                      <img src='images/<?php echo $vartype;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>"/>
                      <br>
                      <input type="radio" name="productType" id="contype" onchange="WhatToDo()" value="<?php echo $vartype;?>" required <?php echo $Check->RadioChecked($type, $varname) ?>>
                      <p class="test" name="productRadioName"> 
                            <?php echo $varname;?> 
                      </p>  
                      <p class="hidden" name="productRadioClass"> 
                            <?php echo $varclass;?> 
                      </p>         
                      </label>
                          <?php }?>
                  </div> <!-- panel-body fbody -->
                </div>
                <div id="doors" class="tab-pane fade"><br>
                  <h3>Doors</h3>
                  <div class="panel-body">
                    <?php for ($row = 34;$row <= $typesWorksheet->getHighestRow('B'); ++ $row) { 
                      $vartype =$typesWorksheet->getCellByColumnAndRow('2',"$row")->getValue();
                      $varclass=$typesWorksheet->getCellByColumnAndRow('3',"$row")->getValue();
                      $varname =$typesWorksheet->getCellByColumnAndRow('1',"$row")->getValue(); ?>
                      <label class="checkbox-inline">
                      <img src='images/<?php echo $vartype;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>"/>
                      <br>
                      <input type="radio" name="productType" id="contype" onchange="WhatToDo()" value="<?php echo $vartype;?>" required <?php echo $Check->RadioChecked($type, $varname) ?>>
                      <p class="test" name="productRadioName"> 
                            <?php echo $varname;?> 
                      </p>  
                      <p class="hidden" name="productRadioClass"> 
                            <?php echo $varclass;?> 
                      </p>         
                      </label>
                          <?php }?>
                  </div> <!-- panel-body fbody -->
                </div>
                
              </div>
            <!-- <div id="modal-right"> -->
            
            </div> <!-- modal-right or col-md-6-->
            </div> <!-- row -->
         <!--  </div> --> <!-- container -->
        </form>


      </div> <!-- modal-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div> <!-- modal-content -->
 <!--  </div> --> <!-- modal-dialog -->
</div> <!-- modal fade -->
<br>
<!-- 
class="col-md-6" -->