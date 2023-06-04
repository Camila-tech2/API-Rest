<?php

function realizarLeitura(){
    
    $arquivo = "../../senhas.txt";
  
    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);
    $resposta = json_decode($json);

    return $json;
  }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css"/>
    <title>Cadastro</title>
</head>
<body>
    
    <form action="">
        <h1 class="titulo">Cadastro</h1>

        <label for="">Nome</label>
        <input id="nome" placeholder="Digite Seu Nome" type="text" name="nomeUsuario" required>
    </br>
        <label for="">Email</label>
        <input id="email" placeholder="Digite Seu Email" type="text" name="emailUsuario" required>
</br>
        <label for="">Senha</label>
        <input id="senha" placeholder="Digite Sua Senha" type="password" name="senhaUsuario" required>
</br>
        <button>ENVIAR</button>
        
    </form>

    <div class="container">
        <div class="texto">
        <?php if (isset($_POST['nome'])): ?>
            <p>Olá <?php echo $_POST['nome']; ?></p>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="./script.js"></script>
    
</body>
</html>