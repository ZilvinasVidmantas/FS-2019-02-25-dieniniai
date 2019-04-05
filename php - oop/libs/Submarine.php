<?php 
class Submarine extends WaterVehicle
{

  private $periscopeModel;
  private $uniqueProperty;

  public function __construct($brand, $model, $waterLine, $periscopeModel, $uniqueProperty)
  {
    $this->periscopeModel = $periscopeModel;
    $this->uniqueProperty = $uniqueProperty;
    parent::__construct($brand, $model, $waterLine);
  }

  public function toString()
  {
    return parent::toString([
      'Periscope' => $this->periscopeModel . ' periscope',
      'Submarine unique property' => $this->uniqueProperty
    ]);
  }
}