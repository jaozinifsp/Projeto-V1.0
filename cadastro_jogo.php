<html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/cadastro.css" />
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    <script>
        function cadastrar(){
            var nome = $('#nome-jogo').val();
            var senha = $('#descri').val();
            
            
            //$('#cadastro').val('');
        $.ajax({
            url: "php/cadastrar-jogo.php", method: "POST",
            dataType: "json", //tipo de retorno.
            data: {"nome_jogo":jogo, "descri":descri},
            success: function(retorno){
            if(retorno.deucerto){
                window.location.href = "index.php";
            }else{   
                
            }
            }
        });
        }
        
    </script>
<body>
  <div class="container" >
    <a class="links" id="paracadastrojogo"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
          <h1>Cadastre o seu game</h1> 
          <p> 
            <label for="nome_login">Jogo: </label>
            <input id="user" name="nome_login" required="required" type="text" placeholder="ex. God of War"/>
          </p>
           
          <p> 
            <label for="descri">Descrição</label>
            <textarea rows="4" cols="57" placeholder="Diga mais sobre o jogo"></textarea> 
          </p>
          
          <p>
            <input type='file' onchange="readURL(this);" />
            <img id="blah" src="http://placehold.it/180" alt="your image" />
          </p>
          <p> 
              <button onclick="login()" class="button_log">Cadastre</button> 
          </p>
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