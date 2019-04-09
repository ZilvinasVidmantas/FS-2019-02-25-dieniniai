<?php
class Square extends Rectangle
{
  private $edge;

  public function __construct($edge)
  {
    $this->edge = $edge;
    parent::__construct($edge, $edge);
  }
}