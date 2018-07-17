<?php  $i = 1;
 echo $series;
 $tableBuilder   = new tableBuilder;
?>

<DIV class="cart">   
    <?php if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])){
                        foreach ($_SESSION['Cart'] as $arr) { 
    ?>
        <div class="cart-item">
             <div class="table-cell" >
                <?php echo $tableBuilder->_printImg($arr['Type'],$arr['Class'],$arr['dimCase1'],$arr['dimCase3'],$arr['dimCase5'],$arr['DimUp'],$arr['DimMiddle'],$arr['dimCase2'],$arr['dimCase4']);
                    ?>
                 <p><?php echo $arr['Name'];?></p>   
             </div>               
        </div>     
    <?php }
    }
    ?>
</DIV>
        