<div class="modal fade" id="myDetailsModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="mySmallModalLabel">Codes &amp; Company</h4>
      </div>
      <!-- <div class="row"> -->
        <div class="modal-body">
           <div id="modal-left-s">       
              <!-- <p id = "imgDetail"></p> --> 
              <div class="block">
                <div>
                   <div id="dimensionsSet">
                 
                   </div>
                   
                  <br>
                   <div id="result1"></div>
                  <?php //include_once 'views/testingHTML.php'; ?>
                </div>   
                <div class="block">
                  <label class="input-label">ΤΥΠΟΣ</label>
                  <!-- <p><input type="text" class="input" id="type"/></p> -->
                  <p id="type"></p>
                </div> 
                <div class="block">
                  <label class="input-label">ΤΕΜΑΧΙΑ</label>
                   <p><input type="text" class="input-sm" id="pieces"/></p>
                </div>
                
                <div class="block">
                  <label class="input-label">ΦΑΡΔΟΣ</label>
                  <p><input type="text" class="input-sm" id="detailsWidth"/></p>
                </div>
                <div class="block">
                  <label class="input-label">ΥΨΟΣ</label>
                  <p><input type="text" class="input-sm" id="detailsHeight"/></p>
                </div> 
               
                  <div>
                    <label class="input-label">ΚΑΘΑΡΟ ΦΑΡΔΟΣ</label>
                    <p><input type="text" class="input-sm" id="detailsClearWidth"/></p>
                  </div>
                    <div>
                    <label class="input-label">ΚΑΘΑΡΟ ΥΨΟΣ</label>
                    <p><input type="text" class="input-sm" id="detailsClearHeight"/></p>
                  </div>

                
              </div>                            
             
             
              
              
              
            </div>
           <div id="modal-right-s">
            <p><input type="text" id="windowIndex" name="sillIndex"></p>
            <form method="post" action="index.php">
              <p>
              <div class="block">
              <label>ΨΕΥΤΟΚΑΣΑ</label>
              <select class="form-control" id="profiles" name="<?php echo $worksheet->getCellByColumnAndRow(5,'1')->getValue();?>">
              <?php for ($row = 2; $row <= $worksheet->getHighestRow('E'); $row++) { ?>
                <option value="<?php echo $worksheet->getCellByColumnAndRow(5,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(5,$row)->getValue();?></option>
              <?php } ?>
              </select>
              </div>
              </p>

              <p>
              <div class="block">
              <label>ΡΟΛΑ</label>
              <select class="form-control" id="shutters" name="<?php echo $worksheet->getCellByColumnAndRow(6,'1')->getValue();?>">
              <?php for ($row = 2; $row <= $worksheet->getHighestRow('F'); $row++) { ?>
                <option value="<?php echo $worksheet->getCellByColumnAndRow(6,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(6,$row)->getValue();?></option>
              <?php } ?>
              </select>
              </div>
              </p>
              
              <p>
              <div class="block">
              <label>ΣΙΤΑ</label>
              <select class="form-control" id="screens" name="<?php echo $worksheet->getCellByColumnAndRow(9,'1')->getValue();?>">
              <?php for ($row = 2; $row <= $worksheet->getHighestRow('I'); $row++) { ?>
                <option value="<?php echo $worksheet->getCellByColumnAndRow(9,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(9,$row)->getValue();?></option>
              <?php } ?>
              </select>
              </div>
              </p>

              <textarea id="detailsNotes" rows="5" cols="50">
                
              </textarea>


              </form>
            </div>
         
        <!-- </div> -->
        
      </div>
<!--     </div> -->
      <div class="modal-footer" >
        <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateOrder" data-dismiss="modal">Update</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->