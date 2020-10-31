<?php
  $uri = $_SERVER['REQUEST_URI'];

  switch ($uri) {
    //Index page
    case '':
    case '/':
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/index.php';
      break;
    
    //Quizz page
    case '/quizz':
    case '/quizz/':
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/quizz.php';
      break;

    //Get a random question API
    case '/api/questions/random/':
      require __DIR__ . '/api/questions/getRandom/';
      break;

    case (preg_match('#/api/questions/#', $uri) ? true : false):
      include_once($_SERVER['DOCUMENT_ROOT']."/api/functions/getParameter.php");
      $parameter = getParameter();
      if ($parameter == false) {
        require __DIR__ . '/api/questions/getAll/';
      }else {
        require __DIR__ . '/api/questions/getParam/';
      }
      break;
    
    default:
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/index.php';
      break;
  }

  
?>
