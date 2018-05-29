<?php
class testWindow extends window{

//ΤΕΣΤΙΝΓΚ CONSTRUCTOR ΓΙΑ ΔΟΚΙΜΕΣ
    // public function __construct($id, $type, $quantity, $width, $height) {

    //         $this->id       = $id;
    //         $this->type     = $type;
    //         $this->quantity = $quantity;
    //         $this->width    = $width;
    //         $this->height   = $heigth;
            
    //         $this->$imgURL  = $_SERVER['DOCUMENT_ROOT'].'/test-shop/images/'.$type.'.jpg';
    //     }

	public function __construct(){
		
	}
        public function setValues($id, $type, $quantity, $width, $height) {

            $this->id       = $id;
            $this->type     = $type;
            $this->quantity = $quantity;
            $this->width    = $width;
            $this->height   = $heigth;
            
            $this->$imgURL  = $_SERVER['DOCUMENT_ROOT'].'/test-shop/images/'.$type.'.jpg';
        }

 }
 ?>