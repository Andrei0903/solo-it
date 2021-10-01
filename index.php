<? $content["title"] = "Главная";
require_once "include/header.php"?>
    
    <section>
        <div class="block image">
            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti facere quia tempore aliquid, modi numquam voluptates quibusdam odit cum magni, distinctio sit inventore nisi cupiditate quidem ducimus dolores voluptate consectetur.</p>
                <a href="#some" class="chevron block">
                    <img src="img/chevrondown.svg" alt="chevron">
                </a>
            </div>
        </div>
    </section>

    <section class="some" id="some">
        <div class="container" id="l1">
            <div class="row rr">
              <h1> <i>Lesson 1</i> </h1>
              <hr>
                <div class="gallery" id="lightgallery">
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                    <a class="image-wrapper" href="img/leopard-usy-vnimanie.jpg">
                        <img src="img/leopard-usy-vnimanie.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="some l2" id="l2" style="margin-top: 300px;">
        <div class="container">
            <div class="row rr">
                <h1><i>Lesson 2</i> </h1>
                <hr>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Title</th>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>Maks</td>
                        <td>16</td>
                        <td>SyperMen</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Alex</td>
                        <td>22</td>
                        <td>Poor worker</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
   
<? require_once $_SERVER["DOCUMENT_ROOT"]. "/include/footer.php"?>
  