<!-- VIEW ΓΙΑ ΕΠΙΛΟΓΗ ΣΕΙΡΑΣ ΤΖΑΜΙΟΥ ΚΑΙ ΧΡΩΜΑΤΟΣ -->
<div class="container" style="text-align: center; margin-left: auto; margin-right: auto; width: 50%">   
  <form method="post" action="test-code/test.php">
      <h3> <?php echo $series;?></h3>
      <div class="block">
          <label class="input-label">ΣΕΙΡΑ:</label>
          <select class="form-control" id="series" name="series" required>
                <?php for ($row = 2; $row <= $worksheet->getHighestRow('A'); $row++) { ?>
                  <option value="<?php echo $worksheet->getCellByColumnAndRow(1,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(1,$row)->getValue();?></option>
                <?php } ?>
          </select>
      </div>
                  <br>
      <div class="block">
        <label class="input-label">Χρώμα:</label>
        <select class="form-control" id="color" name="color" required>
                <?php for ($row = 2; $row <= $worksheet->getHighestRow('B'); $row++) { ?>
                  <option value="<?php echo $worksheet->getCellByColumnAndRow(2,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(2,$row)->getValue();?></option>
                <?php } ?>
        </select>
      </div>
      <br>
      <div class="block">
        <label class="input-label">Επιυάλωση:</label>
        <select class="form-control" id="glazzing" name="glazzing" required>
                <?php for ($row = 2; $row <= $worksheet->getHighestRow('C'); $row++) { ?>
                  <option value="<?php echo $worksheet->getCellByColumnAndRow(3,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(3,$row)->getValue();?></option>
                <?php } ?>
        </select>
      </div>
      
      
      <br>
      <input type="submit" value="Δημιουργια Παραγγελειας" class="btn btn-primary" name="newOrder">
  </form>
</div>
