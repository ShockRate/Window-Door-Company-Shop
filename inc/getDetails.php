<?php
session_start();
  
  $windowIndex  = $_POST['windowIndex'] -1;

  $width        = $_SESSION['Cart'][$windowIndex]['Width'];
  $height       = $_SESSION['Cart'][$windowIndex]['Height'];
  $clearwidth   = $_SESSION['Cart'][$windowIndex]['ClearWidth'];
  $clearheight  = $_SESSION['Cart'][$windowIndex]['ClearHeight'];

  $dimCase1      = $_SESSION['Cart'][$windowIndex]['dimCase1'];
  $dimCase2      = $_SESSION['Cart'][$windowIndex]['dimCase2'];
  $dimCase3      = $_SESSION['Cart'][$windowIndex]['dimCase3'];
  $dimCase4      = $_SESSION['Cart'][$windowIndex]['dimCase4'];
  $dimCase5      = $_SESSION['Cart'][$windowIndex]['dimCase5'];
  $dimMiddle     = $_SESSION['Cart'][$windowIndex]['DimMiddle'];
  $dimUp         = $_SESSION['Cart'][$windowIndex]['DimUp'];
  

  $setHtml = '';
  $_SESSION['curentClass'] = $_SESSION['Cart'][$windowIndex]['Class'];
  $type = $_SESSION['Cart'][$windowIndex]['Type'];


if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==2){
       $setHtml =  '<div class="builder-container">
                      <div class="builder-left">             
                        <div class="input-container">
                            <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                            <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>        
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
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase3" value="'.$dimCase2.'"></div>
                          <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>        
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
                          <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                       
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
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                         
                          <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                                                     
                      </div>
                    </div>';   
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==7) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">              
                      <div class="input-container">
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>        
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                                      
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
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>
                          <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>        
                      </div>
                      </div>
                      <div class="builder-right">                  
                          <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                                        
                      </div>
                    </div>';  
      }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==9) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                      <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                      <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>
                      <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>          
                      </div>
                      <br>
                      <div>
                        <img src="images/'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg" alt="'.$_SESSION['Cart'][$windowIndex]['Type'].'.jpg">
                      </div>
                      </div>
                      <div class="builder-right">                 
                          <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                          <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                       
                      </div>
                    </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==11) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                        <div class="input-container-left">
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>      
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
                  <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                  <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>        
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
              
                  <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                  <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>
                  <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>        
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
                  <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                  <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>
                  <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>        
              </div>
              </div>
              <div class="builder-right">                  
                  <div><input type="number" id="dimUp" name="dimUp" value="'.$dimUp.'"></div>
                  <div><input type="number" id="dimMiddle" name="dimMiddle" value="'.$dimMiddle.'"></div>                                     
              </div>
            </div>'; 
     }else if (isset($_SESSION['curentClass']) && $_SESSION['curentClass']==15) {
        $setHtml = '<div class="builder-container">
                      <div class="builder-left">                
                      <div class="input-container">
                          <div><input type="number" id="dimCase1" name="dimCase1" value="'.$dimCase1.'"></div>
                          <div><input type="number" id="dimCase2" name="dimCase2" value="'.$dimCase2.'"></div>
                          <div><input type="number" id="dimCase3" name="dimCase3" value="'.$dimCase3.'"></div>
                          <div><input type="number" id="dimCase4" name="dimCase4" value="'.$dimCase4.'"></div>        
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