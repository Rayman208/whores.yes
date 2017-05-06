<?php
class view
{
  public function render($markup_name)
  {
    require 'template\top_side.php';
    require 'pages\\'.$markup_name.'.php';
    require 'template\bottom_side.php';
  }
}

?>
