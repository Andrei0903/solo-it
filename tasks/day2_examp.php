<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>

  <h1>Домашнее задание. День 2. Пример.</h1>
  <div class="post_body">
    <br>
    <br>
    <p><?

      //функция подсчёта общего количества очков характеристики
      function All($a, $b, $c){
        return $a+$b+$c;
      }
      //функция подсчёта среднего числа очков характеристики
      function Average($a, $b, $c){
        return All($a, $b, $c)/3;
      }
      //функция подсчёта процента очков характеристики
      function Percent($a, $b, $c, $max=300){
        return (All($a, $b, $c)/300)*100;
      }
      //функция определения цвета
      function Color($opt){
        if($opt<50) return 'red';
        elseif ($opt>=50 && $opt<80) return 'yellow';
        else return 'green';
      }?>


      <?
      //блок описания героя 1
      $name_1 = "<b>Имя:</b> Белый Кролик";
      $essence_1 = "<b>Сущность:</b> Сказочный зверь";
      $description_1 = "<b>Описание:</b> Постоянно куда-то опаздывает. Не расстаётся со своими часами";
      echo $name_1.'<br>'.$essence_1.'<br>'.$description_1;
      $weapun_1  = "Часы на цепочке";
      $edurance_1 = 65;
      $strength_1 = 40;
      $agility_1 = 95;

      $strength_clr_1 = Color($strength_1);
      $edurance_clr_1 = Color($edurance_1);
      $agility_clr_1 = Color($agility_1);

      $all_1 = All($agility_1, $edurance_1, $strength_1);
      $average_1 = Average($agility_1, $edurance_1, $strength_1);
      $persent_1 = Percent($agility_1, $edurance_1, $strength_1);
    ?>

    <br>
      <br>
    <table width="100%" border="1" cellpadding="4" cellspacing="0">
      <caption>Характеристики: <?=$name_1?></caption>
      <tr>
        <th style="background: #9f9f9f">Оружие</th><th style="background: #9f9f9f">Выносливость</th><th style="background: #9f9f9f">Сила</th><th style="background: #9f9f9f">Ловкость</th><th style="background: #9f9f9f">Всего</th><th style="background: #9f9f9f">Среднее</th><th style="background: #9f9f9f">Процент</th>
      </tr>
      <tr>
        <td><?=$weapun_1?></td><td style="background: <?=$edurance_clr_1?>"><?=$edurance_1?></td><td style="background:<?=$strength_clr_1?>"><?=$strength_1?></td><td style="background:<?=$agility_clr_1?>"><?=$agility_1?></td><td><?=$all_1?></td><td><?=(int)$average_1?></td><td><?=(int)$persent_1.'%'?></td>
      </tr>
    </table>
    <br>
    <br>

    <?
    //блок описания героя 2
    $name_2 = "<b>Имя:</b> Шляпник";
    $essence_2 = "<b>Сущность:</b> Человек с причудами";
    $description_2 = "<b>Описание:</b> Обитатель страны чудес. Обожает свою шляпу";
    echo $name_2.'<br>'.$essence_2.'<br>'.$description_2;
    $weapun_2  = "Шляпа";
    $edurance_2 = 55;
    $strength_2 = 85;
    $agility_2 = 70;

    $strength_clr_2 = Color($strength_2);
    $edurance_clr_2 = Color($edurance_2);
    $agility_clr_2 = Color($agility_2);

    $all_2 = All($agility_2, $edurance_2, $strength_2);
    $average_2 = Average($agility_2, $edurance_2, $strength_2);
    $persent_2 = Percent($agility_2, $edurance_2, $strength_2);
    ?>

    <br><br><table width="100%" border="1" cellpadding="4" cellspacing="0">
      <caption>Характеристики: <?=$name_2?></caption>
      <tr>
        <th style="background: #9f9f9f">Оружие</th><th style="background: #9f9f9f">Выносливость</th><th style="background: #9f9f9f">Сила</th><th style="background: #9f9f9f">Ловкость</th><th style="background: #9f9f9f">Всего</th><th style="background: #9f9f9f">Среднее</th><th style="background: #9f9f9f">Процент</th>
      </tr>
      <tr>
        <td><?=$weapun_2?></td><td style="background: <?=$edurance_clr_2?>"><?=$edurance_2?></td><td style="background:<?=$strength_clr_2?>"><?=$strength_1?></td><td style="background:<?=$agility_clr_2?>"><?=$agility_2?></td><td><?=$all_2?></td><td><?=(int)$average_2?></td><td><?=(int)$persent_2.'%'?></td>
      </tr>
    </table>
    <br>
    <br>


    <?
    //блок описания героя 3
    $name_3 = "<b>Имя:</b> Тройка";
    $essence_3 = "<b>Сущность:</b> Карточный рыцарь";
    $description_3 = "<b>Описание:</b> Прислуга Королевы в Стране Чудес. Привык перекрашивать розы в другой цвет";
    echo $name_3.'<br>'.$essence_3.'<br>'.$description_3;
    $weapun_3  = "Кисточка";
    $edurance_3 = 35;
    $strength_3 = 65;
    $agility_3 = 50;

    $strength_clr_3 = Color($strength_3);
    $edurance_clr_3 = Color($edurance_3);
    $agility_clr_3 = Color($agility_3);

    $all_3 = All($agility_3, $edurance_3, $strength_3);
    $average_3 = Average($agility_3, $edurance_3, $strength_3);
    $persent_3 = Percent($agility_3, $edurance_3, $strength_3);
    ?>

    <br><br><table width="100%" border="1" cellpadding="4" cellspacing="0">
      <caption>Характеристики: <?=$name_3?></caption>
      <tr>
        <th style="background: #9f9f9f">Оружие</th><th style="background: #9f9f9f">Выносливость</th><th style="background: #9f9f9f">Сила</th><th style="background: #9f9f9f">Ловкость</th><th style="background: #9f9f9f">Всего</th><th style="background: #9f9f9f">Среднее</th><th style="background: #9f9f9f">Процент</th>
      </tr>
      <tr>
        <td><?=$weapun_3?></td><td style="background: <?=$edurance_clr_3?>"><?=$edurance_3?></td><td style="background:<?=$strength_clr_3?>"><?=$strength_3?></td><td style="background:<?=$agility_clr_3?>"><?=$agility_3?></td><td><?=$all_3?></td><td><?=(int)$average_3?></td><td><?=(int)$persent_3.'%'?></td>
      </tr>
    </table>
    <br><br>


Прыжки:

    <?
    $res_1 = 0; $res_2 = 0; $res_3 = 0;
    for($i = 1; $i < 6; $i++):?>
      <br><br><p><b> Ход <?=$i?></b></p>
      <br><?=$name_1?>. Результат <?=(int)($agility_1/$i)?> <?$res_1 += (int)($agility_1/$i)?>
      <br><?=$name_2?>. Результат <?=(int)($agility_2/$i)?> <?$res_2 += (int)($agility_2/$i)?>
      <br><?=$name_3?>. Результат <?=(int)($agility_3/$i)?> <?$res_3 += (int)($agility_3/$i)?>
<?endfor;?>

    <br><br>Результат
    <br><?echo $name_1.' - '.$res_1?>
    <br><?echo $name_2.' - '.$res_2?>
    <br><?echo $name_3.' - '.$res_3?>



  </div>

<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>