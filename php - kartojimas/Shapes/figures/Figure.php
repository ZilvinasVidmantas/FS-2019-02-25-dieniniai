<?php
abstract class Figure
{
  private $isCircle;
  public function __construct()
  {
    $input = func_get_args();
    if (count($input) === 1 && is_numeric($input[0])) {
      $this->isCircle = true;
    } elseif (count($input) === 2 && gettype($input[0]) === 'array'
      && gettype($input[1]) === 'array' && count($input[0]) === count($input[1])) {
      $this->isCircle = false;
    } else {
      echo '<h3 class="text-danger"> Nepavyko sukurti figūros, blogi parametrai</h3>';
      exit;
    }
  }
  // abstract public function Area();

  public function Perimeter()
  {
    //.....................
  }

  public function toString()
  {
    if ($this->isCircle) return circleToString();
    else return polygonToString();
  }

  private function circleToString()
  {
    //......................
  }

  private function polygonToString()
  {
    //......................
  }
  
  /**
   * oppositeEdge
   *
   * @param [double] $angle - angle beetwen edges
   * @param [double] $edgeBefore - edge before
   * @param [Student] $edgeAfter - edge after
   * @return double
   */
  public static function oppositeEdge($angle, $edgeBefore, $edgeAfter)
  {
    return ($edgeBefore ** 2 + $edgeAfter ** 2 - 2 * $edgeBefore * $edgeAfter * cos(deg2rad($angle))) ** 0.5;
  }


  public static function angleOfTriangle($knownAngle, $knownEdge, $oppositeEdge)
  {
    return rad2deg(asin(deg2rad(sin($knownAngle) * $oppositeEdge / $knownAngle)));
  }

  
}
