<?php
class Square extends Rectangle
{

  public function __construct($edge)
  {
    parent::__construct($edge, $edge);
  }
}