<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <?php
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $acesso = "";
        
        if(strlen($cpf) >= 12 or !ctype_digit($cpf) or empty($cpf) or empty($nome) or preg_match('/[0-9]/', $nome)){
            $acesso = "ACESSO NEGADO";
            
        }else{
             $acesso = "ACESSO CONCEDIDO";
        }


       ?>
       <title>Login</title>
    </head>
    <body>
        <h1 class="titulo">Perfil de ADM</h1>
        <h2>Cadastre-se</h2>

        <div class="formulario">
            <form action="" method ="POST">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
            <button type="submit">Enviar</button>
            <p> <?php echo "$acesso"; ?> </p>
            </form>
        </div>

    </body>  
