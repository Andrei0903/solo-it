<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>

  <h1>Домашнее задание. День 4. Пример.</h1>
  <div class="post_body">
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

    <?$characters = array();?>

    <br><p>Герой</p>
    <form method='post'>
      <input type="number" name="Number" size="40" maxlength="35" required placeholder="Номер">
      <br><br><input type="text" name="Name" size="40" maxlength="35" required placeholder="Имя">
      <input type="text" name="Essence" size="40" maxlength="35" required placeholder="Сущность">
      <input type="text" name="Description" size="40" maxlength="35" required placeholder="Описание">
      <input type="text" name="Weapun" size="40" maxlength="35" required placeholder="Оружие">
      <br><br>Характеристики (от 1 до 100):
      <br><br><input type="number" name="Edurance" size="40" maxlength="35" required placeholder="Выносливость">
      <br><input type="number" name="Strength" size="40" maxlength="35" required placeholder="Сила">
      <br><input type="number" name="Agility" size="40" maxlength="35" required placeholder="Ловкость">
      <br><br><input type='submit' name="Submit" value='Отправить'>
    </form>
<?

$character = array(
  'Name' => $_POST['Name'],
  'Essence' => $_POST['Essence'],
  'Description' => $_POST['Description'],
  'Weapun' => $_POST['Weapun'],
  'Edurance' => $_POST['Edurance'],
  'Strength' => $_POST['Strength'],
  'Agility' => $_POST['Agility'],
);?>
<?if(isset($_POST['Number'])):?>
    <br><br>
    <b>Имя:</b> <?=$character["Name"];?>
    <br><b>Сущность:</b> <?=$character["Essence"];?>
    <br><b>Описание:</b> <?=$character["Description"];?>

    <?
    $strength_clr = Color($character["Strength"]);
    $edurance_clr = Color($character["Edurance"]);
    $agility_clr = Color($character["Agility"]);

    $all = All($character["Agility"], $character["Edurance"], $character["Strength"]);
    $average = Average($character["Agility"], $character["Edurance"], $character["Strength"]);
    $persent = Percent($character["Agility"], $character["Edurance"], $character["Strength"]);
    ?>

    <br>
    <br>
    <table width="100%" border="1" cellpadding="4" cellspacing="0">
      <caption>Характеристики: <?=$character["Name"]?> (<?=$_POST['Number']?>)</caption>
      <tr>
        <th style="background: #9f9f9f">Оружие</th><th style="background: #9f9f9f">Выносливость</th><th style="background: #9f9f9f">Сила</th><th style="background: #9f9f9f">Ловкость</th><th style="background: #9f9f9f">Всего</th><th style="background: #9f9f9f">Среднее</th><th style="background: #9f9f9f">Процент</th>
      </tr>
      <tr>
        <td><?=$character["Weapun"]?></td><td style="background: <?=$edurance_clr?>"><?=$character["Edurance"]?></td><td style="background:<?=$strength_clr?>"><?=$character["Strength"]?></td><td style="background:<?=$agility_clr?>"><?=$character["Agility"]?></td><td><?=$all?></td><td><?=(int)$average?></td><td><?=(int)$persent.'%'?></td>
      </tr>
    </table>
    <br>
    <br>

    <?if((int)$persent >= 60){
      $character_json = json_encode($character);
      file_put_contents($_SERVER['DOCUMENT_ROOT'].'/characters/characters_json_'.$_POST['Number'].'.txt', $character_json, FILE_APPEND);
      if((int)$persent<85) echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/normal.txt');
      else echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/good.txt');
    }
    else echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/somebad.txt');
    ?>
<?else:?>
  <br><p>Не введены данные.</p>
<?endif;?>
  </div>

<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>