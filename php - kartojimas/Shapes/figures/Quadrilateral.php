<?php
class Quadrilateral extends Figure
{
  private $isConvex;
  /**
   * Quadrilateral - by 3 consecutive edges with 2 angles in between them
   *
   * @param [double] $edge1 - edge length
   * @param [double] $edge2 - edge length
   * @param [double] $edge3 - edge length
   * @param [double] $angle1 - in degrees
   * @param [double] $angle2 - in degrees
   */
  public function __construct($edge1, $edge2, $edge3, $angle1, $angle2)
  {
    if ($angle1 + $angle2 >= 360) throw new Exception("Toks keturkampis neįmanomas", 1);
    if ($angle1 > 180) $angle1 = 360 - $angle1; // 
    $diagonal = Figure::oppositeEdge($angle1, $edge1, $edge2);
    $angle21 = Figure::angleOfTriangle($angle1, $diagonal, $edge1);
    if ($angle21 > $angle2) { // Trečia tiesė į vidų, keturkampis NE iškulusis
      $diagonal2 = Figure::oppositeEdge($angle2, $edge2, $edge3);
      $angle31 = Figure::angleOfTriangle($angle2, $diagonal2, $edge2);
      $angle12 = 180 - $angle2 - $angle31;
      $angle11 = $angle1 - $angle12;
      $edge4 = Figure::oppositeEdge($angle11, $edge1, $diagonal2);
      $angle32 = Figure::angleOfTriangle($angle11, $edge4, $edge1);
      $angle3 = $angle31 + $angle32;
      $angle4 = 180 - $angle32 - $angle11;
    } else { // antra tiesė į vidų, keturkampis NE iškulusis
      $angle22 = $angle2 - $angle21;
      $edge4 = Figure::oppositeEdge($angle22, $diagonal, $edge3);
      $angle3 = Figure::angleOfTriangle($angle22, $edge4, $diagonal);
      $angle4 = 360 - $angle1 - $angle2 - $angle3;
    }
    parent::__construct([$edge1, $edge2, $edge3, $edge4], [$angle1, $angle2, $angle3, $angle4]);
  }
}