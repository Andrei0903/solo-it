<? include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php";
include $_SERVER['DOCUMENT_ROOT']."/works/other/day2.php";?>
<link rel="stylesheet" href="work.css">
<h1>Домашняя работа №2</h1><br><br>
<div class="post_body">


<!---->
<!--    --><?//foreach ($hero as $heros): ?>
<!--        <p><b>Имя:</b> <Span>--><?//=$heros['Name']?><!--</Span></p>-->
<!--        <p><b>Сущность:</b> <Span>--><?//=$heros['Entity']?><!--</Span></p>-->
<!--        <p><b>Описание:</b> <Span>--><?//=$heros['Description']?><!--</Span></p> <br><br>-->
<!---->
<!--        <p style="text-align: center">Характеристика: <span>--><?//=$heros['Name']?><!--</span></p>-->
<!---->
<!--        <table>-->
<!--            <tr class="table_top">-->
<!--                <th>Оружие</th>-->
<!--                <th>Выносливость</th>-->
<!--                <th>Сила</th>-->
<!--                <th>Ловкость</th>-->
<!--                <th>Всего</th>-->
<!--                <th>Среднее</th>-->
<!--                <th>Процент</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>--><?//=$heros['Weapons']?><!--</td>-->
<!--                <td>--><?//=$heros['Endurance']?><!--</td>-->
<!--                <td>--><?//=$heros['Power']?><!--</td>-->
<!--                <td>--><?//=$heros['Dexterity']?><!--</td>-->
<!--                <td>--><?//=$Total?><!--</td>-->
<!--                <td>--><?//=$heros['']?><!--</td>-->
<!--                <td>--><?//=$heros['']?><!--</td>-->
<!--            </tr>-->
<!--        </table> <br>-->
<!---->
<!--    --><?php //endforeach; ?>

    <p><?
        function All($a, $b, $c){
            return $a+$b+$c;
        }
        function Average($a, $b, $c){
            return All($a, $b, $c)/3;
        }
        function Percent($a, $b, $c, $max=300){
            return (All($a, $b, $c)/300)*100;
        }
        function Color($opt){
            if($opt<50) return 'red';
            elseif ($opt>=50 && $opt<80) return 'yellow';
            else return 'green';
        }?>


        <?
        // HERO 1
        $Name1 = "<b>Имя:</b> Павел";
        $Entity1 = "<b>Сущность:</b> Человек";
        $Description = "<b>Описание:</b> Программист которого боится ЛЕГАСИ код";
        echo $Name1.'<br>'.$Entity1.'<br>'.$Description;
        $Weapun1  = "Модная клавиатура";
        $Endurance1 = 45;
        $Power1 = 30;
        $Dexterity = 100;

        $Power1_clr1 = Color($Power1);
        $Endurance1_clr1 = Color($Endurance1);
        $Dexterity_clr1 = Color($Dexterity);

        $all_1 = All($Dexterity, $Endurance1, $Power1);
        $average_1 = Average($Dexterity, $Endurance1, $Power1);
        $persent_1 = Percent($Dexterity, $Endurance1, $Power1);
        ?>
        <br>
        <br>
        <table>

        <caption>Характеристики: <?=$Name1?></caption>
        <tr class="table_top">
            <th>Оружие</th>
            <th>Выносливость</th>
            <th>Сила</th>
            <th>Ловкость</th>
            <th>Всего</th>
            <th>Среднее</th>
            <th>Процент</th>
        </tr>
        <tr>
            <td><?=$Weapun1?></td>
            <td style="background: <?=$Endurance1_clr1?>"><?=$Endurance1?></td>
            <td style="background:<?=$Power1_clr1?>"><?=$Power1?></td>
            <td style="background:<?=$Dexterity_clr1?>"><?=$Dexterity?></td>
            <td><?=$all_1?></td>
            <td><?=(int)$average_1?></td>
            <td><?=(int)$persent_1.'%'?></td>
        </tr>
    </table>
    <br>
    <br>

    <?
    // HERO 2
    $Name2 = "<b>Имя:</b> Гном";
    $Entity2 = "<b>Сущность:</b> Волшебное существо";
    $Description2 = "<b>Описание:</b> Живет в глубинах пещер. Очень любит алмазы.";
    echo $Name2.'<br>'.$Entity2.'<br>'.$Description2;
    $Weapun2  = "Старая кирка";
    $Endurance2 = 80;
    $Power2 = 45;
    $Dexterity2 = 30;

    $Power1_clr2 = Color($Power2);
    $Endurance1_clr2 = Color($Endurance2);
    $Dexterity_clr2 = Color($Dexterity2);

    $all_2 = All($Dexterity, $Endurance1, $Power1);
    $average_2 = Average($Dexterity2, $Endurance2, $Power2);
    $persent_2 = Percent($Dexterity2, $Endurance2, $Power2);
    ?>
    <br>
    <br>
    <table>

        <caption>Характеристики: <?=$Name2?></caption>
        <tr class="table_top">
            <th>Оружие</th>
            <th>Выносливость</th>
            <th>Сила</th>
            <th>Ловкость</th>
            <th>Всего</th>
            <th>Среднее</th>
            <th>Процент</th>
        </tr>
        <tr>
            <td><?=$Weapun2?></td>
            <td style="background: <?=$Endurance1_clr1?>"><?=$Endurance2?></td>
            <td style="background:<?=$Power1_clr1?>"><?=$Power2?></td>
            <td style="background:<?=$Dexterity_clr1?>"><?=$Dexterity2?></td>
            <td><?=$all_2?></td>
            <td><?=(int)$average_2?></td>
            <td><?=(int)$persent_2.'%'?></td>
        </tr>
    </table>
    <br>
    <br>

    <?
    // HERO 3
    $Name3 = "<b>Имя:</b> Преспешник";
    $Entity3 = "<b>Сущность:</b> Неизвестно";
    $Description3 = "<b>Описание:</b> Существо с неизвестной силой";
    echo $Name3.'<br>'.$Entity3.'<br>'.$Description3;
    $Weapun3  = "Неизвестно";
    $Endurance3 = 95;
    $Power3 = 67;
    $Dexterity3 = 79;

    $Power1_clr3 = Color($Power3);
    $Endurance1_clr3= Color($Endurance3);
    $Dexterity_clr3 = Color($Dexterity3);

    $all_3 = All($Dexterity3, $Endurance3, $Power3);
    $average_3 = Average($Dexterity3, $Endurance3, $Power3);
    $persent_3 = Percent($Dexterity3, $Endurance3, $Power3);
    ?>
    <br>
    <br>
    <table>

        <caption>Характеристики: <?=$Name3?></caption>
        <tr class="table_top">
            <th>Оружие</th>
            <th>Выносливость</th>
            <th>Сила</th>
            <th>Ловкость</th>
            <th>Всего</th>
            <th>Среднее</th>
            <th>Процент</th>
        </tr>
        <tr>
            <td><?=$Weapun3?></td>
            <td style="background: <?=$Endurance1_clr1?>"><?=$Endurance3?></td>
            <td style="background:<?=$Power1_clr1?>"><?=$Power3?></td>
            <td style="background:<?=$Dexterity_clr1?>"><?=$Dexterity3?></td>
            <td><?=$all_3?></td>
            <td><?=(int)$average_3?></td>
            <td><?=(int)$persent_3.'%'?></td>
        </tr>
    </table>
    <br>
    <br>

    <p>Прыжки:</p>

    <?
    $result1 = 0;
    $result2 = 0;
    $result3 = 0;
    for($i = 1; $i < 6; $i++):?>
        <br><br><p><b><span> Ход </span><?=$i?></b></p>
        <br><?=$Name1?>. <span>Результат </span><?=(int)($Dexterity/$i)?> <?$result1 += (int)($Dexterity/$i)?>
        <br><?=$Name2?>. <span>Результат </span><?=(int)($Dexterity2/$i)?> <?$result2 += (int)($Dexterity2/$i)?>
        <br><?=$Name3?>. <span>Результат </span><?=(int)($Dexterity3/$i)?> <?$result3 += (int)($Dexterity3/$i)?>
    <?endfor;?>
    <br><br>
    <hr>
    <h4>Результат:</h4>
    <br><?= $Name1.' - '.$result1?>
    <br><?= $Name2.' - '.$result2?>
    <br><?= $Name3.' - '.$result3?>
</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>

