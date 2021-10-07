<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php";
include "other/day3.php";
include "other/work4t.php";

//if (isset($_GET['number_hero']))
//{
//    echo $_GET["number_hero"];
//}

$Power_clr = Color($power);
$Endurance_clr = Color($endurance);
$Dexterity_clr = Color($dexterity);

$all_1 = All($dexterity, $dendurance, $power);
$average = Average($dexterity, $endurance, $power);
$persent = Percent($dexterity, $endurance, $power);
?>

<link rel="stylesheet" href="work.css">
<h1>Домашняя работа №4</h1>
<div class="post_body">

    <p>Герой</p>
    <form method="post">
        <input type="number" required  name="number_hero" placeholder="номер героя"> <br><br>
        <input type="text" required name="name_hero" placeholder="Имя героя"> <br>
        <input type="text" required name="entity" placeholder="Сущность"><br>
        <input type="text" required name="description" placeholder="Описание"><br>
        <input type="text" required name="weapons" placeholder="Оружие"><br><br>


        <p>Характеристики от (1 до 100):</p><br>

        <input type="text" required name="endurance" placeholder="Выносливость"><br>
        <input type="text" required name="power" placeholder="Сила"><br>
        <input type="text" required name="dexterity" placeholder="Ловкость"><br>

        <input type="submit" value="Отправть">
    </form>

    <?php if(isset($_POST["number_hero"]) && isset($_POST["name_hero"])):?> <br><br>
    <p><b>Имя:</b> <Span><?=$name?></Span></p>
    <p><b>Сущность:</b> <Span><?=$entity?></Span></p>
    <p><b>Описание:</b> <Span><?=$description?></Span></p> <br><br>

    <p style="text-align: center">Характеристика: <span><?=$name?></span></p> <br><br>

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
                <td><?=$weapons?></td>
                <td style="background: <?=$Endurance_clr?>"><?=$endurance?></td>
                <td style="background: <?=$Power_clr?>"><?=$power?></td>
                <td style="background: <?=$Dexterity_clr?>"><?=$dexterity?></td>
                <td><?=$all_1?></td>
                <td><?=(int)$average?></td>
                <td><?=(int)$persent?><span>%</span></td>
            </tr>
        </table>

        <?if ((int)$persent > 60){
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/characters/characters_json_'.$_POST['Number'].'.txt', $characters_json, FILE_APPEND);
            if((int)$persent<85)
                echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/normal.txt');
            else echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/good.txt');
        }
        else echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/characters/somebad.txt');
        ?>
        <?else:?>
            <br><p>Не введены данные.</p>
    <?php endif;?>

</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>

