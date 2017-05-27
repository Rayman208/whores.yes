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
  public function add_girl($post)
  {
    $name = $post["name"];
    $photo_link = "none";
    $age = $post["age"];
    $height = $post["height"];
    $weight = $post["weight"];
    $boobs = $post["boobs"];
    $hair_colors = $post["hair_colors"];
    $body_types = $post["body_types"];
    $skin_colors = $post["skin_colors"];
    $price = $post["price"];
    $quality_categories = $post["quality_categories"];

    $query_result = mysql_query("INSERT INTO `girls`(`name`, `photo_link`, `age`, `height`, `weight`, `boobs`, `hair_color`, `body_type`, `skin_color`, `price`, `quality_category`) VALUES ('{$name}','{$photo_link}','{$age}','{$height}','{$weight}','{$boobs}','{$hair_colors}','{$body_types}','{$skin_colors}','{$price}','{$quality_categories}')");

    $girlid = mysql_insert_id();

    $services = $this->get_services();
    for ($i=0; $i <count($services) ; $i++)
    {
        $service_name="services".$i;
        $service_id = $post[$service_name];
        if(!empty($service_id))
        {
          $query_result =  mysql_query("INSERT INTO `girls_services` (`id_girl`, `id_service`) VALUES ('{$girlid}','{$service_id}')");
        }
    }
  }

  public function get_all_girls()
  {
    $query_result = mysql_query("SELECT * FROM `girls`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $data[] = $curret_row;
    }
    return $data;
  }
  public function get_selected_girl($girlid)
  {
    $girl = array();

    $query_result = mysql_query("SELECT g.id, g.name, g.photo_link, g.age, g.height, g.weight, g.boobs, h.name AS hair_colors, b.name AS body_types, s.name AS skin_colors, `price`, q.name AS quality_categories FROM girls g
INNER JOIN hair_colors h ON g.hair_color=h.id
INNER JOIN body_types b ON g.body_type=b.id
INNER JOIN skin_colors s ON g.skin_color=s.id
INNER JOIN quality_categories q ON g.quality_category=q.id
WHERE g.id='{$girlid}'");
    $data = mysql_fetch_assoc($query_result);

    $query_result = mysql_query("SELECT s.name
      FROM girls_services gs
INNER JOIN services s ON gs.id_service=s.id
WHERE gs.id_girl='{$girlid}'");
    $services = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        $services[] = $curret_row;
    }

    $girl[] = $data;
    $girl[] = $services;

    return $girl;
  }
}
?>
