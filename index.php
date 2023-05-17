<?php
include_once __DIR__ . "/models/Computer.php";
include_once __DIR__ . "/models/Desktop.php";
include_once __DIR__ . "/models/Laptop.php";

include "db.php";


//var_dump($computers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=+, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <div class="container">
    <h1 class="text-center m-5">Computers</h1>
    <div class="row">
      <?php foreach ($computers as $computer): ?>
      <div class="col-4 g-2">
        <div class="card">
          <img class="card-img-top" src="<?php echo $computer->getImg(); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $computer->getTipoProdotto(); ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo "Mobo: " . $computer->getSchedaMadre(); ?></li>
            <li class="list-group-item"><?php echo "Psu: " . $computer->getPsu(); ?></li>
            <li class="list-group-item"><?php echo "Cpu: " . $computer->getCpu(); ?></li>
            <li class="list-group-item"><?php echo "RAM: " . $computer->getRam(); ?></li>
            <li class="list-group-item"><?php echo "Storage: " . $computer->getSsd(); ?></li>
            <li class="list-group-item"><?php echo "Gpu: " . $computer->getGpu(); ?></li>
            <li class="list-group-item"><?php echo "Case: " . $computer->getCase(); ?></li>
            <li class="list-group-item"><?php echo "Keyboard: " . $computer->getTastiera(); ?></li>
            <li class="list-group-item"><?php echo "Monitor: " . $computer->getMonitor(); ?></li>
            <li class="list-group-item"><?php echo "Mouse: " . $computer->getMouse(); ?></li>
            <li class="list-group-item"><?php echo "Dimensione Schermo: " . $computer->getDimensioneSchermo(); ?></li>
            <li class="list-group-item"><?php echo "Batteria: " . $computer->getBatteria(); ?></li>
            <li class="list-group-item"><?php echo "Ventole: " . $computer->getNumeroVentole(); ?></li>
            <li class="list-group-item"><?php echo "Scheda WiFi: " . $computer->getSchedaWifi(); ?></li>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>