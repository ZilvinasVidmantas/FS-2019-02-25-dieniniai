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
