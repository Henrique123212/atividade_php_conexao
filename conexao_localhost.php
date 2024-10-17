<?php
$link = mysql_connect('127.0.0.1, root, root');
if (!$link) {
    die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso';
mysql_close($link);
?>