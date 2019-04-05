<?php
function createFriendship($friend1, $friend2){
  $friend1->makeFriend($friend2);
  $friend2->makeFriend($friend1);
}

$vehicles = [
  new Submarine('Kursk', 'Whale', 1000, 'Armored', 'Unique property value'),
  new SpeedBoat('Bodge', 'Viper', 1, 'Propeller'),
  new MotorBike('Suzuki', 'Donoranzo', 'Michelin Pilot road 4', 'Small cooper'),
  new Car('Peugeot', '406', 'Continental Winter 16', 'Coupe'),
  new Baloon('Bezooli', 'Flufato', 5000, 'Gas'),
  new Jet('Sufari', 'Notren', 1400, true)
];

createFriendship($vehicles[0], $vehicles[1]);
createFriendship($vehicles[2], $vehicles[3]);
createFriendship($vehicles[4], $vehicles[5]);

echo '<h1>Friendship demo</h1>';
foreach ($vehicles as $vehicle) {
  $vehicle->say();
}

// echo '<h1>Land vehicles</h1>';
// foreach ($vehicles as $vehicle) {
//   if (is_subclass_of($vehicle, 'LandVehicle')) {
//     $vehicle->changeTires('Roadster mix Summer 16');
//     echo $vehicle->toString();
//   }
// }

// echo '<h1>Air vehicles</h1>';
// foreach ($vehicles as $vehicle) {
//   if (is_subclass_of($vehicle, 'AirVehicle')) {
//     $vehicle->incAltitude(1015);
//     $vehicle->land();
//     echo $vehicle->toString();
//   }
// }

// echo '<h1>Water vehicles</h1>';
// foreach ($vehicles as $vehicle) {
//   if (is_subclass_of($vehicle, 'WaterVehicle')) {
//     echo $vehicle->toString();
//   }
// }




 