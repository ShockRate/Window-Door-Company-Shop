<?php
session_start();
  
  $windowIndex  = $_POST['windowIndex'] -1;

  $width        = $_SESSION['Cart'][$windowIndex]['Width'];
  $height       = $_SESSION['Cart'][$windowIndex]['Height'];
  $clearwidth   = $_SESSION['Cart'][$windowIndex]['ClearWidth'];
  $clearheight  = $_SESSION['Cart'][$windowIndex]['ClearHeight'];

  $dimLeft      = $_SESSION['Cart'][$windowIndex]['DimLeft'];
  $dimCenter    = $_SESSION['Cart'][$windowIndex]['DimCenter'];
  $dimRight     = $_SESSION['Cart'][$windowIndex]['DimRight'];
  $dimMiddle    = $_SESSION['Cart'][$windowIndex]['DimMiddle'];
  $dimUp        = $_SESSION['Cart'][$windowIndex]['DimUp'];
  $dimCentLeft  = $_SESSION['Cart'][$windowIndex]['DimCentLeft'];
  $dimCentRight = $_SESSION['Cart'][$windowIndex]['DimCentRight'];
  

  // $setHtml = '';
  $_SESSION['curentClass'] = $_SESSION['Cart'][$windowIndex]['Class'];
  $var = $_SESSION['Cart'][$windowIndex]['Class'];


if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==2){
       $setHtml =  '<div class="builder-container">
                      <div class="builder-left">             
                        <div class="input-container">
                            <div><input type="text" id="dimLeft" name="dimLeft" value="'.$dimLeft.'"></div>
                            <div><input type="text" id="dimRight" name="dimRight" value="'.$dimRight.'"></div>        
                        </div>
                        <br>
                        <div>
                          <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                        </div>
                      </div>
                      <div class="builder-right-empty">                                                              
                      </div>
                    </div>';
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==3) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimCenter" value="'.$dimCenter.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right-empty">                                                                      
                      </div>
                    </div>';
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==4) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>             
                      </div>
                      <div class="builder-right">                 
                          <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                       
                      </div>
                    </div>';
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==6) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                        
                      <br>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                         
                          <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                                                     
                      </div>
                    </div>';   
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==7) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">              
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                                      
                      </div>
                    </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==8) {
        $setHtml = ' <div class="builder-container">
                      <div class="builder-left">                
                      <br>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimCenter" value="'.$dimCenter.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                                        
                      </div>
                    </div>';  
      }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==9) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimCenter" value="'.$dimCenter.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                 
                          <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                      
                      </div>
                    </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==11) {
        $setHtml = '<div class="builder-container">
                        <div class="builder-left">                
                        <div class="input-container-left">
                            <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                            <div><input type="text" name="dimRight" value="'.$dimCenter.'"></div>        
                        </div>
                        <br>
                        <div>
                           <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                        </div>
                        </div>
                        <div class="builder-right-empty">                                                   
                        </div>
                      </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==12) {
        $setHtml = '<div class="builder-container">
              <div class="builder-left">                
              <div class="input-container-right">
                  <div><input type="text" name="dimLeft" value="'.$dimCenter.'"></div>
                  <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
              </div>
              <br>
              <div>
                <img src="./images/ENT-2P-FIX-R.jpg" alt="ENT-2P-FIX-R.jpg">
              </div>
              </div>
              <div class="builder-right-empty">   
              </div>';  
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==13) {
        $setHtml = '<div class="builder-container">
              <div class="builder-left">                
              <div class="input-container">
              
                  <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                  <div><input type="text" id="dimCenter" name="dimCenter" value="'.$dimCenter.'"></div>
                  <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
              </div>
              <br>
              <div>
                <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
              </div>
              </div>
              <div class="builder-right-empty">
              </div>
            </div>';
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==14) {
        $setHtml = '<div class="builder-container">
              <div class="builder-left">                             
              <br>
              <br>
              <div>
                <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
              </div>
              <div class="input-container">
                   <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                  <div><input type="text" name="dimCenter" value="'.$dimCenter.'"></div>
                  <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
              </div>
              </div>
              <div class="builder-right">                  
                  <div><input type="text" name="dimUp" value="'.$dimUp.'"></div>
                  <div><input type="text" name="dimMiddle" value="'.$dimMiddle.'"></div>                                   
              </div>
            </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==15) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                          <div><input type="text" name="dimLeft" value="'.$dimLeft.'"></div>
                          <div><input type="text" name="dimCentLeft" value="'.$dimCentLeft.'"></div>
                          <div><input type="text" name="dimCentRight" value="'.$dimCentRight.'"></div>
                          <div><input type="text" name="dimRight" value="'.$dimRight.'"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right-empty">                                                                      
                      </div>
                    </div>';                                                                                                             
     }else{
       $setHtml = '<img class="img-responsive" src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" style = "max-width: 236px; max-height: 236px;"> ';
    }
    
    echo json_encode(array("width" => $width, "height" => $height, "clearwidth" => $clearwidth, "clearheight" => $clearheight, "setHtml" => $setHtml));
                 
?>