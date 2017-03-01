<html>
    <title>
        Order Confirmation
        <?php
            session_start();
            
        ?>
    </title>
    <body id="confirm_body">
        <div id="confirm_divItemListHeader">Items</div>
        <div id="confirm_divItemList">
            <?PHP
                //Display list of purchased items here.
            ?>
        </div>
        <div id="confirm_divOrderTotal">
            <div id="confirm_lblOrderTotal">Order Total</div>
            <?PHP
                echo $_SESSION['DisplayString'];
                //Display order total;
            ?>
        </div>
    </body>
</html>