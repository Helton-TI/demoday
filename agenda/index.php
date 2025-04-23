<?php
$dados = json_decode(file_get_contents('dados.json'), true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Agenda Simples</title>
</head>
<body>
  <h2>Agenda</h2>
  <form action="adicionar.php" method="post">
    <input type="text" name="titulo" placeholder="Título do compromisso" required>
    <input type="date" name="data" required>
    <button type="submit">Adicionar</button>
  </form>
  <ul>
    <?php foreach ($dados as $id => $item): ?>
      <li><?= $item['data'] ?> - <?= $item['titulo'] ?> 
        <a href="deletar.php?id=<?= $id ?>">[Excluir]</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>