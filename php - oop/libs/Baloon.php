<?php 
class Baloon extends AirVehicle
{
  private $gasType;

  public function __construct($brand, $model, $altitude, $gasType)
  {
    $this->gasType = $gasType;
    parent::__construct($brand, $model, $altitude);
  }

  public function land()
  {
    $this->setAltitude(0);
    echo 'Baloon has landed';
  }

  public function toString()
  {
    return parent::toString([
      'Gas type' => ($this->gasType)
    ]);
  }
}