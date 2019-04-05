<?php 
class Car extends LandVehicle
{

  private $bodyType;

  public function __construct($brand, $model, $tires, $bodyType)
  {
    $this->bodyType = $bodyType;
    parent::__construct($brand, $model, $tires);
  }

  public function toString()
  {
    return parent::toString([
      'Body type' => $this->bodyType
    ]);
  }
}