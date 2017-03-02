<html>
    <head>
        <style type="text/css">
            @import 'main.css';
        </style>
        <?php
            $customerName=$_POST['name'];
            $customerAge=$_POST['age'];
            $customerCandidate=$_POST['candidate'];
            
            $items=array();
            
            if(array_key_exists('orderedMug',$_POST)){
                array_push($items,array('name'=>'Mug','price'=>10.00,'color'=>$_POST['mugColor']));
            }
            if(array_key_exists('orderedPen',$_POST)){
                array_push($items,array('name'=>'Pen','price'=>2.00,'color'=>$_POST['penColor']));
            }
            if(array_key_exists('orderedShirt',$_POST)){
                array_push($items,array('name'=>'Shirt','price'=>15.00,'color'=>$_POST['shirtColor'],'size'=>$_POST['shirtSize']));
            }
        ?>
    <title>
        Order Confirmation
        
    </title>    
        </head>
    
    <body id="confirm_body">
        <?php

            if($customerAge<18){
                echo "<div id='confirm_divAgeError'>";
                echo "You are too young to be a potato.";
                echo "</div>";
            }else{
                echo "<div id='confirm_divItemListContainer'>";
                echo "<div id='confirm_divItemListHeader'>Items</div>";
                echo "<div id='confirm_divItemList'>";
                foreach($items as $item){
                    
                    $div="<div class='confirm_divItem'>";
                    $div.=$item['name'];
                    
                    if($item['name']=='Shirt'){
                        $shirtSize=$item['size'];
                        $div.=" ($shirtSize)";
                    }
                    $div.=" Color: ".$item['color'];
                    $div.=" Price: $".$item['price'];
                    $div.="</div>";
                    echo $div;
                }
                
                //Display list of purchased items here.
            
                echo "</div>";
        echo "</div>";
        echo "<div id='confirm_divOrderTotal'>";
        
        echo "<div id='confirm_lblOrderTotal'>Order Total</div>";
            
                $sum=0;
                foreach($items as $item){
                    $sum+=$item['price'];                    
                }
                echo "<div id='confirm_lblTotal'>Total: $$sum</div>";
                //Display order total;
            
        echo "</div>"; 
            }
            ?>
    
        
    </body>
</html>