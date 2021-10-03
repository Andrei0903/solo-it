<?include_once $_SERVER['DOCUMENT_ROOT']."/include_header.php"?>
  <h1>Немного необходимой информации по html и css.</h1>
  <div class="post_body">
    <p>Все элементы в html заключаются в <теги></теги>.</p>
    <p>В начале открывающий <тег>, в конце - закрывающий &lt;/тег&gt;.</p>
    <p>Это параграф, он заключается в тег &lt;p&gt;.</p>
    <p>Все параграфы должны находиться внутри тега &lt;div&gt;.</p>
    <p>При выполнении заданий, если это необходимо, заключайте блоки текста в параграфы.</p>
    <br><p>Для того, чтобы перенести текст на новуюстроку используется тег &lt;br&gt;, он используется без закрывающего тега!</p>
    <i><br><p>&lt;br&gt;Новая строка</p></i>

    <br>
    <hr align="center" width="500" size="2" />
    <br />
    <p>Вот это список ol:</p>
    <ol>
      <li>Первый элемент, каждый элемент заключается в тег &lt;li&gt;</li>
      <li>а все элементы вместе в тег &lt;ol&gt;</li>
      <li>или &lt;ul&gt;, если не нужна нумерация</li>
    </ol>

    <p>Вот это список ul:</p>
    <ul>&lt;ul&gt;
      <li>&lt;li&gt;Первый элемент&lt;/li&gt;</li>
      <li>&lt;li&gt;Второй элемент&lt;/li&gt;</li>
      <li>&lt;li&gt;Третий, нумерации нет&lt;/li&gt;</li>
      &lt;/ul&gt;
    </ul>

    <br><hr align="center" width="500" size="2" />
    <br />
    <table width="100%" border="1" cellpadding="4" cellspacing="0">
      <caption>А вот это табличка</caption>
      <tr>
        <th>&nbsp;</th><th>Имя</th><th>Строка</th><th>Столбец(заголовок)</th><th>Столбец(обычный)</th><th>Таблица</th>
      </tr>
      <tr>
        <td>Тег</td><td style="background: #0c74d5">&lt;caption&gt;</td><td>&lt;tr&gt;</td><td>&lt;th&gt;</td><td>&lt;td&gt;</td><td>&lt;table&gt;</td>
      </tr>
    </table>

    <br>&lt;table&gt;
    <br><br>  &lt;caption&gt;Название&lt;/caption&gt;
    <br><br>  &lt;tr&gt;Строка1
    <br>    &lt;th&gt;Столбец 1&lt;/th&gt;&lt;th&gt;Столбец 2&lt;/th&gt;&lt;th&gt;Столбец 3&lt;/th&gt;
    <br>  &lt;/tr&gt;

    <br><br>  &lt;tr&gt;Строка2
    <br>    &lt;td&gt;Столбец 1&lt;/td&gt;&lt;td&gt;Столбец 2&lt;/td&gt;&lt;td&gt;Столбец 3&lt;/td&gt;
    <br>  &lt;/tr&gt;

    <br><br>&lt;/table&gt;

    <br><br><hr align="center" width="500" size="2" />
    <br />
    <p>Чтобы <u>"раскрасить"</u> html-элемент, добавь к тегу фразу (атрибут)  <b>"style="background: (код цвета)"</b></p>
    <p>Например,  "td style="background: #0c74d5"</p>

    <br>
    <hr align="center" width="500" size="2" />
    <br />
    <p>Для добавления ссылки используется тег &lt;a&gt; c атрибутом href</b></p>
    <p>Например, &lt;a href="<ссылка>"&gt;Текст ссылки&lt;/a&gt;</p>
    <p><a href="/index.php">Текст ссылки ведущей на главную страницу</a></p>

    <br>
    <hr align="center" width="500" size="2" />
    <br />
    <p>Поле - тег &lt;input&gt;</p>
    <p> Все поля заключаются в форму &lt;form&gt;</p>
    <p>&lt;form method='тип метода(get, post)'&gt;</p>
    <p>&lt;input type="тип" name="имя" size="размер" required placeholder="подсказка"&gt;</p>
    <p>По имени в атрибуте name будут доступны данные в массиве $_POST или $_GET</p>
    <p>Например, метод post, name="Number", пользователь ввёл 94.</p>
    <p>&lt;?echo $_POST['Number'] //94?&gt;</p>

    <form method='post'>
      <input type="number" name="Number" size="40" maxlength="35" required placeholder="Поле типа number">
      <br><input type="text" name="Name" size="40" maxlength="35" required placeholder="Текстовое поле">
      <br><br><input type='submit' name="Submit" value='Поле-кнопка типа submit для отправки данных'>
    </form>

    <?echo $_POST['Number']?>

    <br><p><a href="http://htmlbook.ru/html/input">Подробнее</a></p>
    <?


    ?>

  </div>
<?include_once $_SERVER['DOCUMENT_ROOT']."/footer.php"?>