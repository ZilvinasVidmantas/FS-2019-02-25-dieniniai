<?php

abstract class WaterVehicle extends Vehicle
{
  private $waterLine;

  public function __construct($brand, $model, $waterLine)
  {
    $this->waterLine = $waterLine;
    parent::__construct($brand, $model);
  }

  public function addCargo(){
    // logika įvertintnti vandens liniją
    $this->waterLine += 0.1;
  }
  
  public function removeCargo(){
    // logika įvertintnti vandens liniją
    $this->waterLine -= 0.1;
  }

  public function toString()
  {
    $properties = ['Water line' => $this->waterLine];
    if (isset(func_get_args()[0]))  $properties = array_merge($properties, func_get_args()[0]);
    return parent::toString($properties);
  }
}