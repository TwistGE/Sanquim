<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aluno | Material Didático</title>
  <link rel="stylesheet" href="../../styles/Malunos.css">
  <link rel="stylesheet" href="../../styles/listaMaterial.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>


  <?php include '../../Headers/Malunos.html'; ?>
  <main>
    <div class="island">

      <h3>Materiais por Disciplina</h3>
      <br>

      <div class="input-box">
        <label for="disciplina">Selecione uma disciplina:</label><br>
        <select id="disciplina" onchange="mostrarMateriais()" style="width: 100%; padding: 8px;">
          <option value="">-- Escolha uma disciplina --</option>
          <option value="matematica">Matemática</option>
          <option value="portugues">Português</option>
          <option value="historia">História</option>
        </select>
      </div>

      <br>

      <div class="input-box" id="materiais" style="background-color:#f7fbe4; padding: 10px; border-radius: 5px;">
        <!-- Materiais aparecem aqui -->
      </div>

      <br>
      <a href="/Sanquim/src/pages/alunos/homeAlunos.php">Sair</a>

    </div>
  </main>

  <script>
    function mostrarMateriais() {
      const disciplina = document.getElementById("disciplina").value;
      const materiaisDiv = document.getElementById("materiais");

      const materiais = {
        matematica: [
          "Apostila de Álgebra – <a href='#'>Baixar PDF</a>",
          "Vídeo Aula de Geometria – <a href='#'>Assistir</a>"
        ],
        portugues: [
          "Leitura obrigatória – <a href='#'>Ver lista</a>",
          "Gramática Interativa – <a href='#'>Acessar</a>"
        ],
        historia: [
          "Linha do Tempo – <a href='#'>Visualizar</a>",
          "Documentário: Era Vargas – <a href='#'>Assistir</a>"
        ]
      };

      if (materiais[disciplina]) {
        let html = "<ul>";
        materiais[disciplina].forEach(item => {
          html += "<li style='margin-bottom: 8px;'>" + item + "</li>";
        });
        html += "</ul>";
        materiaisDiv.innerHTML = html;
      } else {
        materiaisDiv.innerHTML = "<i>Nenhuma disciplina selecionada.</i>";
      }
    }
  </script>

</body>
</html>
