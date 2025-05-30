<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Matemaatika</h1>
    <form action="" method="get">
        arv 1 <input type="number" name="nr1"><br>
        arv 2 <input type="number" name="nr2"><br>
        <input type="submit" value="Arvuta">

    </form>
    <?php
        // ülesanne 3
        if(!empty($_GET['nr1']) && !empty($_GET['nr2'])){
            $arv1 = $_GET['nr1'];
            $arv2 = $_GET['nr2'];
            if ($arv2==0) {
                $tehe = "Nulliga ei saa jagada!";
            }else{
                $tehe = $arv1 / $arv2;
            }
            echo "Vastus: $tehe";

        }

    
        // Ülesanne 2
        $fname = "Mari";
        $lname = "Maasikas";
        $fname." ".$lname;
        $age = 20;
        $height = 1.60;

        echo "<p>".$fname." on ".$age." aastane ja ".$height." pikk </p>";
        // kui kasutan topelt " siis ei pea punkte kasutama alumine näide
        echo "<p> $fname  on $age aastane ja $height pikk </p>";





        // Ülesanne 1
        // tekst juttumärkidesse
        echo "<h1>Tere Maailm</h1>";
        
        /*
            see
            mitmerealine
            kommentaar
            CTRL+Ä
        */
        // Kahekordsed jutumärgid
        echo "Dr. Alban - \"It's My Life\"";
        echo "<br>";
        // ühekordsed jutumärgi
        echo 'Dr. Alban - "It\'s My Life"';

    ?>


    
</body>
</html>