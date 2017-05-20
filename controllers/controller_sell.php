<?php
require '\views\view_general.php';

class sell
{
  private $view_worker;
  function __construct()
  {
    $this->view_worker = new view();
  }
  public function fill()
  {
    $this->view_worker->render("fill");
  }
  public function add()
  {
    $this->view_worker->render("add");
  }
}
?>
