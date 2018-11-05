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
            var nome = $('#nome').val();
            var senha = $('#senha').val();
            var email = $('#email').val();
            
            //$('#cadastro').val('');
        $.ajax({
            url: "php/adicionar-cadastro.php", method: "POST",
            dataType: "json", //tipo de retorno.
            data: {"nome_cad":nome, "senha_cad":senha, "email_cad":email},
            success: function(retorno){
            if(retorno.deucerto){
                location.reload();
                alert("Cadastrado Com Sucesso!");
            }else{   
                alert(retorno.mensagem);
            }
            }
        });
        }
        function login(){
			var user = $('#user').val();
			var pass = $('#pass').val();
			$.ajax({ 
                  url: "php/login.php",
				  method: "POST",
                  dataType: "json",
                  data: {'nome_login':user, 'senha_login':pass},
                  success: function(retorno){
                      if(retorno.deucerto){
                          window.location.href = "index2.php";
					  }else{
                        alert(retorno.mensagem);
                      }
                  }
            });
		}
        function logout(){
			$.ajax({
                  url: "php/logout.php",
				  method: "POST",
                  dataType: "json",
                  success: function(retorno){
                      if(retorno.deucerto){
                        location.reload();
					  }else{
                        alert('Deu ruim!');
                      }
                  }
            });
		}
    </script>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="user" name="nome_login" required="required" type="text" placeholder="ex. Paulo"/>
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="pass" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
          
          <p> 
              <button onclick="login()" class="button_log">Logar</button> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome">Seu nome</label>
            <input id="nome" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
        
          <p> 
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           <p> 
            <label for="email">E-mail</label>
            <input id="email" name="nome_mail" required="required" type="text" placeholder="ex. Paulo"/>
          </p>
           <div id="button">
          <p> 
             
              <button onclick="cadastrar()" class="button_cad">Cadastrar</button>  
          </p>
              </div>
          <p class="link">  
            Já tem conta?
            <a href="#paralogin">Logar </a>
          </p>
      </div>
    </div>
  </div>
    <script>
    </script>
</body>
</html>