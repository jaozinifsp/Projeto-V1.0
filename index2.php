<?php
// Verifica sessão para páginas restritas
// Caso o usuário não esteja logado na sessão ele é redirecionado para home
require 'php/verifica-sessao.php';
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link href="js/java.js">
    <title>Perfil</title>
</head>
    <style>
        <!-- slide -->
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}   
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }
        
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        
        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    <!-- slide -->
        
    </style>
    
 
<body>
    <!-- pagina inicial-->
    <div class="pagina_incial">
        <div class="acessar">
      <!-- Menu -->
            <nav>  
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo"><img src="img/logo.png" width="95px"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#jogos"><i class="material-icons"></i></a></li>
                        <li><a class="waves-effect waves-light btn modal-trigger" href="cadastro_jogo.php">Cadastre o seu jogo</a></li>
                        <li><a href="#">Bem-vindo(a) <?php echo $_SESSION['nome_login']; ?></a></li>
						<li><a href="php/logout.php">Sair</a> </li>
                    </ul>
                </div>
            </nav>
            
        </div>
        <div class="texto"><center><h3>COMECE AGORA<br>O SEU<br>PROJETO DE GAMES</h3></center>
            <div class="paragrafo"><p>A DevSocial é uma nova plataforma de divulgação e arrecadamentos para projetos voltados para o mundo dos games.<br>
                Se você é um desenvolvedor que deseja promover o seu projeto, ou apenas deseja saber quais são as tendências do mundo de Indie-games, bem vindo a DevSocial.</p>
                <a href="#jogos" class="btn-floating pulse"><i class="material-icons">keyboard_arrow_down</i></a>
            </div>
        </div>
        
        <img class="imagem" src="img/pagina_incial.jpg" width="1349" height="669">
    </div>
    <!-- cards -->
    <section id="jogos">
        <div class="cards">
            <div class="row">
                <div class="col s12 m3 m3 z-depth-1">
                    <div class="card grow">
                        <div class="card-image">
                            <img src="img/4.jpg">
                            <span class="card-title">God Of War</span>
                            
                        </div>
                        <div class="card-content">
                            <p class="texto-card">Neste novo jogo, lançado em 2018, Kratos retorna como o protagonista e agora tem ao seu lado um filho chamado Atreus. Kratos atua como um mentor e protetor de Atreus e tem de dominar a raiva que o impulsionou por muitos anos.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 m3 z-depth-1">
                    <div class="card grow">
                        <div class="card-image">
                            <img src="img/Black-Ops-3-3.png">
                            <span class="card-title">Call Of Duty Black Ops 3</span>
                            
                        </div>
                        <div class="card-content">
                            <p class="texto-card">É um jogo eletrônico de tiro produzido pela empresa Treyarch e lançado no dia 6 de novembro de 2015 pela Activision para Microsoft Windows, PlayStation 4 e Xbox One. Sendo este o décimo terceiro título da franquia Call of Duty</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 m3 z-depth-1">
                    <div class="card grow">
                        <div class="card-image">
                            <img src="img/U4_Pack_Art_Final_1421239047_Crop.jpg">
                            <span class="card-title">Uncharted 4</span>
                            
                        </div>
                        <div class="card-content">
                            <p class="texto-card">É um jogo de acção-aventura produzido pela Naughty Dog, exclusivo para PlayStation 4. Sendo este o quarto e último capítulo da série Uncharted, assim como o último da série original produzida pela Naughty Dog</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 z-depth-1">
                    
                    <div class="card grow">
                        <div class="card-image">
                            <img src="img/For-Honor-Xbox-game_3840x2160.jpg">
                            <span class="card-title">For Honor</span>
                            
                        </div>
                        <div class="card-content">
                            <p class="texto-card">É um jogo de combate tático medieval produzido pela Ubisoft Montreal, para PlayStation 4 e Xbox One, com sistema de combate corpo a corpo, que permite aos jogadores terem o papel de cavaleiros medievais, samurais e os vikings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slide -->
    <section class="slide">
        
        <div class="slideshow-container">
            
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/For-Honor-Xbox-game_3840x2160.jpg" style="width: 100%">
                <div class="text">For Honor</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/unnamed.jpg" style="width: 100%">
                <div class="text">COD</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/jc4_1_hq.jpg" style="width: 100%">
                <div class="text">Just Cause 4</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        
        <br>
        
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </section>
        <!--rodapé-->
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">DEV SOCIAL</h5>
                <p class="grey-text text-lighten-4" id="texto">
                    Se você é um desenvolvedor que deseja promover o seu projeto, ou apenas deseja saber quais são as tendências do mundo de Indie-games, bem vindo a DevSocial.<br>
                    Estamos presente nas redes sociais e abertos a sujestões.
                  </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                  <li><a id="face" class="grey-text text-lighten-3" href="https://www.facebook.com/Dev-Social-461972417657193/" target="_blank"><img src="img/2000px-F_icon.svg.png" width="30px"></a></li>
                  <li><a id="insta" class="grey-text text-lighten-3" href="https://www.instagram.com/devsocial20/?hl=pt-br" target="_blank"><img src="img/1000px-Instagram_logo_2016.svg.png" width="30px"></a></li>
                  <li><a  id="you" class="grey-text text-lighten-3" href="https://www.youtube.com/" target="_blank"><img src="img/2000px-YouTube_social_white_circle_(2017).svg.png" width="32,5px"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 DevSocial Group
            </div>
          </div>
    </footer>
            
    <script>
       var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
        
         
         document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('.modal');
             var instance = M.Modal.getInstance(elem);
         });
        $(document).ready(function(){
            $('.modal').modal();
        });
        
        
    </script>
</body>
</html>
