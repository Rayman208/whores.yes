<?php
$girls = $this->db_worker->get_all_girls();
?>

<?php for ($i=0; $i <count($girls); $i++) {?>
  <form action="/buy/selected" method="post">
    <input type="text" name="id" value="<?=$girls[$i]["id"]?>"/>
    <p>Имя: <?=$girls[$i]["name"]?></p>
    <p>Возраст: <?=$girls[$i]["age"]?></p>
    <p>Рост: <?=$girls[$i]["height"]?></p>
    <p>Вес: <?=$girls[$i]["weight"]?></p>
    <p>Грудь: <?=$girls[$i]["boobs"]?></p>
    <p>Цена: <?=$girls[$i]["price"]?></p>
    <input type="submit" value="Подробнее">
  </form>
  <br/>
<?php } ?>
