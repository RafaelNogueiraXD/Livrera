<?php

include "../templates/menu.html";

?>
<main class="conteudoTelainicial">
        <div class="titulo">
            <h1 style="color: black;">Convidados Especiais</h1>
        </div>
        <div class="pesquisa">
            <div id="campos">
                <form action="">
                    <div class="pesquisaform">
                        <label for="Nome">Nome:</label>
                        <input type="text" id="Nome" name="nome" placeholder="Digite o Nome ">
                        <label for="Nacionalidade">Nacionalidade:</label>
                        <input type="text" id="Nacionalidade" name="nacionalidade" placeholder="Digite O país">
                    </div>
                    <div class="concluiform">
                        <a href="" class="btn-concluir">Pesquisar</a>  
                    </div>
                </form>
            </div>
            <div>
                <a id="pesquisar" class="red-btn">Pesquisar</a>
            </div>
            </div>
        </div>
        <div class="convidadosEspeciais">
            <!-- começa os exemplos -->
            <div style="background-image: url(../../css/img/pessoa/andressa.png);">
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href="../convidadosespeciais/especifico.php"> visualizar</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div>
            <div style="background-image: url(../../css/img/pessoa/andressa.png);">
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div>
            <div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div><div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

                </div>
            </div><div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nome:</b> Aishra Valentini</p>
                        <p><b>Idade:</b> 21 anos</p>
                        <p><b>Email:</b> Aishra@hotmail.com</p>
                        <a href=""> visualizar</a>

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