<?php
$link = mysql_connect('mysql://root:lmxxdYdpXsDgSrioWJyuQjiPWwBhEMxH@junction.proxy.rlwy.net:26055/railway');
if (!$link) {
    die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso';
mysql_close($link);
?>