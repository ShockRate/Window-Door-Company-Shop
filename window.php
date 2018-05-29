<?php
class Window{
 
    // database connection and table name
    private $conn;
    private $table_name = "cart_items";
 
    // object properties / ΥΛΙΚΑ ΚΥΦΩΜΑΤΟΣ

    //ΓΕΝΙΚΑ ΣΤΟΙΧΕΙΑ ΠΑΡΑΓΓΕΛΙΑΣ
    //ΚΩΔΙΚΟΣ ΠΡΟΙΝΤΟΣ
    protected $product_id; 
    //ΣΕΙΡΑ ΠΡΟΙΝΟΣ
    protected $series; 
    //ΧΡΩΜΑ         
    protected $color; 
    //ΤΖΑΜΙΑ          
    protected $glazzing; 

    //ΞΕΧΩΡΡΙΣΤΑ ΣΤΟΙΧΕΙΑ ΚΑΘΕ ΕΓΡΑΦΗΣ
    // ΑΥΞΩΝ ΑΡΙΘΜΟΙΣ
    protected $id; 
    //ΤΥΠΟΣ ΚΟΥΦΩΜΑΤΟΣ     
    protected $type; 
    //ΕΙΚΟΝΑ
    protected $imgURL;
    //ΠΟΣΟΤΗΤΑ
    protected $quantity;
    //ΠΛΑΤΟΣ
    protected $width;
    //ΥΨΟΣ
    protected $height;
    //ΣΩΛΗΝΑΣ          
    protected $additionalProf;  
    //ΡΟΛΑ
    protected $rolls;
    //ΦΙΛΛΑΡΑΚΙΑ ΡΟΛΟΥ           
    protected $screen;
    //ΜΗΧΑΝΙΣΜΟΣ ΡΟΛΟΥ         
    protected $mechanism;  
    //ΣΙΤΑ    
    protected $sita;   
    //ΠΑΡΑΤΗΡΗΣΕΙΣ
    protected $infoText;

    
    //CONSTRUCTOR ΓΙΑ ΝΑ ΦΤΙΑΞΕΙ ΕΝΑ ΒΑΣΙΚΟ ΠΑΡΑΘΥΡΟ (ΠΕΡΝΑΕΙ ΑΑ, ΤΥΠΟΛΟΓΙΑ, ΠΟΣΟΤΗΤΑ, ΦΑΡΔΟΣ, ΥΨΟΣ, ΤΖΑΜΙΑ, ΧΡΩΜΑ, ΣΕΙΡΑ)

    public function __construct($id, $type, $quantity, $width, $height, $glazzing, $color, $series) {

            $this->id       = $id;
            $this->type     = $type;
            $this->quantity = $quantity;
            $this->width    = $width;
            $this->height   = $height;
            $this->glazzing = $glazzing;
            $this->color    = $color;
            $this->series   = $series;
    }

    
    public function setAdditionalProf($additionalProf) {
            $this->additionalProf = $additionalProf;
    }
    public function setRolls($rolls) {
            $this->rolls = $rolls;
    }
    public function setScreen($screen) {
            $this->screen = $screen;
    }
    public function setMechanism($mechanism) {
            $this->mechanism = $mechanism;
    }
    public function setSita($sita) {
            $this->sita = $sita;
    }
    public function setInfoText($infoText) {
            $this->infoText = $infoText;
    }

    // ΕΠIΣΤΡΕΦΟΥΜΕ ΤΙΣ ΜΕΤΑΒΛΗΤΕΣ
    public function getId() {
            return $this->id;
    }
    public function getType() {
            return $this->type;
    }
    public function getImgURL(){
            return 'images/'.$this->type.'.jpg';
    }
    public function getQuantity() {
            return $this->quantity;
    }
    public function getWidth() {
            return $this->width;
    }
    public function getHeight() {
            return $this->height;
    }
    public function getGlazzing() {
            return $this->glazzing;
    }
    public function getColor() {
            return $this->color;
    }
    public function getSeries() {
            return $this->series;
    }
    public function getAdditionalProf() {
            return $this->additionalProf;
    }
    public function getRolls() {
            return $this->rolls;
    }
    public function getScreen() {
            return $this->screen;
    }
    public function getMechanism() {
            return $this->mechanism;
    }
    public function getSita() {
            return $this->sita;
    }
    public function getInfoText() {
            return $this->infoText;
    }

}

 class testWindow extends Window{

//ΤΕΣΤΙΝΓΚ CONSTRUCTOR ΓΙΑ ΔΟΚΙΜΕΣ
    public function __construct($id, $type, $quantity, $width, $height) {

            $this->id       = $id;
            $this->type     = $type;
            $this->quantity = $quantity;
            $this->width    = $width;
            $this->height   = $height;
            
            
        }
    // public function __construct(){
        
    // }

    public function setValues($id, $type, $quantity, $width, $height) {

            $this->id       = $id;
            $this->type     = $type;
            $this->quantity = $quantity;
            $this->width    = $width;
            $this->height   = $height;
            
            
        }
 }  

/* ΚΩΔΙΚΑΣ ΓΙΑ ΧΡΗΣΗ DATABASE 

    constructor
    protected function __construct($db){
        $this->conn = $db;
    }
    */
?>

 