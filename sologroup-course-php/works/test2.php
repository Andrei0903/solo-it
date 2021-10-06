<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>
<h1>Домашняя работа №1</h1>
<hr>
<div class="post_body">
    <?
    $myarray = array(
        "0" => "123",
        "1" => "1234",
        "key1" => "key"
    );

    $boockcase = array("boock1", "boock2", "boock3");

    for ($i = 0; $i < count($boockcase); $i++){
        $j = $i+1;
        echo "На $j полке: ".$boockcase[$i];
        echo "<br/>";
    }

    foreach ($boockcase as $key => $value) {
        echo $key.": ".$value;
        echo "<br/>";
    }

    $library = implode(", ", $boockcase);

    //    echo $library;

    //    print_r($myarray);
    //    echo $myarray["key1"];
    ?>

</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>

