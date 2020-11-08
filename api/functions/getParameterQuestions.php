<?php

  //Get the paramater, if exist, on the get question API
  function getParameter(){
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    $parameter = array_pop($url);
    if(preg_match('#questions#', $parameter) || $parameter == "" || !is_numeric($parameter)){
      return false;
    }

    return $parameter;
  }

?>
