?php

include "../templates/menu.html";

?>



<main class="conteudoAllObras">
        <div class="titulo">
            <h1 style="color: black;">Special Guests</h1>
        </div>
        <div class="pesquisa">
            <div id="campos">
                    <form action="">
                        <div class="pesquisaform">
                            <label for="Nome">Name:</label>
                            <input type="text" id="Nome" name="nome" placeholder="Search the name ">
                            <label for="Tipo">Type:</label>
                            <select name="" id="">
                                <option value="">Video</option>
                                <option value="">Post</option>
                            </select>
                        </div>
                        <div class="concluiform">
                            <a href=""  class="btn-concluir">Search</a>  
                        </div>
                    </form>
                </div>
                <div>
                    <a id="pesquisar2" class="red-btn">search</a>
                </div>
            </div>
        </div>
        <section class="allobras">
            <div id="obras">
                <div>
                    <h2 style="color: black;">Artwork's name</h2>
                    <div class="descobra">
                        <p><b>Artwork's name:</b></p>
                        <p><b>Type:</b></p>
                        <p><b>Author:</b></p>
                        <p><b>Upload date:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="mostraobra.php" class="btn-efect" >View</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Artwork's name</h2>
                    <div class="descobra">
                        <p><b>Artwork's name:</b></p>
                        <p><b>Type:</b></p>
                        <p><b>Author:</b></p>
                        <p><b>Upload date:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >View</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Artwork's name</h2>
                    <div class="descobra">
                        <p><b>Artwork's name:</b></p>
                        <p><b>Type:</b></p>
                        <p><b>Author:</b></p>
                        <p><b>Upload date:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >View</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Artwork's name</h2>
                    <div class="descobra">
                        <p><b>Artwork's name:</b></p>
                        <p><b>Type:</b></p>
                        <p><b>Author:</b></p>
                        <p><b>Upload date:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >View</a>

                    </main>
                </div>
            </div>
            <div id="obras">
                <div>
                    <h2 style="color: black;">Artwork's name</h2>
                    <div class="descobra">
                        <p><b>Artwork's name:</b></p>
                        <p><b>Type:</b></p>
                        <p><b>Author:</b></p>
                        <p><b>Upload date:</b></p>
                    </div>
                    <main class="btnobra">
                        <a href="" class="btn-efect" >View</a>

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
