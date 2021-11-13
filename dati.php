<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Gioco dei fiammiferi</h1>
        <?php
            session_start();
            $nome=$_SESSION['nome'];
            
            if(!isset($_SESSION['fiammiferiU'])){
                $_SESSION['fiammiferiU']=0;     
            }
            if( $_SESSION['volta']==0){
                $_SESSION['fiammiferi']=13;
                $_SESSION['turno']=1;
                $_SESSION['volta']++;
            }
            else{
                $_SESSION['fiammiferi']-=$_POST['fiammiferiU']+(4-$_POST['fiammiferiU']);
                $_SESSION['turno']++;
             }   
            
            $fiammiferi=$_SESSION['fiammiferi'];
                echo"
                        GIOCATORE:
                        $nome
                        <br>
                        <br>
                        TURNO:
                        $_SESSION[turno]

                ";
                if($_SESSION['turno']>1){
                    $fiammiferiC=4-$_POST['fiammiferiU'];
                    echo"
                        <br>
                        <br>
                        hai tolto:$_POST[fiammiferiU] fiammiferi
                        <br>
                        io tolgo:$fiammiferiC fiammiferi
                        <br>
                    ";
                    
                }
                for($i=0;$i<$fiammiferi;$i++){
                    echo"
                        <img src=images/fiammiferi.jpg>
                    ";
                }

                if($fiammiferi==1){
                    echo"
                    Spiacente hai perso
                    <br>
                    <form action=index.php method=POST>
                        <input type=submit value=RIGIOCA>
                    </form>
                    ";
                }
                else{
                    echo"
                        <form action=dati.php method=POST>
                            <label for=fiammiferiU>Scegli quanti ne vuoi togliere</label>
                            <select name=fiammiferiU>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                            </select>
                            <br>
                            <input type=submit value=TOGLI>
                        </form>
                    ";
                }
        ?>
    </body>
</html>