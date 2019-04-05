<?php

abstract class AirVehicle extends Vehicle
{
  private $altitude;
  private $maxAltitude;

  public function __construct($brand, $model, $maxAltitude)
  {
    $this->altitude = 0;
    $this->maxAltitude = $maxAltitude;
    parent::__construct($brand, $model);
  }

  abstract public function land();

  public function toString()
  {
    $properties = [
      'Altitude' => $this->altitude
    ];
    if (isset(func_get_args()[0])) $properties = array_merge($properties, func_get_args()[0]);
    return parent::toString($properties);
  }

  public function incAltitude($amount){
    if (is_numeric($amount) && $amount > 0) {
      if ($this->altitude + $amount < $this->maxAltitude) {
        $this->altitude += $amount;
      } else {
        $this->altitude = $this->maxAltitude;
      }
    }
  }

  public function decAltitude($amount){
    if (is_numeric($amount) && $amount > 0) {
      if ($this->altitude - $amount > 0) {
        $this->altitude += $amount;
      } else {
        $this->altitude = 0;
      }
    }
  }

  protected function setAltitude($altitude){
    $this->altitude = $altitude;
  }
}