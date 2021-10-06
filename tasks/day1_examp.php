<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>

  <h1>Домашнее задание. День 1. Пример.</h1>
  <div class="post_body">
    <br>
    <br>
        <p><?echo "<b>Имя:</b> Белый Кролик"?></p>
        <p><?echo "<b>Сущность:</b> Сказочный зверь"?></p>
        <p><?echo "<b>Описание:</b> Постоянно куда-то опаздывает. Не расстаётся со своими часами"?></p>
        <?
        $weapun  = "Часы на цепочке";
        $edurance = 65;
        $strength = 40;
        $agility = 95;

        $all = $agility+$strength+$edurance;
        $max = 300;
        $average = $all/3;
        $persent = ($all/300)*100;
        ?>

        <br><br><table width="100%" border="1" cellpadding="4" cellspacing="0">
          <caption>Характеристики Белого Кролика</caption>
          <tr>
            <th style="background: #6f42c1">Оружие</th><th style="background: #10e5fc">Выносливость</th><th style="background: #76E359">Сила</th><th style="background: #ffe667">Ловкость</th><th style="background: #de9d86">Всего</th><th style="background: #5d666b">В среднем</th><th style="background: #9f9f9f">Процент</th>
          </tr>
          <tr>
            <td><?=$weapun?></td><td><?=$edurance?></td><td><?=$strength?></td><td><?=$agility?></td><td><?=$all?></td><td><?=(int)$average?></td><td><?=(int)$persent.'%'?></td>
          </tr>
        </table>
  </div>

<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>