<?php
require '\models\whores_db.php';

class view
{
  private $db_worker;
  function __construct()
  {
      $this->db_worker = new database();
  }
  public function render($markup_name)
  {
    require 'template\top_side.php';
    require 'pages\\'.$markup_name.'.php';
    require 'template\bottom_side.php';
  }
}

?>
