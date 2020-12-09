<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Market List</title>
    <script defer src="./Js/jquery-3.3.1.min.js"></script>
    <script defer src="./Js/script.js"></script>
    <link rel="stylesheet" href="./Css/style.css" />
    <link rel="stylesheet" href="./Css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
  </head>
        <body style="background-color:#cfcfcf;">

        <style>
          .title_Bar 
            {
                color: white;
                font-size: 25px;
                background-color: #44b644;
            }

          .Tool_Bar 
            {
                font-size: 15px;
                background-color: #5fe45f;
                margin-left: 8%;
            }

            .Line 
              {
                border-bottom-style: solid;
                border-color: #44b644;
                border-radius: 0px;
              }
        </style>

            <div class="container-fluid">
            <div class="row">
                <div class="col-12 title_Bar"><a href="home.php"><font color=white>My Market List</font></a></div>
                <div class="col-10 Tool_Bar"><a href="cadastrar.php"><font color=white>Cadastrar</font></a>-<a href="conta.php"><font color=white>Minha Conta</font></a>-<a href="index.php"><font color=white>Sair</font></a></div>
            </div>

            <div class="row mt-4">
               <div class="col-10 offset-1 Menu_base mt-2">
                <h2 class="title2 Line">Lista de Exemplo</h2>
                <form action="home.php" method="POST">
                <label style="font-size:25px;">Adicionar Iten</label>
                <input type="text" name="nomeI" style="margin-left: 10px;" size="50" placeholder="Insira o nome do Iten">
                <label style="font-size:25px;">Quantidade</label>
                <input type="number" name="quantidade" style="margin-left: 10px;">
                <input type="submit" class="btn btn-success btn-sm" name="novalista" value="Criar" >
                <div class="Line mt-4"></div>
            </div>

            <div class="row mt-3">
                <div class="col-12" style="margin-left:130px;">
                <label class="title3 Line">Ovos | Comprar 12 </label>                  
                <input type="submit" class="btn btn-warning btn-sm" name="comprado" value="Comprado">
                <input type="submit" class="btn btn-danger btn-sm" name="comprado" value="Excluir">

                </div>
            </div>
            </div>
        </body>
</html>

<?php
    if(isset($_POST['novalista']))

    $quantidade = $_POST['quantidade'];
       $nomeI = $_POST['nomeI'];
?>