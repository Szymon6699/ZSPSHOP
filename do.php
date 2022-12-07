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
            

            
               
        
            ?>
            
                <a href="index.php"><input type="submit" name="przycisk" value="wyloguj"></a>
           
                <h1>Wystaw Oferte</h1>
                <form method="POST">
                    Nazwa<input type="text" name="nazwao"><br>
                    Opis<input type="text" name="opiso">
                </form>


           
        </div>

    </body>

</html>