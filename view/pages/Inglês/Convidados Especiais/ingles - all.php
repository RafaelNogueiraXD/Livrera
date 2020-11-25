<?php

include "../templates/menu.html";

?>
<main class="conteudoTelainicial">
        <div class="titulo">
            <h1 style="color: black;">Special Guests</h1>
        </div>
        <div class="pesquisa">
            <div id="campos">
                <form action="">
                    <div class="pesquisaform">
                        <label for="Nome">Name:</label>
                        <input type="text" id="Nome" name="Nome" placeholder="type the name ">
                        <label for="Nacionalidade">Nationality:</label>
                        <input type="text" id="Nacionalidade" name="Nacionalidade" placeholder="type the country">
                    </div>
                    <div class="concluiform">
                        <a href="" class="btn-concluir">Search</a>  
                    </div>
                </form>
            </div>
            <div>
                <a id="pesquisar" class="red-btn">Search</a>
            </div>
            </div>
        </div>
        <div class="convidadosEspeciais">
            <!-- começa os exemplos -->
            <div style="background-image: url(../../css/img/pessoa/andressa.png);">
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href="../convidadosespeciais/especifico.php"> View</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>
            <div style="background-image: url(../../css/img/pessoa/andressa.png);">
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div><div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div><div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Name:</b> Aishra Valentini</p>
                        <p><b>Age:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> View</a>

                </div>
            </div>





            <!-- termina os exemplos -->
        </div>
    </main>    
 
    <?php

include "../templates/rodape.html";

?>
   <script src="../../js/jquery.js"></script>
  
  <script src="../../js/main.js"></script>
  <script>
        $("#campos").hide();
        $("#pesquisar").click(function(){
            $("#campos").fadeToggle();
            $("#pesquisar").hide();
        });
  </script>
