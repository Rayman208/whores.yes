<?php
  $url = $_GET['url'];

  $url = rtrim($url, '/');
  $url_parts = explode('/', $url);

  if(count($url_parts)%2!=0) {
    die("неверный формат адреса");
  }

  $module = $url_parts[0];
  $action = $url_parts[1];

  if(count($url_parts)>2)
  {
    for ($i=2; $i < count($url_parts); $i+=2)
    {
        $params[$url_parts[$i]] = $url_parts[$i+1];
    }
  }

  require 'controllers\controller_'.$module.'.php';

  $controller = new $module;

  if(count($url_parts)==2)
  {
    $controller->$action();
  }
  else
  {
    $controller->$action($params);
  }
?>
