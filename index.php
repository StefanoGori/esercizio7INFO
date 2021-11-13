<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Gioco dei fiammiferi</h1>
        <?php
        session_start();    
            echo"
                <form action=dati.php method=POST>
                    <label for=nome>Nome:</label>
                    <input type=text>
                    <input type=submit value=GIOCA>
                </form>
            "
        ?>
    </body>
</html>