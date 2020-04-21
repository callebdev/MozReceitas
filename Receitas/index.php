<html>
    <head>
        <title>Moz Receitas</title>
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/bootstrap/navbar-fixed-top.css"/>
        <link rel="stylesheet" href="assets/css/login.css"/>
    </head>
      
    <body>
         <?php 
        session_start();
        $nome = $_SESSION['nome'];
        $apelido = $_SESSION['apelido'];
        ?>
        
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
               <a class="navbar-brand" href="index.php">🥧 Moz Receitas</a>
          
        </div>
            <ul class="nav navbar-nav">     
              <!--Opcao para criar novos funcionarios -->
              <li class="active"><a  href="paginas/registarReceita.html">📝 Nova Receita</a></li>           
            <li id="test"><a  href="paginas/lista.php">👁‍🗨 Ver receitas</a></li>
              </ul>
          
            <ul
              class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        </span>👤 <?php echo $nome."".$apelido?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="paginas/trocarSenha.html"><span class="glyphicon glyphicon-wrench"></span> Trocar senha</a></li> 
                <li role="separator" class="divider"></li>
                  <li><a href="utils/sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>        
              </ul>   
            </li>
          </ul>

        </div>
        </nav>

        <center>

            <br><br>
            <h1>
              👤<br>
              <?php echo "Bem Vindo! <br> Sr.(a) ".$nome." ".$apelido ; ?>
              <br><br>
              <a href="paginas/registarReceita.html" class="btn btn-info">CRIE UMA NOVA RECEITA</a>
              <br><br>
              <a href="paginas/lista.php">VEJA TODAS AS RECEITAS POSTADAS AQUI 👇</a>
            </h1>
        </center>

        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
    
</html>
