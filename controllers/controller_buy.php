<?php
require '\views\view_general.php';

class buy
{
  private $view_worker;
  function __construct()
  {
    $this->view_worker = new view();
  }
  public function showall()
  {
    $this->view_worker->render("showall");
  }
  public function selected()
  {
    $this->view_worker->render("selected");
  }
}
?>
