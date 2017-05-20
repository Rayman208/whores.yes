<?php
$hair_colors = $this->db_worker->get_hair_colors();
$body_types = $this->db_worker->get_body_types();
$services = $this->db_worker->get_services();
$quality_categories = $this->db_worker->get_quality_categories();
$skin_colors = $this->db_worker->get_skin_colors();
?>

<h2>Добавить девочку</h2>
<form action="\views\pages\add.php" method="post">
  <input type="text" name="name" placeholder="Имя здесь"><br/>
  <input type="text" name="age" placeholder="Возраст здесь"><br/>
  <input type="text" name="hieght" placeholder="Рост здесь"><br/>
  <input type="text" name="weight" placeholder="Вес здесь"><br/>
  <input type="text" name="boobs" placeholder="Размер груди здесь"><br/>

  <select>
  <?php for ($i=0; $i <count($hair_colors) ; $i++) { ?>
    <option value="<?=$hair_colors[$i]["id"]?>"><?=$hair_colors[$i]["name"]?></option>
  <?php } ?>
  </select>
  <br/>

  <select>
  <?php for ($i=0; $i <count($body_types) ; $i++) { ?>
    <option value="<?=$body_types[$i]["id"]?>"><?=$body_types[$i]["name"]?></option>
  <?php } ?>
  </select>
  <br/>

  <select>
  <?php for ($i=0; $i <count($skin_colors) ; $i++) { ?>
    <option value="<?=$skin_colors[$i]["id"]?>"><?=$skin_colors[$i]["name"]?></option>
  <?php } ?>
  </select>
  <br/>


  <select>
  <?php for ($i=0; $i <count($quality_categories) ; $i++) { ?>
    <option value="<?=$quality_categories[$i]["id"]?>"><?=$quality_categories[$i]["name"]?></option>
  <?php } ?>
  </select>
  <br/>

  <?php for ($i=0; $i <count($services) ; $i++) { ?>
    <?php $service_name="services".$i; ?>
    <label><input type="checkbox" name="<?=$service_name?>" value="<?=$services[$i]["id"]?>"/> <?=$services[$i]["name"]?></label><br/>
  <?php } ?>

  <input type="text" name="price" placeholder="Цена здесь"><br/>

  <input type="submit" name="" value="Продать">


</form>
