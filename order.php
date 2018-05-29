<?php  
class order {

//ΚΩΔΙΚΟΣ πΑΡΑΓΓΕΛΙΑς
protected $id;  
//ΣΕΙΡΑ
protected $series; 
//ΧΡΩΜΑ         
protected $color; 
//ΤΖΑΜΙΑ          
protected $glazzing; 

//ΑΠΟΘΗΚΕΥΣΗ ΑΝΤΙΚΕΙΜΕΝΩΝ
protected $items	= array();
// ΑΠΟΘΗΚΗ ΚΩΔΙΚΟΥ
 
protected $position = 0;



function __construct() {

}

function setOrder($series, $glazzing, $color) {
    
    $this->id = time();
    $this->series = $series;
    $this->glazzing = $glazzing;
    $this->color = $color;
}

    public function getId() {
        return $this->id;
}
     public function getSeries() {
        return $this->series;
}
     public function getGlazzing() {
        return $this->glazzing;
}
     public function getColor() {
        return $this->color;
}



// Returns a Boolean indicating if the cart is empty:
public function isEmpty() {
    return (empty($this->items));
}


// Adds a new item to the cart:
public function addItem(window $window) {

    // O ΑΥΞΟΝ ΑΡΙΘΜΟΣ ΤΗΣ ΚΑΤΑΣΚΕΥΗΣ
    $id = $window->getId();
    // Add
    
	//$this->items[$id] = array('item' => $item, 'qty' => 1);
	//$this->items[$id] = $window;
	// $this->ids[] = $id; // Store the id, too!
    array_push($this->items,$window);


    } // End of addItem() method.

    

}
?>