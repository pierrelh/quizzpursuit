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
    case '/api/questions/random':
      require __DIR__ . '/api/app/questions/getRandom.php';
      break;
    
    case '/api/questions/':
    case '/api/questions':
      require __DIR__ . '/api/app/questions/getAll.php';
      break;

    case (preg_match('#/api/questions/#', $uri) ? true : false):
      include_once($_SERVER['DOCUMENT_ROOT']."/api/functions/getParameter.php");
      $parameter = getParameter("questions");
      if (!$parameter) {
        require __DIR__ . '/api/app/questions/getAll.php';
      }else {
        require __DIR__ . '/api/app/questions/getParam.php';
      }
      break;
    
    case (preg_match('#/api/scores/#', $uri) ? true : false):
      include_once($_SERVER['DOCUMENT_ROOT']."/api/functions/getParameter.php");
      $parameter = getParameter("scores");
      if (!$parameter) {
        $parameter = "NULL";
      }
      if (!is_numeric($parameter) && $parameter != "NULL") {
        require __DIR__ . '/api/app/scores/getByUser.php';
      }else{
        require __DIR__ . '/api/app/scores/getAll.php';
      }
      break;
    
    default:
      require __DIR__ . '/pages/header.php';
      require __DIR__ . '/pages/index.php';
      break;
  }

  
?>
