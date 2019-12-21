<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>

    <link rel="stylesheet" href="estilos.css">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani&display=swap" rel="stylesheet">
</head>

<body>
    <div id="conteudo">
        <div id="caixa-chat">
            <div id="chat">

                <?php
                $consulta = "SELECT * FROM tb_chat ORDER BY id DESC";
                $executar = $conexao->query($consulta);

                while ($linha = $executar->fetch_array()) :
                ?>

                    <div id="dados-chat">
                        <span style="color: #0B6121;"><?php echo $linha['nome']; ?></span>
                        <span style="color: #1c62c4;"><?php echo $linha['mensagem']; ?></span>
                        <span style="color: #0B6121; float: right;"><?php echo $linha['data'] ?></span>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>

        <form action="index.php" method="post">
            <input type="text" name="nome" id="" placeholder="Preencha o seu nome">
            <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Insira uma mensagem"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>

</body>

</html>