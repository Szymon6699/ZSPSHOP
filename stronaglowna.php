<html>

    <head>

        <link rel="stylesheet" href="style.css">


    </head>

    <body>
        
        <div class="sg1">

            <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            echo 'Zalogowany jako: <b>'.$_SESSION["user_login"].'</b>';

            // echo 'konto -> '.$_POST['login'].'';        
        
            ?>
                
        </div>

    </body>

</html>