<?php 
// libs

spl_autoload_register(function ($class_name) {
  include 'libs/' . $class_name . '.php';
});

// head view
include 'views/common/head.php';
// content view
include 'views/common/content.php';
// footer view
include 'views/common/footer.php';
