<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
  $uri = $_SERVER['REQUEST_URI'];

  switch ($uri) {
    //Index page
    case '':
    case '/':
      require __DIR__ . '/pages/index.php';
      break;
    
    //Quizz page
    case '/quizz':
    case '/quizz/':
      require __DIR__ . '/pages/quizz.php';
      break;
    
    //Other quizz page
    case '/other-quizz':
    case '/other-quizz/':
      require __DIR__ . '/pages/other-quizz.php';
      break;

    //Results page
    case '/results':
    case '/results/':
      require __DIR__ . '/pages/results.php';
      break;

    //Get a random question API
    case '/api/questions/random/':
    case '/api/questions/random':
      require __DIR__ . '/api/app/questions/getRandom.php';
      break;
    
    //Get all questions API
    case '/api/questions/':
    case '/api/questions':
      require __DIR__ . '/api/app/questions/getAll.php';
      break;
    
    //Get all scores API
    case '/api/scores/':
    case '/api/scores':
      $parameter = "NULL";
      require __DIR__ . '/api/app/scores/getAll.php';
      break;

    //Get all questions or a defined number
    case (preg_match('#/api/questions/#', $uri) ? true : false):
      include_once($_SERVER['DOCUMENT_ROOT']."/api/functions/getParameterQuestions.php");
      $parameter = getParameter();
      if (!$parameter) {
        require __DIR__ . '/api/app/questions/getAll.php';
      }else {
        require __DIR__ . '/api/app/questions/getParam.php';
      }
      break;
    
    //Get all scores, or a defined number, or by username
    case (preg_match('#/api/scores/#', $uri) ? true : false):
      include_once($_SERVER['DOCUMENT_ROOT']."/api/functions/getParameterScores.php");
      $parameter = getParameter();
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
      require __DIR__ . '/pages/index.php';
      break;
  }

  
?>
