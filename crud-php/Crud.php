<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD EM PHP - CADASTRO DE ALUNOS</title>
    <link rel="stylesheet" href="Style.css">

</head>

<body>
    <div id="h1">
    <h1>CRUD em PHP</h1> 
    </div>
                     
                                        <!-- FORMULÁRIO -->

  <div class="form">
    <form name="cad-Usuario" method="POST" action="">
    <label>Nome:</label>
    <input id="CT" type="text" name="nome" id="nome" placeholder="Insira seu Nome Completo" required>
    <?php
            if (isset($dados['nome'])) {
                echo $dados['nome'];
            }
            ?>
            <br><br>

    <label>CPF:</label>
    <input id="CT" type="text" name="CPF" id="CPF" placeholder="Insira seu CPF" required>
    <?php
            if (isset($dados['CPF'])) {
                echo $dados['CPF'];
            }
            ?>
            <br><br>

    <label>E-mail:</label>
    <input id="CT" type="text" name="email" id="email" placeholder="Insira seu E-mail" required>
    <?php
            if (isset($dados['email'])) {
                echo $dados['email'];
            }
            ?>
            <br><br>

    <input id="enviar" type="submit" value="Cadastrar" name="cadUsuario">
    <input id="limpar" type="reset" value="Limpar Dados" name="limpD">

    </form>
  </div>   
  <?php
    include_once './Cadastro.php';

        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['cadUsuario'])) {
        
            $empty_input = false;

            if (!$empty_input) {
                $query_usuario = "INSERT INTO cadastro_usuario (nome, email, CPF) VALUES (:nome, :email, :CPF) ";
                $cad_usuario = $conec->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':CPF', $dados['CPF'], PDO::PARAM_STR);
                $cad_usuario->execute();
            
            }
        }
        ?>


</body>
</html>