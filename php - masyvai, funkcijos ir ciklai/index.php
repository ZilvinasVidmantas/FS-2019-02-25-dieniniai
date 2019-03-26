<?php
$array = [5, 8, 9, 7, 4, 5];

// Masyvas su rakto -< reikšmės poromis
$associativeArray = [
  'key1' => 'value1',
  'key2' => -5.2,
  'key3' => 7,
  'key4' => true,
  'key5' => [
    'key1' => 'value1',
    'key2' => 777
  ]
];

// Masyvas iš masyvų 
$arrayOfAssociativeArrays = [
  [
    'key1' => 'value1',
    'key2' => -5.2,
    'key3' => 7,
    'key4' => true,
    'key5' => [
      'key1' => 'value1',
      'key2' => 777
    ]
  ],
  [
    'key1' => 'value1',
    'key2' => -5.2,
    'key3' => 7,
    'key4' => true,
    'key5' => [
      'key1' => 'value1',
      'key2' => 777
    ]
  ],
  [
    'key1' => 'value1',
    'key2' => -5.2,
    'key3' => 7,
    'key4' => true,
    'key5' => [
      'key1' => 'value1',
      'key2' => 777
    ]
  ],
  [
    'key1' => 'value1',
    'key2' => -5.2,
    'key3' => 7,
    'key4' => true,
    'key5' => [
      'key1' => 'value1',
      'key2' => 777
    ]
  ],
];

// Iteravimas i6sisaugot raktą ir reikšmę
foreach ($variable as $key => $value) {
  # code...
}

// Iteravimas išsisaugant tik reikšmes
foreach ($variable as $value) {
  # code...
}

// funkcija
function pavadinimas($parametras, $parametras2){
  #code
}