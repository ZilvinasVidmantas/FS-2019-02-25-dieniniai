<?php

spl_autoload_register(function ($class_name) {
  include 'figures/' . $class_name . '.php';
});

$square = new Square(7);
var_dump($square);

