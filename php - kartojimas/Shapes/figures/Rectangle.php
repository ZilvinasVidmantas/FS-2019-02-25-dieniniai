<?php
class Rectangle extends Parallelogram
{

  public function __construct($edge1, $edge2)
  {
    parent::__construct($edge1, $edge2, 90);
  }
}