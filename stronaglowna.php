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
            $sql="SELECT * FROM offers";
            $res = $con->query($sql);  

            
               
        
            ?>
            <a href="do.php"><input type="submit" name="przycisk" value="wystaw"></a>
            <a href="index.php"><input type="submit" name="przycisk" value="wyloguj"></a>
           
               <h1>Lista ofert</h1>

           
        </div>

    </body>

</html>