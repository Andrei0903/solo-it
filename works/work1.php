<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>
<h1>Домашняя работа №1</h1>
<hr>
<div class="post_body">

    <style>
        table{
            width: 100%;
            border: 1px solid black;
        }
        th, td{
            border: 1px solid black;
            text-align: center;
        }
        th{
            background: #606060;
            color: #fff;
        }
        td{
            background: #b5b5b5;
        }
    </style>

    <?
        $Name = "Павел";
        $Entity = "Человек";
        $Description = "Программист которого боится ЛЕГАСИ код";

        $Weapons = "Модная клавиатура";
        $Endurance = "45";
        $Power = "30";
        $Dexterity = "100";

        $Total = $Endurance + $Power + $Dexterity;
        $On_average = $Total/3;

    ?>

    <br>
    <p><b>Имя:</b> <Span><?=$Name?></Span></p>
    <p><b>Сущность:</b> <Span><?=$Entity?></Span></p>
    <p><b>Описание:</b> <Span><?=$Description?></Span></p> <br><br>


    <p style="text-align: center">Характеристика: <span><?=$Name?></span></p>

    <table>
        <tr>
            <th>Оружие</th>
            <th>Выносливость</th>
            <th>Сила</th>
            <th>Ловкость</th>
            <th>Всего</th>
            <th>В среднем</th>
            <th>Процент</th>
        </tr>
        <tr>
            <td><?=$Weapons?></td>
            <td><?=$Endurance?></td>
            <td><?=$Power?></td>
            <td><?=$Dexterity?></td>
            <td><?=$Total?></td>
            <td><?=(int)$On_average?></td>
            <td><?=(int)$On_average?><span>%</span></td> <!-- Вот с этим так и не опнял что делать -->
        </tr>
    </table>
    <!--
        4 = сумма 1, 2 и 3
        5 = среднее значение 1, 2 и 3
        6 = сколько процентов параметр 4 сотавляет от максимально возможной суммы характеристик (от 300)
    -->
</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>

