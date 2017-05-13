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
}
?>
