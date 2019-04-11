<?php
class Parallelogram extends Quadrilateral
{

  public function __construct($edge1, $edge2, $angle)
  {
    parent::__construct($edge1, $edge2, $edge1, $angle, 180 - $angle);
  }
}