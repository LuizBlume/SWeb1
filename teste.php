<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
echo "<body style='background-color: #ADD8E6;'>";
echo "<center>";
echo "<img src='https://abre.ai/banneracme'>";
echo "<h1>Página de teste PHP no Servidor SWeb1</h1>";
echo "<h1>Luiz Fernando e Joao Victor - 7401-6511</h1>";
echo "<h1>Servidor SWeb1</h1>";
echo "<h1>Endereço IP do Servidor: $ipv4</h1>";
echo "</center>";
phpinfo();
echo "</body>";
?>