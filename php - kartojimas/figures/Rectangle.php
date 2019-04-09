<?php
class Rectangle extends Parallelogram
{
  private $edge1;
  private $edge2;

  public function __construct($edge1, $edge2)
  {
    $this->edge1 = $edge1;
    $this->edge2 = $edge2;
    parent::__construct($edge1, $edge2, 90);
  }
}