<?php
class Quadrilateral extends Figure
{
  private $edge1;
  private $edge2;
  private $edge3;
  private $angle1;
  private $angle2;

  public function __construct($edge1, $edge2, $edge3, $angle1, $angle2)
  {
    $this->$edge1 = $edge1;
    $this->$edge2 = $edge2;
    $this->$edge3 = $edge3;
    $this->$angle1 = $angle1;
    $this->$angle2 = $angle2;

    // parent::__construct([1], [1]);
  }
}