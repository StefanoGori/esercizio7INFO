<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Gioco dei fiammiferi</h1>
        <?php
            session_start();
            $volta=0;
            $turno=0;
            $nome=$_POST['nome']=$_SESSION['nome'];
            $fiammiferi=13;
            function removeU(){
                $fiammiferi-=$fiammiferiU;
            }
            function removeC(){
                $fiammiferi-=$fiammiferiC;
            }
        ?>
    </body>
</html>