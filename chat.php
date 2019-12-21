<?php
include "db.php";

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