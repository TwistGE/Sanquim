<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor | Upload de Material didático</title>
  
  <link rel="stylesheet" href="../../styles/Mprofessores.css">
    <link rel="stylesheet" href="../../styles/uploadMaterial.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
      <?php include '../../Headers/Mprofessores.html'; ?>


 <main>
    <div class="upload island">
      <h1>Upload de Arquivos</h1>

      <div class="upload-select">
        <label for="turmaUpload">Turma:</label>
        <select id="turmaUpload">
          <option value="">-- Selecione uma turma --</option>
          <option value="1A">1º Informática A</option>
          <option value="2B">2º Enfermagem B</option>
        </select>

        <label for="materiaUpload">Matéria:</label>
        <select id="materiaUpload">
          <option value="">-- Selecione uma matéria --</option>
        </select>

        <label for="fileUpload">Selecionar Arquivo:</label>
        <input type="file" id="fileUpload" />

        <button id="uploadButton">Enviar Arquivo</button>
      </div>
    </div>

    <div id="arquivosContainer" class="island">
      <!-- Arquivos exibidos aqui -->
    </div>
  </main>

  <script>
    const turmaUploadSelect = document.getElementById("turmaUpload");
    const materiaUploadSelect = document.getElementById("materiaUpload");
    const uploadButton = document.getElementById("uploadButton");
    const arquivosContainer = document.getElementById("arquivosContainer");

    const materiasPorTurma = {
      "1A": ["Português", "Matemática", "Programação"],
      "2B": ["Anatomia", "Farmacologia", "Enfermagem Básica"]
    };

    turmaUploadSelect.addEventListener("change", () => {
      const turma = turmaUploadSelect.value;
      materiaUploadSelect.innerHTML = '<option value="">-- Selecione uma matéria --</option>';

      if (materiasPorTurma[turma]) {
        materiasPorTurma[turma].forEach(materia => {
          const option = document.createElement("option");
          option.value = materia;
          option.textContent = materia;
          materiaUploadSelect.appendChild(option);
        });
      }

      arquivosContainer.innerHTML = "";
    });

    uploadButton.addEventListener("click", () => {
      const turma = turmaUploadSelect.value;
      const materia = materiaUploadSelect.value;
      const fileInput = document.getElementById("fileUpload");

      if (!turma || !materia || !fileInput.files.length) {
        alert("Por favor, selecione a turma, a matéria e o arquivo.");
        return;
      }

      const fileName = fileInput.files[0].name;

      const divArquivo = document.createElement("div");
      divArquivo.classList.add("arquivo");

      const arquivoItem = document.createElement("div");
      arquivoItem.classList.add("arquivo-item");

      const titulo = document.createElement("h4");
      titulo.textContent = `📁 ${fileName} (${turma} - ${materia})`;

      arquivoItem.appendChild(titulo);

      const botaoBaixar = document.createElement("button");
      botaoBaixar.textContent = "Baixar Arquivo";
      botaoBaixar.addEventListener("click", () => {
        alert("Aqui você implementaria o download do arquivo: " + fileName);
      });

      divArquivo.appendChild(arquivoItem);
      divArquivo.appendChild(botaoBaixar);

      arquivosContainer.appendChild(divArquivo);

      // Resetando o input
      fileInput.value = "";
    });
  </script>
</body>

</html>
