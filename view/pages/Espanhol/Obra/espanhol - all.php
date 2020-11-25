?php

include "../templates/menu.html";

?>



<main class="conteudoAllObras">
        <div class="titulo">
            <h1 style="color: black;">Invitados Especiales</h1>
        </div>
        <div class="pesquisa">
            <div id="campos">
                    <form action="">
                        <div class="pesquisaform">
                            <label for="Nome">Nombre:</label>
                            <input Tipo="text" id="Nome" name="nome" placeholder="Busca por un nombre ">
                            <label for="Tipo">Tipo:</label>
                            <select name="" id="">
                                <option value="">Video</option>
                                <option value="">Post</option>
                            </select>
                        </div>
                        <div class="concluiform">
                            <a href=""  class="btn-concluir">Buscar</a>  
                        </div>
                    </form>
                </div>
                <div>
                    <a id="pesquisar2" class="red-btn">Buscar</a>
                </div>
            </div>
        </div>
        <section class="allobras">
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nombre de la obra de arte</h2>
                    <div class="descobra">
                        <p><b>Nombre de la obra de arte: </b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="mostraobra.php" class="btn-efect" >Ver</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nombre de la obra de arte</h2>
                    <div class="descobra">
                        <p><b>Nombre de la obra de arte:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Ver</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nombre de la obra de arte</h2>
                    <div class="descobra">
                        <p><b>Nombre de la obra de arte:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Ver</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nombre de la obra de arte</h2>
                    <div class="descobra">
                        <p><b>Nombre de la obra de arte:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Ver</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Nombre de la obra de arte</h2>
                    <div class="descobra">
                        <p><b>Nombre de la obra de arte:</b></p>
                        <p><b>Tipo:</b></p>
                        <p><b>Autor:</b></p>
                        <p><b>Data de envio:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >Ver</a>

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
