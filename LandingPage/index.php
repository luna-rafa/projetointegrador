<?php
//session_start();
echo 'oi';
die;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/Favicon.png" type="image/x-icon">
    <script src="javascriptcerto.js"></script>
    <title>Formulário  </title>
</head>
<header>
        <a href="https://www.faesa.br" target="_blank"><img  id="logo" src="imagens/faesa.png"></a>
</header>
<body>
    <form action="processa.php" method="POST" id="formulario">
    <label>Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Digite o nome completo" >
    <label>Email</label>
    <input type="email" name="email" id="email" onkeydown="testEmail(document.getElementById('email'));"  placeholder="exemplo@hotmail.com" required>
    <label>Celular</label>
    <input type="text" name="Celular" id="Celular" onkeydown="testInfo(document.getElementById('Celular'));" placeholder="(99)99999-9999" required>
    <label>Telefone</label>
    <input type="text"  onkeyup="mask(this, telefone)" onkeydown="testInfo(document.getElementById('telefone'));" name="telefone" id="telefone" placeholder="(99)9999-9999" required>
    <div id="divmsg">
    <Label>Como posso te ajudar?</Label>
        <textarea name="mensagem" id="mensagem" cols="30" rows="3" required ></textarea></div>
    <div id="divbotao">
         <button id="botaoenviar" class="botao" type="submit">Enviar</button> 
        <div id="Mensagem">
            <?php  
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <div id="alerta" class="alert alert-primary" role="alert" style="display: none;"> </div>
            <div id="alerta2" class="alert alert-danger" role="alert" style="display: none;"></div>
        </div>
    </div>
    </form>
</body>
<footer>
        <p> <a href="#">Github </a>- <a href="#">Linkedin</a> </p>
        <p>	&copy; Rafaela Rodrigues / 2022</p>
</footer>
</html>