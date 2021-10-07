<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>
<h1>Заголовок страницы.</h1>
<div class="post_body">

    <?
        $boockcase = array("Книга1", "Книга2", "Книга3", "Книга4");

        if(isset($_GET["id"]))
            echo $boockcase[$_GET['id']-1]
    ?>
    <br><p>Add Bock</p>
    <form action="" method="post">
        <input type="number" id="num" name="number" placeholder="number bock"> <br>
        <input type="text" name="name" placeholder="name bock"><br>
        <input type="submit" value="submit">
    </form>
    <?
        if (isset($_POST['number']) && isset($_POST['name'])){
            $boockcase[$_POST['number']] = $_POST['name'];
        }
        ?>
    <pre>
        <? var_dump($boockcase)?>
    </pre>

    <?
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/works/other/bock/'.$_POST['number'].'.php', 'Под этим номером лежит книга '.$_POST['number'], FILE_APPEND);
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/works/other/bock/all_add.php', $_POST['number']. "-" .$_POST['name']. '', FILE_APPEND); 
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/works/other/bock/all.php', var_export($boockcase,true));

    ?>

</div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>

