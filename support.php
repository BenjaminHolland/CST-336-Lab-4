<html>
    <head>
        <title>
            Support!
        </title>
        <style>
            @import 'main.css';
        </style>
        <?php
            session_start();
            $_SESSION['DisplayString']=rand();
        ?>
    </head>
    <body class='ContentContainer'>
        <div class='Header'>
            SUPPORT SOMEONE
        </div>
        <div class='ImageContainer'>
            <!--TODO: Find better image-->
            <img id="imgInspiration" src='https://www.google.com/images/branding/googlelogo/2x/googlelogo_dark_color_272x92dp.png'/>
        </div>
        <div class='FormContainer'>
            <form id='frmSupport' action='./confirm.php' method='POST'>
                <div id="support_divInfo">
                    <div class='support_InfoLine'>
                        <div class='support_InfoLabel'>Name:</div>
                        <input id='support_txtName' required='required' name='name' type='text' pattern="[A-Za-z ]+"></input>
                    </div>
                        <div class='support_InfoLine'>
                        <div class='support_InfoLabel'>Age:</div>
                        <input id='support_nbrAge' name='age' required='required' type='number'></input>
                    </div>
                </div>
                <div id='support_divCanditate'>
                    <div class='support_CandidateLine'>
                        <div class='support_CandidateLabel'>Candidate: </div>
                        <select id='support_obxCandidates' name='candidate'>
                            <option value="Mr. Peanut">Mr. Peanut</option>
                            <option value="Saladin, Geinie of the Ages">Saladin, Geinie of the Ages</option>
                            <option value="Alhambramago: The World Eater">Alhambramago: The World Eater</option>
                        </select>
                    </div>
                </div>
                <div id='support_divMerch'>
                    <div id='support_divMugItem' class='support_ItemLine'>
                        <div id='support_lblMugEnable'>Mug</div>
                        <input id='support_cbxMug' class='support_itemEnabler' name='orderedMug'  type='checkbox'></input>
                        <input id='support_colMug' class='support_itemColorer' name='mugColor' type='color'></input>
                        <div id='support_lblMugPrice' class='support_itemPrice'>$10</div>
                    </div>
                    <div id='support_divPenItem' class='support_ItemLine'>
                        <div id='support_lblPenEnable'>Pen</div>
                        <input id='support_cbxPen' class='support_itemEnabler' name='orderedPen' type='checkbox'></input>
                        <input id='support_colPen' class='support_itemColorer' name='penColor' type='color'></input>
                        <div id='support_lblPenPrice' class='support_itemPrice'>$2</div>
                    </div>
                    <div id='support_divShirtItem' class='support_ItemLine'>
                        
                        <div id='support_lblShirtEnable'>Shirt</div>
                        <input id='support_cbxShirt' class='support_itemEnabler' name='orderedShirt' type='checkbox'></input>
                        <input id='support_colShirt' class='support_itemColorer' name='shirtColor' type='color'>Shirt Color</input>
                        <div id='support_szShirt'>
                            <input id='support_szShirt_S' type='radio' name='shirtSize'  value='S'>Small</input>
                            <input id='support_szShirt_S' type='radio' name='shirtSize'  value='M' checked='checked'>Medium</input>
                            <input id='support_szShirt_S' type='radio' name='shirtSize'  value='L'>Large</input>
                        </div>
                        <div id='support_lblShirtPrice' class='support_itemPrice'>$15</div>
                    </div>
                </div>
                <div id='support_divSubmit'>
                    <input id='btnSubmit' type='submit'></input>
                </div>
            </form>
        </div>
    </body>
</html>