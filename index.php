<?php
  $url = $_GET['url'];
  echo $url."<br/>";

  $url = rtrim($url, '/');
  $url = explode('/', $url);

var_dump($url);

  require 'controllers/'.$url[0].'.php';
  $controller = new $url[0];
  $controller->render();
?>
