<html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/cadastro.css" />
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container" >
    <div class="content">      
      <!--FORMULÁRIO DE cadastro de jogo-->
      <div id="login">
          <h1>Cadastre o seu game</h1>
          <form action="php/upload-img.php" method="post" enctype="multipart/form-data">
              <p> 
                  <label for="jogo">Jogo:</label>
                  <input id="jogo" name="nome-jogo" required="required" type="text" placeholder="ex. God of War"/>
              </p>
              <p> 
                  <label for="descricao">Descrição:</label>
                  <textarea name="descricao" rows="4" cols="57" placeholder="Diga mais sobre o jogo"></textarea> 
              </p>
              <p>
                  <input name="imagem" type='file' onchange="readURL(this);" />
                  <img id="blah" src="http://placehold.it/180" alt="your image" />
              </p>
              <p> 
                  <button submit="enviar" class="button_log">Cadastre</button> 
              </p>
          </form>
          
          <script>
                  function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
          </script>
      </div>
        
      
    </div>
  </div>
    <script>
    </script>
</body>
</html>