<?php

    include "../templates/menu.html";

?>
<div class="ConteudoInicial">
        <div class="telainicial">
            <div class="parte1">
                <div class="titulo">
                    <h1 style="color:black">Noticias</h1>
                </div>
                <div class="carrossel">
                    <!-- <div class="conteudo"> -->
                        
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href="">
                                    <img src="../../css/img/fundos/novAges.png" alt="">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <img src="../../css/img/fundos/novAges.png" alt="">

                              </div>
                              <div class="carousel-item">
                                <img src="../../css/img/fundos/novAges.png" alt="">

                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only" style="background-color: black;">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="parte2">
                <div>
                    <div class="titulo">
                        <h1 style="color:black">Invitados Especiales</h1>
                    </div>
                    <div class="convidados">
                        <section class="uruguay">
                            <div class="pais">
                                <h2><b>Brazil and Uruguay</b></h2>
                            </div>
                            <div class="pessoas">
                                <div id="pessoa1">
                                <div class="desc">
                                   <h3>Andressa</h3>
                 
                                      <p><b>Nombre:</b> Aishra Valentini</p>
                                     <p><b>Edad:</b> 21 anos</p>
                                     <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                                     <a href=""> Ver</a>

                                 </div>
                                </div>
                                <div id="pessoa2">
                                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nombre:</b> Aishra Valentini</p>
                        <p><b>Edad:</b> 21 anos</p>
                        <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                        <a href=""> Ver</a>

                </div>
                                </div>
                                <div id="pessoa3">
                                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nombre:</b> Aishra Valentini</p>
                        <p><b>Edad:</b> 21 anos</p>
                        <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                        <a href=""> Ver</a>

                </div>
                            </div>
                        </section>
                        <section class="brasil">
                            <div class="pais">
                                <h2><b>Otros Países</b></h2>
                            </div>
                            <div class="pessoas">
                                <div id="pessoa4">
                                    <div class="desc">
                                            <h3>Andressa</h3>
                                         
                                                <p><b>Nombre:</b> Aishra Valentini</p>
                                                <p><b>Edad:</b> 21 years</p>
                                                <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                                                <a href="../convidadosespeciais/especifico.php"> Ver</a>
                                    </div>
                                </div>
                                        <div id="pessoa5">
                                        <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nombre:</b> Aishra Valentini</p>
                        <p><b>Edad:</b> 21 anos</p>
                        <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                        <a href=""> Ver</a>

                </div>
                <div class="desc">
                    <h3>Andressa</h3>
                 
                        <p><b>Nombre:</b> Aishra Valentini</p>
                        <p><b>Edad:</b> 21 anos</p>
                        <p><b>Correo Eletrónico:</b> Aishra@hotmail.com</p>
                        <a href=""> Ver</a>

                </div>
                            </div>
                        </section>
                        <center>
                            <a href="" class="red-btn">Ver más</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php

    include "../templates/rodape.html";

?>