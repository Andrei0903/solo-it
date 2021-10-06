<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php";
include "other/day3.php"?>
<link rel="stylesheet" href="work.css">
<h1>Домашняя работа №3</h1>
<hr>
<div class="post_body">
<!--    <pre>-->
<!--    --><?//print_r($hero);?>
<!--    </pre>-->

    <? for($i=0; $i < count($hero); $i++):?>

        <?
        $Power_clr = Color($hero[$i]["Power"]);
        $Endurance_clr = Color($hero[$i]["Power"]);
        $Dexterity_clr = Color($hero[$i]["Power"]);

        $all_1 = All($hero[$i]["Dexterity"], $hero[$i]["Endurance"], $hero[$i]["Power"]);
        $average = Average($hero[$i]["Dexterity"], $hero[$i]["Endurance"], $hero[$i]["Power"]);
        $persent = Percent($hero[$i]["Dexterity"], $hero[$i]["Endurance"], $hero[$i]["Power"]);
        ?>

        <p><b>Имя:</b> <Span><?=$hero[$i]["Name"]?></Span></p>
        <p><b>Сущность:</b> <Span><?=$hero[$i]["Entity"]?></Span></p>
        <p><b>Описание:</b> <Span><?=$hero[$i]["Description"]?></Span></p> <br><br>

        <p style="text-align: center">Характеристика: <span><?=$hero[$i]["Name"]?></span></p> <br><br>

            <table>
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
                    <td><?=$hero[$i]["Weapons"]?></td>
                    <td style="background: <?=$Endurance_clr?>"><?=$hero[$i]["Endurance"]?></td>
                    <td style="background: <?=$Power_clr?>"><?=$hero[$i]["Power"]?></td>
                    <td style="background: <?=$Dexterity_clr?>"><?=$hero[$i]["Dexterity"]?></td>
                    <td><?=$all_1?></td>
                    <td><?=(int)$average?></td>
                    <td><?=(int)$persent?><span>%</span></td>
                </tr>
            </table>
        <br><br>
    <?php endfor;?>

    <?$play = array('jump', 'run', 'fight', 'result');?>
        <p>Прыжки:</p>
    <?for($i = 1; $i < 6; $i++):?>
        <?for ($j = 0; $j < count($hero); $j++):?>
            <?$play['jump'][$hero[$j]['Name']] += (int)($hero[$j]['Dexterity']/$i)?>
        <?php endfor;?>
    <?php endfor;?>

    <?for ($j = 0; $j < count($hero); $j++ ):?>
        <br> <b><?=$hero[$j]['Name']?></b> =>  <i><?=$play['jump'][$hero[$j]['Name']]?></i>
    <?php endfor; ?> <br><br>

    <p>Бег:</p>
    <?for($i = 1; $i < 6; $i++):?>
        <?for ($j = 0; $j < count($hero); $j++):?>
            <?$play['run'][$hero[$j]['Name']] += (int)($hero[$j]['Endurance']/$i)?>
        <?php endfor;?>
    <?php endfor;?>

    <?for ($j = 0; $j < count($hero); $j++ ):?>
        <br> <b><?=$hero[$j]['Name']?></b> =>  <i><?=$play['run'][$hero[$j]['Name']]?></i>
    <?php endfor; ?> <br><br>

    <p>Борьба:</p>
    <?for($i = 1; $i < 6; $i++):?>
        <?for ($j = 0; $j < count($hero); $j++):?>
            <?$play['fight'][$hero[$j]['Name']] += (int)($hero[$j]['Power']/$i)?>
        <?php endfor;?>
    <?php endfor;?>

    <?for ($j = 0; $j < count($hero); $j++ ):?>
        <br> <b><?=$hero[$j]['Name']?></b> => <i><?=$play['fight'][$hero[$j]['Name']]?></i>
    <?php endfor; ?> <br> <br>

    <br><br><p>Всего: </p>

    <?for($j = 0; $j < count($hero); $j++):?>
        <br><b><?=$hero[$j]["Name"]?></b>  =>
        <?=$play['result'][$hero[$j]["Name"]] = $play['run'][$hero[$j]["Name"]]+$play['jump'][$hero[$j]["Name"]]+$play['fight'][$hero[$j]["Name"]]?>
    <?endfor;?>




</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>


<!--
    бег -> выносливости - Endurance
    борьба -> силы - Power
    прыжки -> ловкости - Dexterity
-->

<!--Не люблю когда все в одном месте-->
