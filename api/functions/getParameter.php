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
        return false;
      }else {
        return $parameter;
      }
    }else {
      return false;
    }

    return $parameter;
  }

?>
