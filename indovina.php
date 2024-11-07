<?php
    session_start();
    $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['tentativi_fatti'])){
            $_SESSION['tentativi_fatti']=0;
        }
        if(!isset($_SESSION['tentativi_vinti'])){
            $_SESSION['tentativi_vinti']=0;
        }
        $stampa='';
        $num_rand=rand(1,20);
        $num_scelto=$_GET['num'];
        if($num_rand==$num_scelto){
            $stampa = $stampa ."<h2>Hai indovinato, il numero scelto è corretto ($num_rand)</h2>";
            $_SESSION['tentativi_vinti']++;
        }else{
            $stampa= $stampa . "<h2>Non hai indovinato, il numero era $num_rand</h2>";
        }
        $_SESSION['tentativi_fatti']++;

        $stampa=$stampa . "<br><br><h3>tentativi vinti = ".$_SESSION['tentativi_vinti']." tentativi fatti = ".$_SESSION['tentativi_fatti']."</h3>";
        $stampa = $stampa ."<br><br><a href='scelta.html'>Riprova</a><br><br><a href='resetta_session.php'> Riavvia la sessione</a>";
        echo $stampa;

    ?>
</body>
</html>