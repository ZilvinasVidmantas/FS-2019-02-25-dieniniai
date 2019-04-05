<?php

abstract class LandVehicle extends Vehicle
{
  private $tires;

  public function __construct($brand, $model, $tires)
  {
    $this->tires = $tires;
    parent::__construct($brand, $model);
  }

  public function toString()
  {
    $properties = [
      'Tires' => $this->tires
    ];
    if (isset(func_get_args()[0])) $properties = array_merge($properties, func_get_args()[0]);
    return parent::toString($properties);
  }

  public function changeTires($tires){
    $this->tires = $tires;
  }
}