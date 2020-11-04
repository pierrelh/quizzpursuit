<?php
  //Get the paramater, if exist, on the get scores API
  function getParameter(){
    $url = $_SERVER['REQUEST_URI'];
    $url = explode(':', $url);
    $parameter = array_pop($url);
    if(preg_match('#/api/scores#', $parameter) || $parameter == ""){
      return false;
    }

    return $parameter;
  }

?>
