<html>
    <title>
        Order Confirmation
        <?php
            $customerName=$_POST['name'];
            $customerAge=$_POST['age'];
            $customerCandidate=$_POST['candidate'];
            
            $items=array();
            
            if($_POST['orderedMug']){
                array_push($items,array('name'=>'Mug','price'=>10.00,'color'=>$_POST['mugColor']));
            }
            if($_POST['orderedPen']){
                array_push($items,array('name'=>'Pen','price'=>2.00,'color'=>$_POST['penColor']));
            }
            if($_POST['orderedShirt']){
                array_push($items,array('name'=>'Shirt','price'=>15.00,'color'=>$_POST['shirtColor'],'size'=>$_POST['shirtSize']));
            }
        ?>
    </title>
    <body id="confirm_body">
        <?php
            var_dump($items);
        ?>
        <div id="confirm_divItemListHeader">Items</div>
        <div id="confirm_divItemList">
            <?PHP
            
                //Display list of purchased items here.
            ?>
        </div>
        <div id="confirm_divOrderTotal">
            <div id="confirm_lblOrderTotal">Order Total</div>
            <?PHP
                
                //Display order total;
            ?>
        </div>
    </body>
</html>