<?php 
class MotorBike extends LandVehicle
{

  private $windShield;

  public function __construct($brand, $model, $tires, $windShield)
  {
    $this->windShield = $windShield;
    parent::__construct($brand, $model, $tires);
  }

  public function toString()
  {
    return parent::toString([
      'Windshield' => $this->windShield
    ]);
  }
}