<?php

  function getParameter($api){
    $url = $_SERVER['REQUEST_URI'];
    $url = explode(':', $url);
    $parameter = array_pop($url);
    if ($api == "questions") {
      if(preg_match('#/api/questions#', $parameter) || $parameter == "" || !is_numeric($parameter)){
        $parameter = false;
      }
    }elseif ($api == "scores") {
      if(preg_match('#/api/scores#', $parameter) || $parameter == ""){
        if (is_numeric($parameter)) {
          require __DIR__ . '/api/app/scores/getAll.php';
        }else{
          require __DIR__ . '/api/app/scores/getByUser.php';
        }
      }
    }else {
      return false;
    }

    return $parameter;
  }

?>
