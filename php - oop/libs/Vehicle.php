<?php

abstract class Vehicle
{
  protected $brand;
  protected $model;
  protected $engineOn;
  protected $speed;
  protected $topSpeed;
  protected $friends;

  public function __construct($brand, $model)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->engineOn = false;
    $this->topSpeed = 200;
    $this->speed = 0;
    $this->friends = [];
  }

  public function makeFriend($potentialFriend){
    if(!in_array($potentialFriend, $this->friends)){
      // Sudrauginti
      array_push($this->friends, $potentialFriend);
      return true;
    }
    return false;
  }

  public function say(){
    $helloPhrase = "<div>Hey, I'm $this->brand $this->model.";
    $helloPhrase .= (count($this->friends) > 0) ? ' I also have '.count($this->friends). ' friends': '';
    $helloPhrase .= '</div>';
    echo $helloPhrase;

  }

  public function toString()
  {
    $properties = '
    <li>
      <span class="mr-3">Brand:</span>
      <span>' . $this->brand . '</span>
    </li> 
    <li>
      <span class="mr-3">Model:</span>
      <span>' . $this->model . '</span>
    </li>
    <li>
      <span class="mr-3">Top speed:</span>
      <span>' . $this->topSpeed . '</span>
    </li>
    <li>
      <span class="mr-3">Engine started:</span>
      <span>' . (($this->engineOn) ? 'On' : 'Off') . '</span>
    </li>
    <li>
      <span class="mr-3">Current speed:</span>
      <span>' . $this->speed . '</span>
    </li>';
    // func_get_args() grąžiną masyvą, su visais funkcijai perduotais parametrais
    if (isset(func_get_args()[0])) {
      $additionalProperties = func_get_args()[0];
      foreach ($additionalProperties as $property => $value) {
        $properties .= "
        <li>
          <span class=\"mr-3\">$property:</span>
          <span>$value</span>
        </li>  
        ";
      }
    }
    return '
    <div class="bg-light m-3 p-2">
      <div>' . $this->brand . ' ' . $this->model . '</div>
      <ul>' . $properties . '</ul>
    </div>';
  }

  public function startEngine()
  {
    $this->engineOn = true;
    $this->speed = 0;
  }

  public function stopEngine()
  {
    $this->engineOn = false;
  }

  public function speedUp($speedInc)
  {
    if ($this->engineOn && is_numeric($speedInc) && $speedInc > 0) {
      if ($this->speed + $speedInc < $this->topSpeed) {
        $this->speed += $speedInc;
      } else {
        $this->speed = $this->topSpeed;
      }
    }
  }

  public function setTopSpeed($topSpeed)
  {
    $this->topSpeed = $topSpeed;
  }
}