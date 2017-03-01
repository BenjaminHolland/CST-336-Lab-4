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
            echo "<div><div>DEBUG ITEMS LIST</div><div>";
            var_dump($items);
            echo "</div>";
        ?>
        <div id="confirm_divItemListHeader">Items</div>
        
        <div id="confirm_divItemList">
            <?PHP
                foreach($items as $item){
                    
                    $div="<div>";
                    $div.=$item['name'];
                    
                    if($item['name']=='Shirt'){
                        $shirtSize=$item['size'];
                        $div.=" $shirtSize";
                    }
                    $div.=" Color: ".$item['color'];
                    $div.=" Price: $".$item['price'];
                    $div.="</div>";
                    echo $div;
                }   
                //Display list of purchased items here.
            ?>
        </div>
        <div id="confirm_divOrderTotal">
            <div id="confirm_lblOrderTotal">Order Total</div>
            <?PHP
                $sum=0;
                foreach($items as $item){
                    $sum+=$item['price'];                    
                }
                echo "<div>Total: $$sum</div>";
                //Display order total;
            ?>
        </div>
    </body>
</html>