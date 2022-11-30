<html>

    <head>
        
        <link rel="stylesheet" href="style.css">

   </head>

    <body>

        <div class="f1">
            <h1>REJESTRACJA</h1>

            <form method="POST">
            login <input type="text" name="login"><br>
            haslo <input type="password" name="haslo"><br>
            e-mail <input type="text" name="e-mail"><br>
            <input type="submit" name="submit">
            

        </div>
         <?php
            
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            print_r($_POST);
            $sql="INSERT INTO users (`login`,`password`,`e-mail`) VALUES ('".$_POST['login']."','".$_POST['haslo']."','".$_POST['e-mail']."' ) ";
            $res = $con->query($sql);
            // $offers = $res->fetch_array(MYSQLI_ASOC);
            // $res->fetch_all();

         ?>

    </body>

    

</html>