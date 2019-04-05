<?php
function sum()
{
  $args = func_get_args();
  $sum = 0;
  foreach ($args as $arg) { // Eina per kiekvieną reikšmę
    if (gettype($arg) === 'array') $sum += call_user_func_array('sum', $arg);
    elseif (is_numeric($arg)) $sum += $arg;
  }
  return $sum;
}

echo '<div>' . sum(7, 5) . '</div>'; // 12
echo '<div>' . sum(7, 5, -3) . '</div>'; // 9
echo '<div>' . sum(1, 2, 5, 4, 8, 7) . '</div>'; // 27
echo '<div>' . sum([7, 5, -3]) . '</div>'; // 9
echo '<div>' . sum(7, 5, 'keturi', -3) . '</div>'; // 9
echo '<div>' . sum([7, 'five', 5, '4', -3]) . '</div>'; // 13
echo '<div>' . sum(
  [7, 'five', 5, '4', -3],
  7,
  5,
  [
    '7',
    [
      5,
      '9'
    ],
    'ne skaicius',
    5
  ]
) . '</div>'; // 13

class Quadrilateral
{
  public function __construct($edges, $angles)
  {
   echo '<h3>Kažkoks keturkampis</h3>';
  }
}


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
    $edges = [];
    $angles = [];
    array_push($edges, $edge1);
    array_push($edges, $edge2);
    array_push($edges, $edge1);
    array_push($edges, $edge2);
    array_push($angles, 180 - $angle);
    array_push($angles, $angle);
    array_push($angles, 180 - $angle);
    array_push($angles, $angle);
    parent::__construct($edges, $angles);
  }
}

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

class Square extends Rectangle
{
  private $edge;

  public function __construct($edge)
  {
    $this->edge = $edge;
    parent::__construct($edge, $edge);
  }
}
var_dump(new Square(5));
var_dump(new Rectangle(5, 7));
var_dump(new Parallelogram(5, 7, 60));
var_dump(new Quadrilateral(
  [5, 7, 5, 7],
  [70, 110, 60, 120]
));
