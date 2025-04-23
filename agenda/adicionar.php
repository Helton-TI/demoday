<?php
$dados = json_decode(file_get_contents('dados.json'), true);
$dados[] = [
  'titulo' => $_POST['titulo'],
  'data' => $_POST['data']
];
file_put_contents('dados.json', json_encode($dados, JSON_PRETTY_PRINT));
header('Location: index.php');
exit;