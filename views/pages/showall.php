<?php
$girls = $this->db_worker->get_all_girls();
?>
<div class="left-side">

  <?php
  $hair_colors = $this->db_worker->get_hair_colors();
  $body_types = $this->db_worker->get_body_types();
  $services = $this->db_worker->get_services();
  $quality_categories = $this->db_worker->get_quality_categories();
  $skin_colors = $this->db_worker->get_skin_colors();
  ?>

  <h2>Найти девочку</h2>
  <form>
    <input type="text" name="name" placeholder="Имя здесь"><br/>

    <input type="text" name="age_min" placeholder="min Возраст здесь">
    <input type="text" name="age_max" placeholder="max Возраст здесь"><br/>

    <input type="text" name="height_min" placeholder="min Рост здесь">
    <input type="text" name="height_max" placeholder="max Рост здесь"><br/>

    <input type="text" name="weight_min" placeholder="min Вес здесь">
    <input type="text" name="weight_max" placeholder="max Вес здесь"><br/>

    <input type="text" name="boobs_min" placeholder="min Размер груди здесь">
    <input type="text" name="boobs_max" placeholder="max Размер груди здесь"><br/>

    <select name="hair_colors">
    <option value="-1">Без разницы</option>
    <?php for ($i=0; $i <count($hair_colors) ; $i++) { ?>
      <option value="<?=$hair_colors[$i]["id"]?>"><?=$hair_colors[$i]["name"]?></option>
    <?php } ?>
    </select>
    <br/>

    <select name="body_types">
    <option value="-1">Без разницы</option>
    <?php for ($i=0; $i <count($body_types) ; $i++) { ?>
      <option value="<?=$body_types[$i]["id"]?>"><?=$body_types[$i]["name"]?></option>
    <?php } ?>
    </select>
    <br/>

    <select name="skin_colors">
    <option value="-1">Без разницы</option>
    <?php for ($i=0; $i <count($skin_colors) ; $i++) { ?>
      <option value="<?=$skin_colors[$i]["id"]?>"><?=$skin_colors[$i]["name"]?></option>
    <?php } ?>
    </select>
    <br/>


    <select name="quality_categories">
    <option value="-1">Без разницы</option>
    <?php for ($i=0; $i <count($quality_categories) ; $i++) { ?>
      <option value="<?=$quality_categories[$i]["id"]?>"><?=$quality_categories[$i]["name"]?></option>
    <?php } ?>
    </select>
    <br/>

    <?php for ($i=0; $i <count($services) ; $i++) { ?>
      <?php $service_name="services".$i; ?>
      <label><input type="checkbox" name="<?=$service_name?>" value="<?=$services[$i]["id"]?>"/> <?=$services[$i]["name"]?></label><br/>
    <?php } ?>

    <input type="text" name="price_min" placeholder="min Цена здесь">
    <input type="text" name="price_max" placeholder="max Цена здесь"><br/>

    <input type="button" value="Найти" id="btn_search">
    <br><br><br>
    <input type="button" value="Сбросить фильтр" id="btn_reset">

  </form>

</div>

<div class="right-side">
<?php for ($i=0; $i <count($girls); $i++) {?>
  <form action="/buy/selected" method="post">
    <input type="text" name="id" value="<?=$girls[$i]["id"]?>" hidden/>
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
</div>

<script type="text/javascript">
  $(function() {
      $("#btn_search").click(function()
      {
        var data = 'name='+ $('input[name="name"]').val();
        data+="&";
        data+='age_min='+ $('input[name="age_min"]').val();
        data+="&";
        data+='age_max='+ $('input[name="age_max"]').val();
        data+="&";
        data+='height_min='+ $('input[name="height_min"]').val();
        data+="&";
        data+='height_max='+ $('input[name="height_max"]').val();
        data+="&";
        data+='weight_min='+ $('input[name="weight_min"]').val();
        data+="&";
        data+='weight_max='+ $('input[name="weight_max"]').val();
        data+="&";
        data+='boobs_min='+ $('input[name="boobs_min"]').val();
        data+="&";
        data+='boobs_max='+ $('input[name="boobs_max"]').val();
        data+="&";
        data+='hair_colors='+ $('select[name="hair_colors"]').val();
        data+="&";
        data+='body_types='+ $('select[name="body_types"]').val();
        data+="&";
        data+='skin_colors='+ $('select[name="skin_colors"]').val();
        data+="&";
        data+='quality_categories='+ $('select[name="quality_categories"]').val();
        data+="&";
        data+='price_min='+ $('input[name="price_min"]').val();
        data+="&";
        data+='price_max='+ $('input[name="price_max"]').val();

        $.ajax({
            type: "POST",
            url: "/buy/search",
            data: data,
           success: function(html)
           {
                $(".right-side").html('');
                $(".right-side").append(html);
           }
        });
      });
    });
</script>
