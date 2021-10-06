<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>

  <h1>Домашнее задание. День 3. Пример.</h1>
  <div class="post_body">
    <br>
    <br>
    <?

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


      <?$WRabbit = array(
          "Name" => "Белый кролик",
          "Essence" => "Сказочный зверь",
          "Description" => "Постоянно куда-то опаздывает. Не расстаётся со своими часами",
          "Weapun" => "Чвсы",
          "Edurance" => 65,
          "Strength" => 40,
          "Agility" => 95,
      );
      $Hatter = array(
        "Name" => "Шляпник",
        "Essence" => "Человек с причудами",
        "Description" => "Обитатель страны чудес. Обожает свою шляпу",
        "Weapun" => "Шляпа",
        "Edurance" => 55,
        "Strength" => 85,
        "Agility" => 70,
      );
      $Card = array(
        "Name" => "Тройка",
        "Essence" => "Карточный рыцарь",
        "Description" => "Прислуга Королевы в Стране Чудес. Привык перекрашивать розы в другой цвет",
        "Weapun" => "Кисточка",
        "Edurance" => 35,
        "Strength" => 65,
        "Agility" => 50,
      );

      $characters = array($WRabbit, $Hatter, $Card)

      ?>
      <?for($i = 0; $i < count($characters); $i++):?>
        <b>Имя:</b> <?=$characters[$i]["Name"];?>
        <br><b>Сущность:</b> <?=$characters[$i]["Essence"];?>
        <br><b>Описание:</b> <?=$characters[$i]["Description"];?>

        <?
        $strength_clr = Color($characters[$i]["Strength"]);
        $edurance_clr = Color($characters[$i]["Edurance"]);
        $agility_clr = Color($characters[$i]["Agility"]);

        $all = All($characters[$i]["Agility"], $characters[$i]["Edurance"], $characters[$i]["Strength"]);
        $average = Average($characters[$i]["Agility"], $characters[$i]["Edurance"], $characters[$i]["Strength"]);
        $persent = Percent($characters[$i]["Agility"], $characters[$i]["Edurance"], $characters[$i]["Strength"]);
        ?>

        <br>
        <br>
        <table width="100%" border="1" cellpadding="4" cellspacing="0">
          <caption>Характеристики: <?=$characters[$i]["Name"]?></caption>
          <tr>
            <th style="background: #9f9f9f">Оружие</th><th style="background: #9f9f9f">Выносливость</th><th style="background: #9f9f9f">Сила</th><th style="background: #9f9f9f">Ловкость</th><th style="background: #9f9f9f">Всего</th><th style="background: #9f9f9f">Среднее</th><th style="background: #9f9f9f">Процент</th>
          </tr>
          <tr>
            <td><?=$characters[$i]["Weapun"]?></td><td style="background: <?=$edurance_clr?>"><?=$characters[$i]["Edurance"]?></td><td style="background:<?=$strength_clr?>"><?=$characters[$i]["Strength"]?></td><td style="background:<?=$agility_clr?>"><?=$characters[$i]["Agility"]?></td><td><?=$all?></td><td><?=(int)$average?></td><td><?=(int)$persent.'%'?></td>
          </tr>
        </table>
        <br>
        <br>

      <?endfor;?>



    <?
    $play = array('Jump', 'Run', 'Fight', 'Result');

    echo '<b>Прыжки:</b>';
    for($i = 1; $i < 6; $i++):?>
      <?for($j = 0; $j < count($characters); $j++):?>
          <?$play['Jump'][$characters[$j]["Name"]] += (int)($characters[$j]["Agility"]/$i)?>
      <?endfor;?>
    <?endfor;?>
    <?for($j = 0; $j < count($characters); $j++):?>
      <br><?=$characters[$j]["Name"]?> - <?=$play['Jump'][$characters[$j]["Name"]]?>

    <?endfor;

    echo '<br><br><b>Бег:</b>';
    for($i = 1; $i < 6; $i++):?>
      <?for($j = 0; $j < count($characters); $j++):?>
          <?$play['Run'][$characters[$j]["Name"]] += (int)($characters[$j]["Edurance"]/$i)?>
      <?endfor;?>
    <?endfor;?>
    <?for($j = 0; $j < count($characters); $j++):?>
      <br><?=$characters[$j]["Name"]?> - <?=$play['Run'][$characters[$j]["Name"]]?>
    <?endfor;

    echo '<br><br><b>Борьба:</b>';
    for($i = 1; $i < 6; $i++):?>
      <?for($j = 0; $j < count($characters); $j++):?>
        <?$play['Fight'][$characters[$j]["Name"]] += (int)($characters[$j]["Strength"]/$i)?>
      <?endfor;?>
    <?endfor;?>
    <?for($j = 0; $j < count($characters); $j++):?>
      <br><?=$characters[$j]["Name"]?> - <?=$play['Fight'][$characters[$j]["Name"]]?>
      <?$play['Result'][$characters[$j]["Name"]] = $play['Run'][$characters[$j]["Name"]]+$play['Jump'][$characters[$j]["Name"]]+$play['Fight'][$characters[$j]["Name"]]?>
    <?endfor;?>

    <br><br>
    <br><b>Всего:</b><br><br>

      <?foreach($play["Result"] as $Name => $Res):?>
        <?=$Name?>: <?=$Res?><br>
      <?endforeach;?>

  </div>

<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>