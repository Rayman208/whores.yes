<?php
class database
{
  function __construct()
  {
      $db = mysql_connect("localhost","root","");
      mysql_select_db("whores",$db);
      mysql_set_charset('utf-8',$db);
  }
  public function get_hair_colors()
  {
    $query_result = mysql_query("SELECT * FROM `hair_colors`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
  public function get_body_types()
  {
    $query_result = mysql_query("SELECT * FROM `body_types`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
  public function get_services()
  {
    $query_result = mysql_query("SELECT * FROM `services`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
  public function get_quality_categories()
  {
    $query_result = mysql_query("SELECT * FROM `quality_categories`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
  public function get_skin_colors()
  {
    $query_result = mysql_query("SELECT * FROM `skin_colors`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
}
?>
