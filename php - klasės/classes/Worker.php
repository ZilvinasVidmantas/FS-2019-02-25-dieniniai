<?php
class Worker
{
  private $name;
  private $surname;
  private $salary;
  private $position;

  public function __construct($name, $surname, $salary, $position)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->salary = $salary;
    $this->position = $position;
  }

  public function toRow(){
    return "
    <tr>
      <td>$this->name</td>
      <td>$this->surname</td>
      <td>$this->salary</td>
      <td>$this->position</td>        
    </tr>";
  }
}