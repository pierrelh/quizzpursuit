<?php

function getParameter(){
  $url = $_SERVER['REQUEST_URI'];
  $url = explode(':', $url);
  $parameter = array_pop($url);
  if(preg_match('#/api/questions#', $parameter) || $parameter == ""){
      $parameter = false;
  }
  return $parameter;
}

?>
