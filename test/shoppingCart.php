<?php  
class shoppingCart {

//ΣΕΙΡΑ
protected $series; 
//ΧΡΩΜΑ         
protected $color; 
//ΤΖΑΜΙΑ          
protected $glazzing; 

//ΑΠΟΘΗΚΕΥΣΗ ΑΝΤΙΚΕΙΜΕΝΩΝ
protected $items	= array();
// ΑΠΟΘΗΚΗ ΚΩΔΙΚΟΥ
protected $ids	 	= array();
protected $position = 0;


function __construct() {
	
	$this->items = array();
    //$this->ids = array();
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

    public function getItemsArray() {
    	return $this->items;
}
}
?>