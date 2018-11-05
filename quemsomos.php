<?php
session_start();
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
    <title>Dev Social</title>
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
    <div class="pagina_incial">
        <div class="acessar">
      <!-- Menu -->
            <nav>  
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo"><img src="img/logo.png" width="95px"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#jogos"><i class="material-icons"></i></a></li>
                        
                    

                        <li><a href="#">Bem-vindo(a) <?php echo $_SESSION['nome_login']; ?></a></li>

                        <li><a href="php/logout.php" class="waves-effect waves-light btn-small sair" >Sair</a></li>


						

					

                    </ul>
                </div>
            </nav>
            
        </div>
        <div class="texto"><br>
            <p>Nós somos a Dev Social, uma plataforma para quem desenvolve jogos e pretende alavancar ainda mais seu game na comunidade. Criada em 2018, a Dev Social uma plataforma ainda recente, conta com o apoio da comunidade que ama este universo, assim como nós.</p>
             <a href="index.php" class="brand-logo3"><img src="img/logo.png" width="400px"></a>
            </div>
        </div>
        
        <img class="imagem" src="img/pagina_incial.jpg" width="1349" height="669">
  
    
       

   
        <!--rodapé-->
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
              <a href="#" class="brand-logo"><img src="img/logo.png" width="140px"></a>
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
            
   
</body>
</html>
