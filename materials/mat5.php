<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>
  <h1>Заголовок страницы.</h1>
  <div class="post_body">
    <p>Материалы по первому дню занятий.</p>
    <?for($i = 1;$i < 5; $i++):?>
    <img src="/img/materials/5/<?=$i?>.png" alt="" width="500px">
  <?endfor;?>
  </div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>