<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
       
    <h1>Harjutus 07</h1>
    <?php

    ?>

    <?php

        function tervita(){
            echo "Tere päikesekeskmine";
        }
        function uudiskiri(){
            echo '<div class="row">
            <div class= "col-sm-2">
                <form action="">
                    <input type ="text" placeholder="Liitu uudiskirjaga">
                     <input type ="submit" value="Liitu !" class="btn btn-success">
                </form>
            </div>
        </div>';
        }

        function createUser($u){
            $lu = strtolower($u);
            echo $lu. "@hkhk.edu.ee";
            echo "<br>";
            $p = substr(password_hash($lu, PASSWORD_BCRYPT),7,7);
            echo $p;
        }


        function vahemikus($a1, $a2, $s){
            for ($i=$a1; $i <= $a2; $i=$i+$s){
                echo $i;
            }
        }

        function rectangles($a1, $a2){
            return $a1 * $a2;
        }

        function ik($ik){
            $pikkus = strlen($ik);
            if ($pikkus==11){
                if (intval($ik[0]%2==0)){
                    $vastus="Mees";
                }else{
                    $vastus="Naine";
                }
            }else{
                return $vastus="IK vale pikkusega";
            }
            return $vastus;
        }
        

        function headMotted(){
            $alused = array("Jüri", "Mari", "Uku");
            $oeldised = array("armastab", "viskab", "tõmbab");
            $sihtised = array("mind", "sind", "teda");

            echo $alused[array_rand($alused)]." ".$oeldised[array_rand($oeldised)]." ".$sihtised[array_rand($sihtised)];
        }
        

        echo headMotted();
        echo "<br>";

        tervita();
        uudiskiri();
        createUser("Yuna");
        echo "<br>";
        vahemikus(2,20,3);
        echo "<br>";
        echo ik("38011064711");
        ?>

    <h2> 3</h2>
    <form>
        Külg 1<input type="number" name="kylgi1" value="10">
        Külg 2<input type="number" name="kylgi2" value="10">
        <input type="submit" value="Arvuta pindala">
    </form>
    <?php
   
        echo "Pindala". rectangles($_GET['kylgi1'],$_GET['kylgi2']);
        echo "<br>";
 ?>


    
    




<h2>1</h2>

    <?php
    $t = array("juuli", "maali", "kati");
    $p = array("ago", "marko", "mati");

    for ($i=0; $i < count($t); $i++){
        echo $t[$i]." - ".$p[$i]. "<br>";
    }
    echo "<br>";
        for ($i=1; $i <= 100 ; $i++){
            if  ($i%3==0){
                echo $i." ";

             }
        }
    echo "<br>";
    for ($i=10; $i >0 ; $i--){

    }

    ?>




    <h1>Harjutus 6</h1>
    <?php

//////////////////////////////////////////


        for ($i=10; $i < 0; $i--){
            echo $i."<br>";
        }


        for ($i=1; $i <= 100; $i++){
            echo "*";
            if ($i%10==0){
                echo "<br>";
            }
        }


        for ($i=1; $i <= 10; $i++){
            echo str_repeat("*", $i);
            echo "<br>";
        }

    echo "<br>";

        for ($i=1; $i <= 100; $i++){
            echo $i.". ";
            if ($i%10==0){
                echo "<br>";
            }
        }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>