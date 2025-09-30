<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <h1>Harjutus 13</h1>
            <?php

                echo '<form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="minu_fail"><br>
                <input type="submit" value="Lae üles!">
                </form>';

                if (isset($_FILES['minu_fail'])){
                    $failinimi = $_FILES['minu_fail']['name'];
                    $faili_tuup = $_FILES['minu_fail']['type'];
                    $faili_ajutine_nimi = $_FILES['minu_fail']['tmp_name'];
                    $faili_veakood = $_FILES['minu_fail']['error'];
                    $lubatud_tuubid = array('image/jpeg', 'image/jpg');
                    if (in_array($faili_tuup, $lubatud_tuubid)){
                        if ($faili_veakood === 0){
                            $faili_nimi = uniqid('', true).'.'.$failinimi;
                            $faili_sihtkoht = __DIR__ . '/pic/' . $faili_nimi;
                            move_uploaded_file($faili_ajutine_nimi, $faili_sihtkoht);
                            echo "Faili üleslaadimine õnnestus!";
                            echo "<a href='".$faili_sihtkoht."'><img src='".$faili_sihtkoht."' class='img-fluid'/></a>";
                        } else {
                            echo "Tekkis viga faili üleslaadimisel!";
                        }
                    } else {
                        echo "Vale failitüüp!";
                    }
                }

                ?>
        </div>


        <?php
$imagedir = 'pic/';  

function suvaPilt($dir) {
    $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);  
    if (count($images) > 0) {
        $randomImage = $images[array_rand($images)];  
        return $randomImage;
    }
    return ''; 
}

function pisipilt($dir, $columns = 3) {
    $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);  
    if (empty($images)) {
        echo "No images found in the directory!";
        return;
    }
    
    $rowCount = ceil(count($images) / $columns);  
    for ($i = 0; $i < $rowCount; $i++) {
        echo '<div class="row">';
        for ($j = 0; $j < $columns; $j++) {
            $index = $i * $columns + $j;
            if ($index < count($images)) {
                echo '<div class="col">';
                echo '<a href="' . $images[$index] . '" target="_blank">';
                echo '<img src="' . $images[$index] . '" class="thumbnail" onclick="pisipiltSuureks(\'' . $images[$index] . '\');">';
                echo '</a>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}
?>


    <div class="container">
        <h1>Harjutus 14</h1>

        <h2>Suvaline pilt:</h2>
        <?php 
            $randomImage = suvaPilt($imagedir); 
            if ($randomImage != 'pic/') {
                echo '<img src="' . $randomImage . '" style="max-width: 100%;">';
            } else {
                echo 'No images found!';
            }
        ?>

        <h2>Pisipildid veergudes:</h2>
        <?php pisipilt($imagedir, 3); ?> 
    </div>

    <script>
        function pisipiltSuureks(imageSrc) {
            var largeImageWindow = window.open('', '_blank');
            largeImageWindow.document.write('<img src="' + imageSrc + '" style="max-width: 100%;">');
        }
 
 
 
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>