<?php

include "../templates/menu.html";

?>



<main class="conteudoAllObras">
        <div class="titulo">
            <h1 style="color: black;">Convidados Especiais</h1>
        </div>
        <div class="pesquisa">
            <div id="campos">
                    <form action="">
                        <div class="pesquisaform">
                            <label for="Nome">Nome:</label>
                            <input type="text" id="Nome" name="nome" placeholder="Digite o Nome ">
                            <label for="Tipo">Tipo:</label>
                            <select name="" id="">
                                <option value="">Video</option>
                                <option value="">Post</option>
                            </select>
                        </div>
                        <div class="concluiform">
                            <a href=""  class="btn-concluir">Pesquisar</a>  
                        </div>
                    </form>
                </div>
                <div>
                    <a id="pesquisar2" class="red-btn">Pesquisar</a>
                </div>
            </div>
        </div>
        <section class="allobras">
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nome da obra</h2>
                    <div class="descobra">
                        <p><b>Nome da obra:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="mostraobra.php" class="btn-efect" >Visualizar</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nome da obra</h2>
                    <div class="descobra">
                        <p><b>Nome da obra:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Visualizar</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nome da obra</h2>
                    <div class="descobra">
                        <p><b>Nome da obra:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Visualizar</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nome da obra</h2>
                    <div class="descobra">
                        <p><b>Nome da obra:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Visualizar</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nome da obra</h2>
                    <div class="descobra">
                        <p><b>Nome da obra:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Visualizar</a>

                    </main>
                </div>
            </div>
          
        </section>
    </main>

<?php

include "../templates/rodape.html";

?>
   <script src="../../js/jquery.js"></script>
  
  <script>
    //   $("#campos").hide();
$("#pesquisar2").click(function(){
    $("#campos").fadeToggle();
    $("#pesquisar2").hide();
    // $(".pesquisa #campos form").css("display","grid");
});
  </script>
  <script src="../../js/main.js"></script>