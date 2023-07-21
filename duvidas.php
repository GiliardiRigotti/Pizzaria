<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Pizzaria Araldi</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="icon" href="img/AdoLogo.png">

        <link rel="stylesheet" href="folha.css">

        <script src="https://kit.fontawesome.com/c0ba00ee12.js" crossorigin="anonymous"></script>

    </head>

    

    <body>

       <embed src="background.mp3" hidden="true" loop="infinite" autostart="TRUE">



        <!-- Sidebar/menu (SMALL) -->

        <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">

            <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">Fechar</a> 

            <a href="#menu" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">Cardápio</a> 

            <a href="#rodizio" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">Rodízio</a>

            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">Sobre</a> 

            <a href="#contato" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">Contato</a>

        </nav>

        <header class="w3-container w3-top w3-xxlarge w3-padding back">

            <span class="w3-left w3-padding"><img class="w3-image" src="img/logo.png" id="logo">

             <!-- Navbar (FULL) -->

                <div class="w3-top w3-center w3-hide-small bt-margin font-white back">

                    <a href="#menu" class="w3-bar-item w3-btn w3-round-large w3-hover-red cour">Cardápio</a>

                    <a href="#rodizio" class="w3-bar-item w3-btn w3-round-large w3-hover-red cour">Rodízio</a>

                    <a href="#about" class="w3-bar-item w3-btn w3-round-large w3-hover-red cour">Sobre</a>

                    <a href="#contato" class="w3-bar-item w3-btn w3-round-large w3-hover-red cour">Contato</a>

                </div>

            <a href="javascript:void(0)" class="w3-right w3-button font-white w3-hide-large" onclick="w3_open()">☰</a></span>

        </header>

       <!--  Whats Fixo -->

        <div class="whatsapp-fixo">

            <a href="https://pedir.delivery/araldi">

            <div class="tooltip">

                <img  src="img/delivery.png" class="w3-image" width="100px" height="100px" alt="Faça seu pedido pelo WhatsApp"/> 

                <span class="tooltiptext w3-white w3-small">Faça seu pedido !</span>

            </div>    

            </a>

        </div>

        <main  class="fundo-color3">

            <img src="img/back.png" class="w3-image round">

            <!-- Tamanhos Container -->

            <div class="w3-container w3-padding-64 fundo-color3 w3-xlarge" id="menu">

                <div class="w3-content">

                    <h1 class="w3-center cour w3-xxlarge font-white" style="margin-bottom:64px">• Tamanhos das Pizzas • </h1>

                    <?php
                        require 'db.php';

                        $resultado = mysqli_query($con, "SELECT * FROM precoPizzas");

                        $preco = array();

                        $i = 0;

                        while ($linha = $resultado->fetch_assoc()) {
                            $preco[$i] = $linha["preco"];
                            $i++;
                        }

                    ?>

                    <div class="w3-row">

                        <div class="w3-center w3-container w3-quarter">

                            <img src="img/30.png" class="zoom w3-image">

                            <p class="cour w3-xlarge font-white">Pizza Pequena</p>

                            <p class=" w3-large font-white">8 fatias</p>

                            <p class="cour w3-xxlarge font-white">R$ <?php echo $preco[0];?>,00</p>

                        </div>

                        <div class="w3-center w3-container w3-quarter">

                            <img src="img/35.png" class="zoom w3-image">

                            <p class="cour w3-xlarge font-white">Pizza Média</p>

                            <p class="w3-large font-white">10 fatias</p>

                            <p class="cour w3-xxlarge font-white">R$ <?php echo $preco[1];?>,00</p>

                        </div>

                        <div class="w3-center w3-container w3-quarter">

                            <img src="img/40.png" class="zoom w3-image">

                            <p class="cour w3-xlarge font-white">Pizza Grande</p>

                            <p class="w3-large font-white">12 fatias</p>

                            <p class="cour w3-xxlarge font-white">R$ <?php echo $preco[2];?>,00</p>

                        </div>

                        <div class="w3-center w3-container w3-quarter">

                            <img src="img/45.png" class="zoom w3-image">

                            <p class="cour w3-xlarge font-white">Pizza Gigante</p>

                            <p class="w3-large font-white">16 fatias</p>

                            <p class="cour w3-xxlarge font-white">R$ <?php echo $preco[3];?>,00</p>

                        </div>

                    </div><br>

                    <h1 class="w3-center w3-large font-white">• Borda de Cheddar, Catupiry, Chocolate ou Creme de Avelã, acréscimo de R$ 8,00 • </h1>

                </div>

            </div>

            <!-- Sabores Container -->

            <div class="w3-container w3-padding-64 w3-white w3-xlarge round-top ">

                <div class="w3-content">

                    <h1 class="w3-center cour w3-xxlarge" style="margin-bottom:64px">• Duvidas Frequentes • </h1>

                    <div class="w3-row">

                        <div class="w3-container">

                            <ul class="w3-ul">

                                <?php

                                    $resultado = mysqli_query($con, "SELECT * FROM produtos WHERE categoria=1");

                                    while ($linha = $resultado->fetch_assoc()) {

                                ?>

                                    <li>

                                        <p class="w3-large cour"><?php echo $linha["nome"];?></p>

                                        <p class="w3-medium"><?php echo $linha["descricao"];?></p>

                                    </li>

                                <?php

                                    }

                                ?>

                            </ul>

                        </div>

                    </div><br>

                    <br>

                </div>

            </div>

            <!-- Sobre Container -->

            <div class="w3-container w3-padding-64 fundo-color3 w3-xlarge" id="about">

                <div class="w3-content">

                    <h1 class="w3-center cour font-white" style="margin-bottom:64px"> • A Pizzaria • </h1>

                    <div class="w3-row">

                        <div class="w3-center w3-container w3-half">

                            <!-- Slide Auto Nav -->   

                            <div><br>

                                <img class="mySlides" src="img/fundo4.jpg" style="width:100%">

                                <img class="mySlides" src="img/onepage_restaurant.jpg" style="width:100%">

                                <img class="mySlides" src="img/fundo2.jpg" style="width:100%">

                            </div>

                        </div>

                        <div class="w3-center w3-container w3-half bt-margin-top">

                            <p style="opacity:0.2" class="aspas">❝</p>

                            <p class="font-white">Atuando a mais de 20 anos em Joinville, sempre acreditamos que nossos produtos proporcionam momentos felizes ao lado de seus familiares e amigos!! Não é apenas uma pizza, são momentos. E momentos são marcantes.</p>

                            <img src="img/stars.png" class="zoom w3-image w3-center stars">

                        </div>

                    </div>           

                </div>

            </div>

            <!-- Rodízio Container -->

            <div class="w3-container w3-padding-64 fundo-color2 w3-xlarge" id="rodizio">

                <div class="w3-content">

                    <h1 class="w3-center cour font-white" style="margin-bottom:64px"> • Rodízio de Pizzas e Massas • </h1>

                    <p class="w3-center w3-large font-white bt-margin-top"><b> R$ 64,90 Terça à Quinta </b></p></div><br>
                    <p class="w3-center w3-large font-white bt-margin-top"><b> R$ 69,90 Sexta à Domingo </b></p><br>
                    <p class="w3-center w3-large font-white bt-margin-top"><b> Crianças de 5 à 8 pagam meio rodízio </b></p><br>

                    <div class="w3-row">

                        <div class="w3-col w3-container" style="width:25%">

                            <!--EMPTY-->

                        </div>

                        <div class="w3-col w3-container w3-left" style="width:30%">

                            <p class="font-white"> &#10004; 4 tipos de Lasanhas </p>

                            <p class="font-white"> &#10004; 3 tipos Macarrões </p>

                            <p class="font-white"> &#10004; Nhoque</p>

                            <p class="font-white"> &#10004; Rondelli</p>

                            <p class="font-white"> &#10004; Canelone</p>

                        </div>

                        <div class="w3-col w3-left w3-container" style="width:30%">

                            <p class="font-white"> &#10004; Mini Churros</p>

                            <p class="font-white"> &#10004; Batata frita</p>

                            <p class="font-white"> &#10004; Frango a passarinho</p>

                            <p class="font-white"> &#10004; Pastelzinho</p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Imagem da localização/map -->

            <div class="fundo" style="padding: 128px;">     

                <!-- EMPTY -->

            </div>        

            <!-- page contato -->

            <section class="w3-container w3-center fundo-color" style="padding:100px 16px" id="contato">

                <div class="w3-third w3-container font-white">

                    <img src="img/logo.png" class="w3-image w3-round" width="200" height="200"><br>

                    <br><p>São mais de 20 anos unindo bom gosto e boa qualidade.

                        O rodízio de pizzas com a massa mais fina da cidade!<br>

                        </p>

                    <br>

                    <p class="cour">Siga a gente! ⤵</p>

                    <div class="w3-normal w3-section">

                        <a href="https://www.facebook.com/AraldiPizzaria" class="fab fa-facebook icon-color w3-margin-left w3-hover-text-grey w3-xlarge"></a>

                        <a href="https://www.instagram.com/araldipizzaria/" class="fab fa-instagram icon-color  w3-margin-left w3-hover-text-grey w3-xlarge"></a>

                        <a href="https://pedir.delivery/araldi" class="fas fa-shipping-fast w3-margin-left icon-color  w3-hover-text-grey w3-xlarge"></a> 

                        <a href="https://api.whatsapp.com/send?phone=5547999066766" class="fab fa-whatsapp icon-color  w3-margin-left w3-hover-text-grey w3-xlarge"></a>

                    </div>

                </div>

                <div class="w3-third w3-container">

                    <h3 class="cour font-white" style="margin-bottom: 32px;"> Horário de Atendimento</h3>

                    <p class="font-white">Terça à Domingo das 18h:30min às 00h00min.</p>

                    <br>

                    <h3 class="cour font-white"> Delivery </h3>

                    <P class="font-white">📝 Faça seu pedido 

                    <a href="https://pedir.delivery/araldi"> pedir.delivery/araldi </a></P>

                    <a href="https://pedir.delivery/araldi" class="w3-btn fundo-color w3-round-large font-white"> Faça seu pedido aqui!  <i class="fas fa-shipping-fast"></i></a>

                </div> 

                <div class="w3-third w3-container">

                    <h3 class="cour font-white"> Entre em Contato</h3>

                    <br>

                    <p class="font-white"><i class="fab fa-whatsapp icon-color"></i> Celular (47) 99906-6766 / (47) 3463-0500</p>

                    <p class="font-white"><i class="far fa-envelope icon-color"></i></i> E-mail: contato@pizzariaaraldi.com.br <br></p>                    

                    <p class="font-white"><i class="fas fa-map-marker-alt icon-color"></i> R. João Maria Waltrick, 101 - Itinga - Araquari/SC </p>

                    <p class="font-white"><i class="fas fa-map-marker-alt icon-color"></i> R. São Paulo, 2083 - Floresta - Joinville/SC </p><br> 

                    <br>

                </div>

            </section>

            <!-- footer -->

            <footer class="w3-footer w3-black w3-padding w3-center">

                <p> © 2021 Araldi Pizzaria | Desenvolvido por <a href="https://www.facebook.com/codeGhostSoftwares/"><i class="fas fa-ghost"></i> codeGhost. </a></p>  

            </footer>

            <script language="JavaScript" src="script.js"></script>

        </main>

    </body>

</html>
