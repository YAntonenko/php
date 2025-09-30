<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isseseiv Töö - Yuna Antonenko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <h1>Iseseisev Töö</h1><br>



    <h3>Teksti ja tingimused</h3>
    <h5>LIHTNE TEKST</h5>
    <?php 
      echo "Juhan Liiv, Ääremärkused"; 
      echo '<br><br>';
    ?>
    




    <h3>Valemid</h3>
    <h5>INTRESS</h5>
    <?php    
      $pangas_raha = 2000;
      for ($i = 0; $i < 5; $i++){
      $pangas_raha = $pangas_raha * 1.2;
      }
      echo $pangas_raha." Lõpp summa viie aasta pärast";
      echo "<br><br>";
    ?>





    <h3>Tsüklid</h3>
    <h5>LOEND</h5>
    <?php
      $arv = 10;
      while ($arv > 0){
      echo $arv."<br>";
      $arv--;
      }
      echo "<br>";
    ?>



    <h3>Massiivid</h3>
    <h5>NALJAKAD LAUSED</h5>
    <?php
      $alus = array("mõis", "buss", " lia");
      $oeldis = array("on", "ei ole", "võibolla");
      $sihitis = array("armas", "suur", "ilus");
      echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>