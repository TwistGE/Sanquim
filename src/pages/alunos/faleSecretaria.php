<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aluno | Fale com a Secretaria</title>
  <link rel="stylesheet" href="../../styles/Malunos.css">
  <link rel="stylesheet" href="../../styles/faleSecretaria.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>

  <?php include '../../Headers/Malunos.html'; ?>

  <main class="island">
    <form action="processaContato.php" method="POST" enctype="multipart/form-data" class="form-secretaria">
      <h2>Fale com a Secretaria</h2>

      <label for="topico">Tópico</label>
      <select name="topico" id="topico" required>
        <option value="">Selecione...</option>
        <option value="Solicitação de Documentos">Solicitação de Documentos</option>
        <option value="Alteração de Dados">Alteração de Dados</option>
        <option value="Informações Acadêmicas">Informações Acadêmicas</option>
        <option value="Outro">Outro</option>
      </select>

      <label for="mensagem">Descrição</label>
      <textarea name="mensagem" id="mensagem" rows="6" placeholder="Descreva sua solicitação..." required></textarea>

      <label for="documento">Anexar Documento (opcional)</label>
      <input type="file" name="documento" id="documento" accept=".pdf,.jpg,.png,.jpeg">

      <button type="submit">Enviar</button>
    </form>
  </main>

</body>
</html>
