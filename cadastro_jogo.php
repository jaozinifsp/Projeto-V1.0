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
              <p> 
                  <label for="jogo">Jogo:</label>
                  <input id="jogo" name="nome-jogo" required="required" type="text" placeholder="ex. God of War"/>
              </p>
              <p> 
                  <label for="descricao">Descrição:</label>
                  <textarea id="descricao"  name="descricao-jogo" rows="4" cols="57" placeholder="Diga mais sobre o jogo"></textarea> 
              </p>
              <p>
                  <input name="imagem" id="imagem" type='file' onchange="readURL(this);" />
                  <img id="blah" src="http://placehold.it/180" alt="your image" accept="image/*"/>
              </p>
              <p> 
                  <button onclick="enviararq()" class="button_log">Cadastre</button> 
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
              function enviararq(){
			var formData = new FormData();
			var nome = $('#jogo').val();
            var descricao = $('#descricao').val();
			//pega o arquivo
			
            var file = $('#imagem').prop('files')[0];

			formData.append("jogo", nome);
            formData.append("descricao", descricao);
			formData.append("imagem", file);
			
			$.ajax({
                  url: "php/upload-img.php",
				  method: "POST",
                  dataType: "json",
                  data: formData,
				  cache: false,
				  contentType: false,
				  processData: false,
                  success: function(retorno){
                      if(retorno.deucerto){
                          alert(retorno.msg);
                          window.location.href = "index2.php";
                      }else{
							alert(retorno.msg);
					  }
                  }
              });
		}
          </script>
      </div>
        
      
    </div>
  </div>
</body>
</html>