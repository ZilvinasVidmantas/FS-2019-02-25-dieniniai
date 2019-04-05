<?php
class Garage
{
  private $address;
  private $slots;
  private $cars;
  private $workers;

  public function __construct($address, $slots)
  {
    $this->address = $address;
    $this->slots = $slots;
    $this->cars = [];
    $this->workers = [];
  }

  public function addCar($car)
  {
    if ($this->getFreeSlots() > 0) {
      array_push($this->cars, $car);
    } else {
      echo '<h3 style="color:red">Atsiprašome, šiuo metu neturime vietų</h3>';
    }
  }

  public function addWorker($worker)
  {
    array_push($this->workers, $worker);
  }

  private function getFreeSlots()
  {
    return $this->slots - count($this->cars);
  }

  private function getCarTable()
  {
    if (count($this->cars) > 0) {
      $table = '
      <div>
        <h3>Cars</h3>
        <table class="garage-table">
          <thead>
            <tr>
              <th>Brand</th>
              <th>Model</th>
              <th>Year</th>
              <th>Engine volume</th>        
            </tr>
          </thead>
        <tbody>';
      foreach ($this->cars as $car) {
        $table .= $car->toRow();
      }
      $table .= '
          </tbody>
        </table>
      </div>';
      return $table;
    } else {
      return '<h3 style="color:red">Šiuo metu garaže mašinų nėra</h3>';
    }
  }


  private function getWorkerTable()
  {
    if (count($this->workers) > 0) {
      $table = '
      <div>
        <h3>Workers</h3>
        <table class="garage-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Surname</th>
              <th>Salary</th>
              <th>Position</th>        
            </tr>
          </thead>
          <tbody>';
          foreach ($this->workers as $worker) {
            $table .= $worker->toRow();
          }
          $table .= '
          </tbody>
        </table>
      </div>';
      return $table;
    } else {
      return '<h3 style="color:red">Šiuo metu darbuotojų nėra</h3>';
    }
  }

  public function toString()
  {
    $result = '
    <div class="garage-container">
      <div class="container-info">
        <div class="slots-container">
          <span>All slots</span>
          <span>' . $this->slots . '</span>
        </div>
        <div class="slots-container">
          <span>Free slots</span>
          <span>' . $this->getFreeSlots() . '</span>
        </div>
      </div>
      <div class="address">' . $this->address . '</div>
      <div class="clear-fix"></div>
      <div class="table-container">';
    $result .= 
      $this->getCarTable().
      $this->getWorkerTable().
    ' </div>
    </div>';
    return $result;
  }
}