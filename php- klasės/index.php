<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/css/main.css">
  <title>Garažai</title>
</head>

<body>
<?php
include 'classes/Car.php';      // Įtraukiamas Car šablonas - klasė
include 'classes/Worker.php';   // Įtraukiamas Worker šablonas - klasė
include 'classes/Garage.php';   // Įtraukiamas Garage šablonas - klasė

// Sukuriami Car klasės objektai, pagal Car šabloną - klasę
$car1 = new Car('BMW', '320d', 2000, 2.0);        //    Rašant new Car( ... ) yra
$car2 = new Car('BMW', '320', 2001, 2.0);         //  iškviečiamas Car klasės 
$car3 = new Car('Opel', 'Astra', 2002, 2.0);      //  __construct( ... ) metodas
$car4 = new Car('Toyota', 'Yaris', 2003, 1.6);    //  objekto kūrimo darbams atlikti

$worker1 = new Worker('Saulius', 'Balandis', 1200, 'Suvirintojas');
$worker2 = new Worker('Petras', 'Suskis', 800, 'Mechanikas');
$worker3 = new Worker('Varis', 'Kentas', 490, 'Elektrikas');
$worker4 = new Worker('Cinkas', 'Jorauskas', 4720, 'Direktorius');

// Sukuriami Garage klasės objektai, pagal Garage šabloną - klasę
$garageEiguliai = new Garage('Ašigalio g. 3', 3);
$garageSargenai = new Garage('Vytenių g. 20', 7);

// Naudojamas Garage objekto metodas 'addCar()', kuris aprašytas Gragage klasėje (šablone)

$garageEiguliai->addCar($car1);   //    Per parametrus, paduodame vis kitą Car klasės
$garageEiguliai->addCar($car2);   //  objektą: $car1, $car2, ...,  $carN;
$garageEiguliai->addCar($car3);   //  Taip vykdome, tą patį metodo funkcionalumą, bet vis su
$garageEiguliai->addCar($car4);   //  kitu Car klasės objektu

$garageEiguliai->addWorker($worker1);
$garageEiguliai->addWorker($worker2);
$garageEiguliai->addWorker($worker4);
$garageSargenai->addWorker($worker3);
$garageSargenai->addWorker($worker4);


// Naudojamas Garage objekto metodas 'toString()', kuris aprašytas Gragage klasėje (šablone)

echo $garageEiguliai->toString(); //    Galiausiai, iškviečiame Garage klasės metodą atvaizdavimui. Jis
echo $garageSargenai->toString(); // kviečiamas per skirtingą Garage klasės objektą, todėl rezultatai skiriasi.

?>
</body>

</html>