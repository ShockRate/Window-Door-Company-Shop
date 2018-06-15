<?php
session_start();
  
  $windowIndex  = $_POST['windowIndex'] -1;

  $width      = $_SESSION['Cart'][$windowIndex]['Width'];
  $height     = $_SESSION['Cart'][$windowIndex]['Height'];
  $clearwidth   = $_SESSION['Cart'][$windowIndex]['ClearWidth'];
  $clearheight  = $_SESSION['Cart'][$windowIndex]['ClearHeight'];

  $dimLeft   = $_SESSION['Cart'][$windowIndex]['DimLeft'];
  $dimRight  = $_SESSION['Cart'][$windowIndex]['DimRight'];

  // $setHtml = '';
  $_SESSION['curentClass'] = $_SESSION['Cart'][$windowIndex]['Class'];
  $var = $_SESSION['Cart'][$windowIndex]['Class'];


if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==2){
       $setHtml =  '<div class="builder-container">
                      <div class="builder-left">             
                        <div class="input-container">
                            <div><input type="text" id="dimLeft" name="width-left-slide" value="'.$dimLeft.'"></div>
                            <div><input type="text" id="dimRight" name="width-right-slide" value="'.$dimRight.'"></div>        
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
                          <div><input type="text" name="width-left-slide" value="'.($clearwidth/3).'"></div>
                          <div><input type="text" name="width-center-slide" value="'.($clearwidth/3).'"></div>
                          <div><input type="text" name="width-right-slide" value="'.($clearwidth/3).'"></div>        
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
                          <div><input type="text" name="height-slide" value="'.($clearwidth/5).'"></div>
                          <div><input type="text" name="main-height" value="'.($clearwidth*4/5).'"></div>                       
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
                          <div><input type="text" name="width-left-slide"></div>
                          <div><input type="text" name="width-right-slide"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                         
                          <div><input type="text" name="height-slide"></div>
                          <div><input type="text" name="main-height"></div>                                                     
                      </div>
                    </div>';   
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==7) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">              
                      <div class="input-container">
                          <div><input type="text" name="width-left-slide"></div>
                          <div><input type="text" name="width-right-slide"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="text" name="height-slide"></div>
                          <div><input type="text" name="main-height"></div>                                      
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
                          <div><input type="text" name="width-left-slide"></div>
                          <div><input type="text" name="width-center-slide"></div>
                          <div><input type="text" name="width-right-slide"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="text" name="height-slide"></div>
                          <div><input type="text" name="main-height"></div>                                        
                      </div>
                    </div>';  
      }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==9) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                          <div><input type="text" name="width-left-slide"></div>
                          <div><input type="text" name="width-center-slide"></div>
                          <div><input type="text" name="width-right-slide"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                 
                          <div><input type="text" name="height-slide"></div>
                          <div><input type="text" name="main-height"></div>                      
                      </div>
                    </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==11) {
        $setHtml = '<div class="builder-container">
                        <div class="builder-left">                
                        <div class="input-container-left">
                            <div><input type="text" name="width-left-slide"></div>
                            <div><input type="text" name="width-right-slide"></div>        
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
                  <div><input type="text" name="width-left-slide"></div>
                  <div><input type="text" name="width-right-slide"></div>        
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
                  <div><input type="text" name="width-left-slide"></div>
                  <div><input type="text" name="width-center-slide"></div>
                  <div><input type="text" name="width-right-slide"></div>        
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
                <img src="./images/Fiix_3_point + DoubleEntrance.jpg" alt="Fiix_3_point + DoubleEntrance.jpg">
              </div>
              <div class="input-container">
                  <div><input type="text" name="width-left-slide"></div>
                  <div><input type="text" name="width-center-slide"></div>
                  <div><input type="text" name="width-right-slide"></div>        
              </div>
              </div>
              <div class="builder-right">                  
                  <div><input type="text" name="height-slide"></div>
                  <div><input type="text" name="main-height"></div>                                   
              </div>
            </div>';                                                                                                              
     }else{
       $setHtml = '<img class="img-responsive" src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" style = "max-width: 236px; max-height: 236px;"> ';
    }
    
    echo json_encode(array("width" => $width, "height" => $height, "clearwidth" => $clearwidth, "clearheight" => $clearheight, "setHtml" => $setHtml));
                 
?>