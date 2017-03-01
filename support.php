<html>
    <title>
        <?php
            session_start();
            $_SESSION['DisplayString']=rand();
        ?>
    </title>
    <body class='ContentContainer'>
        <div class='Header'>
            
        </div>
        <div class='ImageContainer'>
            <!--TODO: Find better image-->
            <img id="imgInspiration" src='https://www.google.com/images/branding/googlelogo/2x/googlelogo_dark_color_272x92dp.png'/>
        </div>
        <div class='FormContainer'>
            <form id='frmSupport' action='./confirm.php' method='POST'>
                <div id='support_divMugItem' class='support_ItemLine'>
                    <input id='support_cbxMug' class='support_itemEnabler' name='orderedMug'  type='checkbox'>Mug</input>
                    <input id='support_colMug' class='support_itemColorer' name='mugColor' type='color'>Mug Color</input>
                    <div id='support_lblMugPrice' class='support_itemPrice'>$10</div>
                </div>
                <div id='support_divPenItem' class='support_ItemLine'>
                    <input id='support_cbxPen' class='support_itemEnabler' name='orderedPen' type='checkbox'>Pen</input>
                    <input id='support_colPen' class='support_itemColorer' name='penColor' type='color'>Pen Color</input>
                    <div id='support_lblPenPrice' class='support_itemPrice'>$2</div>
                </div>
                <div id='support_divShirtItem' class='support_ItemLine'>
                    <input id='support_cbxShirt' class='support_itemEnabler' name='orderedShirt' type='checkbox'>Pen</input>
                    <input id='support_colShirt' class='support_itemColorer' name='shirtColor' type='color'>Pen Color</input>
                    <div id='support_szShirt'>
                        <input id='support_szShirt_S' type='radio' name='shirtSize'  value='S'>Small</input>
                        <input id='support_szShirt_S' type='radio' name='shirtSize'  value='M' checked='checked'>Medium</input>
                        <input id='support_szShirt_S' type='radio' name='shirtSize'  value='L'>Large</input>
                    </div>
                    <div id='support_lblShirtPrice' class='support_itemPrice'>$15</div>
                </div>
                <button id='btnSubmit'>Submit</button>
            </form>
        </div>
    </body>
</html>