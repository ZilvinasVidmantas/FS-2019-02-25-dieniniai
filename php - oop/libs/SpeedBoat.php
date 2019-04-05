<?php
class SpeedBoat extends WaterVehicle{
  private $engineType;

  public function __construct($brand, $model, $waterLine, $engineType) {
    $this->engineType = $engineType;
    parent::__construct($brand, $model, $waterLine);
  }

  public function toString()
  {
    return parent::toString([
      'Engine type' => $this->engineType
    ]);
  }
}