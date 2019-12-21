<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
</head>

<body>
    <div id="conteudo">
        <div id="caixa-chat">
            <div id="chat">
                <div id="dados-chat">
                    <span>Grazziano: </span>
                    <span>Texto da Mensagem: </span>
                    <span>Hora: </span>
                </div>
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