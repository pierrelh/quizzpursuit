<?php
  $uri = $_SERVER['REQUEST_URI'];

  switch ($uri) {
    case '':
    case '/':
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/index.php';
      break;
    
    case '/quizz':
    case '/quizz/':
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/quizz.php';
      break;

    case '/api/questions/random/':
    case '/api/questions/random':
      require __DIR__ . '/api/questions/random/';
    
    default:
      # code...
      break;
  }

  
?>
