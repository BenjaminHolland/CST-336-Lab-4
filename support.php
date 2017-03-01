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
                <button id='btnSubmit'>Submit</button>
            </form>
        </div>
    </body>
</html>