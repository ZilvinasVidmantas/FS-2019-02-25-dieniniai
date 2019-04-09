<?php
class Parallelogram extends Quadrilateral
{
  private $edge1;
  private $edge2;
  private $angle;

  public function __construct($edge1, $edge2, $angle)
  {
    $this->edge1 = $edge1;
    $this->edge2 = $edge2;
    $this->angle = $angle;
    parent::__construct($edge1, $edge2, $edge1, $angle, 180 - $angle);
  }
}