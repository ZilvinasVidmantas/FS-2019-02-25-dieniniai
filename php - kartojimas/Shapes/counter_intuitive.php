<?php

const DOOR_COUNT = 3;
function startingArray()
{
  $array = [];
  for ($i = 0; $i < DOOR_COUNT; $i++) {
    array_push($array, false);
  }
  $array[rand(0, DOOR_COUNT - 1)] = true;
  return $array;
}

function guessDoorWithChanging()
{
  $gamesCount = 10000;
  $succesCount = 0;
  for ($i = 0; $i < $gamesCount; $i++) {
    $array = startingArray();
    $firstGuess = rand(0, DOOR_COUNT - 1);

    for ($j = 0; $j < DOOR_COUNT; $j++) {
      if (!$array[$j] && $j != $firstGuess) {
        $array[$j] = 'opened door';
        $openedDoor = $j;
        break;
      }
    }
    // echo '<div>My first guess is:' . $firstGuess . '</div>';

    $possibleIndexes = [];
    for ($k = 0; $k < DOOR_COUNT; $k++) {
      if ($k != $firstGuess && $k != $openedDoor) array_push($possibleIndexes, $k);
    }
    // echo '<div>Possible indexes</div>';
    // var_dump($possibleIndexes);

    $secondGuess = $possibleIndexes[rand(0, count($possibleIndexes) - 1)];

    // var_dump($array);
    // echo '<div>My second guess is:' . $secondGuess . '</div><hr>';
    if ($array[$secondGuess]) $succesCount++;
  }
  $winRate = 100 * $succesCount / $gamesCount;
  echo "Win rate: $winRate%";
}

guessDoorWithChanging();