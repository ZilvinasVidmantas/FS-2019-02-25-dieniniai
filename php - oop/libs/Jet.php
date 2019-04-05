<?php 
class Jet extends AirVehicle
{
  private $ultraSound;

  public function __construct($brand, $model, $altitude, $ultraSound)
  {
    $this->ultraSound = $ultraSound;
    parent::__construct($brand, $model, $altitude);
  }

  public function land()
  {
    $this->setAltitude(0);
    echo 'Jet has landed';
  }

  public function toString()
  {
    return parent::toString([
      'Ultra sound' => ($this->ultraSound) ? 'yes' : 'no'
    ]);
  }
}