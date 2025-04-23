<?php
$dados = json_decode(file_get_contents('dados.json'), true);
$id = $_GET['id'];
unset($dados[$id]);
file_put_contents('dados.json', json_encode(array_values($dados), JSON_PRETTY_PRINT));
header('Location: index.php');
exit;