<?php
$girl = $this->db_worker->get_selected_girl($_POST["id"]);
//var_dump($girl);
?>
<p>Имя: <?=$girl[0]["name"]?></p>
<p>Возраст: <?=$girl[0]["age"]?></p>
<p>Рост: <?=$girl[0]["height"]?></p>
<p>Вес: <?=$girl[0]["weight"]?></p>
<p>Грудь: <?=$girl[0]["boobs"]?></p>
<p>Цвет волос: <?=$girl[0]["hair_colors"]?></p>
<p>Телосложение: <?=$girl[0]["body_types"]?></p>
<p>Цвет кожи: <?=$girl[0]["skin_colors"]?></p>
<p>Цена: <?=$girl[0]["price"]?></p>

<p>Список услуг:</p>
<?php for ($i=0; $i < count($girl[1]); $i++) { ?>
<p><?php echo $girl[1][$i]["name"]  ?></p>
<?php } ?>
