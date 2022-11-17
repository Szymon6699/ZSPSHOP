<html>

    <head>
        
        <link rel="stylesheet" href="style.css">

   </head>

    <body>

        <div class="f1">
            <h1>REJESTRACJA</h1>

            <form method="POST">
            login <input type="text" name="login"><br>
            haslo <input type="text" name="haslo"><br>
            e-mail <input type="text" name="e-mail"><br>
            <input type="submit" name="submit">
            

        </div>
         <?php
            
            $con = new mysqli("127.0.0.1","root","pass","ZSPSHOP");
            print_r($_POST);
            $sql="INSERT INTO users ('login','haslo','e-mail') VALUES ("login","haslo" ) "
            // $res = $con->query($sql);
            // $offers = $res->fetch_array(MYSQLI_ASOC);
            // $res->fetch_all();

         ?>

    </body>

    

</html>