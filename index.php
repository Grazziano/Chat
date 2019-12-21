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
                
            </div>
        </div>

        <form action="index.php" method="post">
            <input type="text" name="nome" id="" placeholder="Preencha o seu nome">
            <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Insira uma mensagem"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
            $mensagem = $_POST['mensagem'];
            $consulta = "INSERT INTO tb_chat (nome, mensagem) VALUES ('$nome', '$mensagem')";
            $executar = $conexao->query($consulta);

            if ($executar) {
                echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
            }
        }
        ?>
    </div>

    <script type="text/javascript">
        function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {

                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }

            req.open('GET', 'chat.php', true);
            req.send();
        }

        setInterval(function() {
            ajax();
        }, 1000);
    </script>
</body>

</html>