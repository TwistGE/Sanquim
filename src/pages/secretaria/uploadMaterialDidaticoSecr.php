<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor | Upload de Material didático</title>
  
  <link rel="stylesheet" href="../../styles/Mprofessores.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
      <?php include '../../Headers/Msecretaria.html'; ?>

  <main style="padding:20px;">
    <h2>Upload de Material Didático</h2>

    <form id="uploadForm">
      <label for="professorName">Nome do Professor:</label><br />
      <input type="text" id="professorName" name="professorName" placeholder="Seu nome" required /><br /><br />

      <label for="disciplina">Disciplina:</label><br />
      <select id="disciplina" name="disciplina" required>
        <option value="">-- Selecione a disciplina --</option>
        <option value="matematica">Matemática</option>
        <option value="portugues">Português</option>
        <option value="historia">História</option>
        <option value="ciencias">Ciências</option>
      </select><br /><br />

      <label for="materialFile">Escolha o arquivo (PDF, DOC, PPT):</label><br />
      <input type="file" id="materialFile" name="materialFile" accept=".pdf,.doc,.docx,.ppt,.pptx" required /><br /><br />

      <button type="submit">Enviar Material</button>
    </form>

    <section id="resultado" style="margin-top:20px; display:none; border:1px solid #000; padding:15px; max-width:500px;">
      <h3>Material enviado com sucesso!</h3>
      <p><strong>Professor:</strong> <span id="resProfessor"></span></p>
      <p><strong>Disciplina:</strong> <span id="resDisciplina"></span></p>
      <p><strong>Arquivo:</strong> <span id="resArquivo"></span></p>
    </section>
  </main>

  <script>
    document.getElementById("uploadForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const professor = document.getElementById("professorName").value.trim();
      const disciplinaSelect = document.getElementById("disciplina");
      const disciplina = disciplinaSelect.options[disciplinaSelect.selectedIndex].text;
      const arquivoInput = document.getElementById("materialFile");
      const arquivo = arquivoInput.files[0];

      if (!professor) {
        alert("Por favor, informe seu nome.");
        return;
      }
      if (!arquivo) {
        alert("Por favor, selecione um arquivo.");
        return;
      }

      // Aqui normalmente teria upload para servidor, mas só simularemos

      document.getElementById("resProfessor").textContent = professor;
      document.getElementById("resDisciplina").textContent = disciplina;
      document.getElementById("resArquivo").textContent = arquivo.name;

      document.getElementById("resultado").style.display = "block";

      // Resetar form se quiser
      this.reset();
    });
  </script>
</body>
</html> 