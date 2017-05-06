<?php
require '.\views\view_general.php';

class main
{
  private $view_worker;
  function __construct()
  {
    $this->view_worker = new view();
  }
  public function landing()
  {
    $this->view_worker->render("landing");
  }
}
?>
