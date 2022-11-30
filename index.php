<html>

    <head>
        
        <link rel="stylesheet" href="style.css">

   </head>

    <body>

        <div class="f1">
            <h1>LOGOWANIE</h1>
            <form method="POST" action="stronaglowna.php">
            login <input type="text" name="login"><br>
            haslo <input type="password" name="password"><br>
            <input type="submit" name="submit"><br>
            <b><p><a href="rejestracja.php">REJESTRACJA</a></p><b>
            </form>

        </div>
         <?php
            
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            print_r($_POST);
            $sql = "SELECT * FROM users WHERE login='".$_POST['login']."'";
            $res = $con->query($sql);
            // $offers = $res->fetch_array(MYSQLI_ASOC);
            // $res->fetch_all();

         ?>

    </body>

    

</html>