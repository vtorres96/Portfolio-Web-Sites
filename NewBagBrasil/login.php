<?php
    require_once('config/conn.php');
    
    if(isset($_REQUEST['logar'])){

        $usuario = $_REQUEST['usuario'];
        $senha = $_REQUEST['senha'];

        $query = $pdo->prepare("SELECT * FROM cadastro WHERE usuario = :usuario AND senha = :senha");
        $query->execute([
            ":usuario" => $usuario,
            ":senha" => $senha
        ]);

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if(!$usuario){
            $erro = true;
        } else if ($usuario["nivel_acesso"] == 1){
            session_start();

            $_SESSION['usuario'] = $usuario["nome"];
            $_SESSION['nivel_acesso'] = $usuario["nivel_acesso"];
            
            header("Location: menu_admin.php"); 
        } else {
            session_start();

            $_SESSION['usuario'] = $usuario["nome"];
            $_SESSION['nivel_acesso'] = $usuario["nivel_acesso"];

            header("Location: menu_cliente.php");
        }
    }
?>

<?php require_once("inc/head.php"); ?>

    <div class="gtco-loader"></div>

    <div id="page">
      <?php require_once("inc/header.php"); ?>
     
      <div id="gtco-blog" data-section="login">
        <div class="gtco-container">
          <div class="row login">
              <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Área Restrita</h2>
                <p>Esta área é restrita apenas para usuários cadastrados no sistema</p>
              </div>
                  <div class="col-md-4 col-md-offset-4">
                  <div class="login-panel panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title text-center">Digite seu usuário e sua senha</h3>
                      </div>
                      <div class="panel-body">
                          <fieldset>
                              <form method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="usuario">Usuário</label>
                                      <input class="form-control" placeholder="Usuario@example.com" name="usuario" type="text" id="usuario" autofocus>
                                  </div>
                                  <div class="form-group">
                                      <label for="senha">Senha</label>
                                      <input class="form-control" placeholder="Informe sua senha" name="senha" type="password" id="senha" value="">
                                  </div>
                                  <button type="submit" name="logar" id="logar" class="btn btn-sm btn-success btn-block">Logar</button>
                              </form>
                          </fieldset><br>
                          <?php if(isset($erro) && $erro === true): ?>
                              <div class="form-group alert alert-danger">
                                  Usuário ou senha inválidos
                              </div>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>  
    </div>
    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <?php require_once("inc/footer.php"); ?>

  </body>
</html>