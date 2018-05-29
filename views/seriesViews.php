<div class="row" style="text-align: center;">
	
	
<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/series/8000.jpg" style="max-height: 100px; max-width: 100px ">
        <div class="overlay">
           <h2>EPAL 8000</h2>
           <a class="info" href="index.php?nav=order&series=8000">New Order</a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/series/14200.jpg" style="max-height: 100px; max-width: 100px ">
        <div class="overlay">
           <h2>EPAL 14200</h2>
           <a class="info" href="index.php?nav=order&series=14200">New Order</a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/series/14400.jpg" style="max-height: 100px; max-width: 100px ">
        <div class="overlay">
           <h2>EPAL 14400</h2>
           <a class="info" href="index.php?nav=order&series=14400">New Order</a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/series/14100.jpg" style="max-height: 100px; max-width: 100px ">
        <div class="overlay">
           <h2>EPAL 14100</h2>
           <a class="info" href="index.php?nav=order&series=14100">New Order</a>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/series/18000.jpg" style="max-height: 100px; max-width: 100px ">
        <div class="overlay">
           <h2>EPAL 18000</h2>
           <a class="info" href="index.php?nav=order&series=18000">New Order</a>
        </div>
    </div>
</div>
<br> -->
  <div class="container" style="text-align: center;">
    <div class="col-xs-6 col-lg-6" >
  <form method="post" action="index.php">
      <h3> <?php echo $series;?></h3>
      <div class="block">
          <label class="input-label">ΣΕΙΡΑ:</label>
          <select class="form-control" id="series" name="series">
                  <?php for ($row = 2; $row <= $worksheet->getHighestRow('A'); $row++) { ?>
                    <option value="<?php echo $worksheet->getCellByColumnAndRow(1,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(1,$row)->getValue();?></option>
                  <?php } ?>
          </select>
      </div>
                  <br>
      <div class="block">
        <label class="input-label">Χρώμα:</label>
        <select class="form-control" id="color" name="color">
                  <?php for ($row = 2; $row <= $worksheet->getHighestRow('B'); $row++) { ?>
                    <option value="<?php echo $worksheet->getCellByColumnAndRow(2,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(2,$row)->getValue();?></option>
                  <?php } ?>
        </select>
      </div>
      <br>
      <div class="block">
        <label class="input-label">Επιυάλωση:</label>
        <select class="form-control" id="glazzing" name="glazzing">
                  <?php for ($row = 2; $row <= $worksheet->getHighestRow('C'); $row++) { ?>
                    <option value="<?php echo $worksheet->getCellByColumnAndRow(3,$row)->getValue();?>"><?php echo $worksheet->getCellByColumnAndRow(3,$row)->getValue();?></option>
                  <?php } ?>
        </select>
      </div>
      
      
      <br>
      <input type="submit" value="Δημιουργια Παραγγελειας" class="btn btn-primary" name="newOrder">
  </form>
</div>
</div>