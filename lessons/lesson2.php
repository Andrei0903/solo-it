<?$content["title"] = "Lesson2";
require_once $_SERVER ["DOCUMENT_ROOT"]. "/include/header.php"; $title = "Lesson2";?>
<style>
        td, tr {
            border: 3px solid black;
        }
    </style>
    <table style="width: 100%; padding: 10;">
        <tr>
            <td colspan="2">
                <div style="width: 100%; text-align: center;">
                    <img src="/img/leopard-usy-vnimanie.jpg" width="50%" alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 150px; " valign="top">
                <h3>Menu</h3>
                <ul>
                   <p>первый раз пишу сайт в таблице</p>
                </ul>
            </td>
            <td>
                <h1>Форма обратной связи</h1>
                <div>
                    <form action="lesson2.php" method="post">
                        <p>
                            <label for="name">Ваше имя:*</label>
                            <input type="text" name="name" id="name">
                        </p>
                        <p>
                            <label for="email">Ваш email:*</label>
                            <input type="email" name="email" id="email">
                        </p>
                        <p>
                            <textarea name="data" id="" cols="40" rows="10"></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Отправить" class="btn btn-success">
                        </p>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align: center;">
                    Copyright #copy; Все права защищены. 
                </div>
            </td>
        </tr>
    </table>


<? require_once $_SERVER ["DOCUMENT_ROOT"]. "/include/footer.php"?>