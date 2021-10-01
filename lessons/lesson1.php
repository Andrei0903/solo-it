<? $content["title"] = "Lesson1"; 
require_once $_SERVER["DOCUMENT_ROOT"]. "/include/header.php"?>


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
                    <li>lesson1</li>
                    <li>lesson2</li>
                    <li>lesson3</li>
                </ul>
            </td>
            <td>
                <h1>Lesson num 3</h1>
                <div>
                    <p>
                        <b><i> В этом уроке мы рассмотрим <b>Что-то</b> </i></b>
                        <br>
                        <b>text</b>
                            text
                    </p>
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

    
<? require_once $_SERVER["DOCUMENT_ROOT"]. "/include/footer.php"?>
