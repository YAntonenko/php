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
            <h1>Harjutus 8</h1>
            <?php
                
                echo date('d.m.Y G:i', time());
                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='number' name='aasta' id='aasta' value='aasta' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['aasta'])){
                    echo $_GET['aasta'] - date('Y')." aastat vana";
                }
                echo "<br>";

                $koolilopp = date_create('2024-06-17');
                $tana = date_create('now');
                $diff = date_diff($tana, $koolilopp);
                echo "Kooliaasta lõpuni on veel ".$diff->format('%R%a')." päeva";

                echo "<br>";
                
                if (date('n') >= 3 && date('n') <= 5){
                    echo "<img src='pic/kevad.jpg' alt='kevad' width='300' height='300'>";
                } else if (date('n') >= 6 && date('n') <= 8){
                    echo "<img src='pic/suvi.jpg' alt='suvi' width='300' height='300'>";
                } else if (date('n') >= 9 && date('n') <= 11){
                    echo "<img src='pic/sugis.jpg' alt='sügis' width='300' height='300'>";
                } else {
                    echo "<img src='pic/talv.jpg' alt='talv' width='300' height='300'>";
                }
            ?>
        </div>















    <div class="container">
      <h1>Harjutus 9</h1>
            <?php
                
                echo "<form action='#' method='get'>
                    <input type='text' name='nimi' id='nimi' value='nimi' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['nimi'])){
                    echo "Tere, ".ucfirst(strtolower($_GET['nimi']));
                }

                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='tekst' id='tekst' value='tekst' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['tekst'])){
                    for ($i = 0; $i < strlen($_GET['tekst']); $i++){
                        echo $_GET['tekst'][$i].".";
                    }
                }

                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='ropp' id='ropp' value='ropp' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['ropp'])){
                    $ropp = $_GET['ropp'];
                    $asendatav = array('puts', 'lits', 'taun', 'ropp');
                    $asendus = str_replace($asendatav, '****', $ropp);
                    echo $asendus;
                }

                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='nimi' id='nimi' value='nimi' />
                    <input type='text' name='perenimi' id='perenimi' value='perenimi' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['nimi']) && isset($_GET['perenimi'])){
                    $imeliktaht = array('ä', 'ö', 'ü', 'õ', 'š', 'ž');
                    $asendus2 = array('a', 'o', 'u', 'o', 's', 'z');
                    $nimi = str_replace($imeliktaht, $asendus2, $_GET['nimi']);
                    $perenimi = str_replace($imeliktaht, $asendus2, $_GET['perenimi']);
                    echo $nimi.".".$perenimi."@hkhk.edu.ee";
                }
            ?>
        </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>