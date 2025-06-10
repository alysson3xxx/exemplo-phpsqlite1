<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Usuários</title>
</head>
<body>
<h1>Usuários</h1>
<form action="inserir.php" method="POST">
        Nome: <input type="text" name="nome" required>
<input type="submit" value="Adicionar">
</form>
<br>
<table border="1">
      <tr>
<th>ID</th>
<th>Nome</th>
<th>Ações</th>
      </tr>

      <?php
        $stmt = $db->query("SELECT * FROM usuarios");
        foreach ($stmt as $row) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>
                    <form method='POST' action='deletar.php' onsubmit=\"return confirm('Tem certeza que deseja deletar?');\">
<input type='hidden' name='id' value='" . $row["id"] . "'>
<input type='submit' value='Deletar'>
</form>
</td>";
  echo "</tr>";
        }
        ?>
</table>
</body>
</html>
