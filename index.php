<?php
  $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root','');
  $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
  $sobre->execute();
  $sobre = $sobre->fetch()['sobre'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="bootstrap.mim.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">Fixed navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul id="menu-principal" class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active cor-padrao" ref_sys="sobre" aria-current="page" href="#">Editar Sobre</a>
              </li>
              <li class="nav-item">
                <a ref_sys="cadastrar_equipe" class="nav-link" href="#">Cadastrar Equipe</a>
              </li>
              <li class="nav-item">
                <a ref_sys="lista_equipe" class="nav-link">Lista Equipe</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?sair"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                <path d="M7.5 1v7h1V1h-1z"/>
                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
              </svg> Sair!</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div style="position:relative; top: 50px;" class="box">
        <header id="header">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                      <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                    </svg> Painel de Controle</h2>
                </div>
                <div class="col-md-3">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg> Seu último login foi em: 12/06/2019</p>
                </div>
              </div>   
            </div>
        </header>    
        <section class="bread">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>
        </section>
        <section class="princial">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="list-group">                
                  <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg> Sobre
                  </a>
                  <a href="#" class="list-group-item" ref_sys="cadastrar_equipe">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                      <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg> Cadastrar Equipe
                  </a>
                  <a href="#" class="list-group-item" ref_sys="lista_equipe">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                  </svg> Lista Equipe
                  </a>
                </div>
              </div>
              <div class="col-md-9">
                <?php 
                  if(isset($_POST['editar_sobre'])){
                    $sobre = $_POST['sobre'];
                    $pdo->exec("DELETE FROM `tb_sobre`");
                    $sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES (null,?)");
                    $sql->execute(array($sobre));
                    echo '<div class="alert alert-success" role="alert">O código HTML <b>Sobre</b> foi editado com sucesso!</div>';
                    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
                    $sobre->execute();
                    $sobre = $sobre->fetch()['sobre'];
                  }else if(isset($_POST['cadastrar_equipe'])){
                    $nome = $_POST['nome_membro'];
                    $descricao = $_POST['descricao'];
                    $sql = $pdo->prepare("INSERT INTO `tb_equipe` VALUES (null,?,?)");
                    $sql->execute(array($nome,$descricao));
                    echo '<div class="alert alert-success" role="alert">O membro da equipe foi cadastrado com sucesso!</div>';
                  }
                ?>
                <div id="sobre_section" class="panel panel-default">
                  <div class="panel-headding cor-padrao">
                    <h3>Sobre</h3>
                  </div>
                  <div class="panel-body">
                    <form method="post">
                      <div class="form-group">
                        <label for="email">Código HTML:</label>
                        <textarea name="sobre" style="height: 140px;resize: vertical;" class="form-control"><?php echo $sobre; ?></textarea>
                      </div>
                      <input type="hidden" name="editar_sobre" value="">
                      <button type="submit" name="acao" class="btn btn-dark">Submit</button>
                    </form>
                    </div>
                </div> 

                <div id="cadastrar_equipe_section" class="panel panel-default">
                  <div class="panel-headding cor-padrao">
                    <h3>Cadastrar equipe</h3>
                  </div>
                  <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                        <label for="email">Nome do membro:</label>
                        <input type="text" name="nome_membro" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label for="email">Descrição do membro:</label>
                        <textarea name="descricao" style="height: 140px;resize: vertical;" class="form-control"></textarea>
                      </div>
                      <input type="hidden" name="cadastrar_equipe" />

                      <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                  </div>
                </div>
                <div id="lista_equipe_section" class="panel panel-default">
                  <div class="panel-headding cor-padrao">
                    <h3>Membros da equipe</h3>
                  </div>
                  <div class="panel-body">
                    <div class="bd-example">
                      <table class="table table-dark table-hover">
                          <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ID</th>
                          <th scope="col">Nome do Membro</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php 
                          $selecionarMembros = $pdo->prepare("SELECT `id`, `nome` FROM `tb_equipe` ");
                          $selecionarMembros->execute();
                          $mebros = $selecionarMembros->fetchAll();
                          foreach ($mebros as $key => $value) {

                        ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $value['id']; ?></td>
                          <td><?php echo $value['nome']; ?></td>
                          <td><button id_membro="<?php echo $value['id']; ?>" type="button" class="btn deletar-membro btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button></td>
                        </tr>
                        <?php } ?>
                      </tbody>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.mim.js"></script>
    <script type="text/javascript">
      $(function(){
        cliqueMenu();
        scrollItem();
        function cliqueMenu(){
              $('#menu-principal a, .list-group a').click(function(){
                 $('.list-group a').removeClass('active').removeClass('cor-padrao');
                 $('#menu-principal a').parent().removeClass('active');
                 //console.log('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']');
                $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
                $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao');
                return false;
              })
          }
          function scrollItem(){
               $('#menu-principal a, .list-group a').click(function(){
                    var ref = '#'+$(this).attr('ref_sys')+'_section';
                    var offset = $(ref).offset().top;
                    $('html,body').animate({'scrollTop':offset-50});
                    if($(window)[0].innerWidth <= 768){
                    $('.icon-bar').click();
                    }
              });
          }

          $('button.deletar-membro').click(function(){
              var id_membro = $(this).attr('id_membro');
              var el = $(this).parent().parent();
              $.ajax({
                  method:'post',
                  data:{'id_membro':id_membro},
                  url:'deletar.php'
              }).done(function(){
                el.fadeOut(function(){
                 el.remove();
              });
              })              
              
          })
      })    
    </script>
  </body>
</html>