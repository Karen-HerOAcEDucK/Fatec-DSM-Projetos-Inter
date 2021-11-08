<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Não é possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
?>