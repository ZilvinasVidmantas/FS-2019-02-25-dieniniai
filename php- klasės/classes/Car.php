<?php
class Car
{
  private $brand;
  private $model;
  private $year;
  private $engineVolume;

  public function __construct($brand, $model, $year, $engineVolume)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
    $this->engineVolume = $engineVolume;
  }

  public function toString()
  {
    return "
    <h3>
      $this->brand
      $this->model
      $this->year
      $this->engineVolume
    </h3>";
  }

  public function toRow(){
    return "
    <tr>
      <td>$this->brand</td>
      <td>$this->model</td>
      <td>$this->year</td>
      <td>$this->engineVolume</td>        
    </tr>";
  }
}