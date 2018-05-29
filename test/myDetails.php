<div class="modal fade" id="myDetailsModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h4 class="modal-title">EDIT</h4>
      </div>
      <div class="row">
        <div class="modal-body">
           <div id="modal-left-s">       
              <p id = "imgDetail"></p>                                    
              <p><input type="text" class="input-sm" id="txtfname"/></p>
              <p><input type="text" class="input-sm" id="txtlname"/></p>
              <p><input type="text" class="input-sm" id="txtemail"/></p>
            </div>
           <div id="modal-right-s">
            <form method="post" action="index.php">
              <p>
              <select class="form-control" name="<?php echo $worksheet->getCellByColumnAndRow(6,'1')->getValue();?>">
              <?php for ($row = 2; $row <= $worksheet->getHighestRow('F'); $row++) { ?>
                <option value="<?php echo $worksheet->getCellByColumnAndRow(6,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(6,$row)->getValue();?></option>
              <?php } ?>
              </select>
              </p>
              
              <p>
              <select class="form-control" name="<?php echo $worksheet->getCellByColumnAndRow(9,'1')->getValue();?>">
              <?php for ($row = 2; $row <= $worksheet->getHighestRow('I'); $row++) { ?>
                <option value="<?php echo $worksheet->getCellByColumnAndRow(9,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(9,$row)->getValue();?></option>
              <?php } ?>
              </select>
              </p>
             <!--  <input type="submit" value="Ενημέρωση" class="btn btn-primary" name="editItem"> -->
              </form>
            </div>
         
        <!-- </div> -->
        
      </div>
    </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateOrder">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->