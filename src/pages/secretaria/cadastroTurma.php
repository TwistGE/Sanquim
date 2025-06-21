<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro Turma</title>
  <link rel="stylesheet" href="../../styles/Msecretaria.css" />
  <link rel="stylesheet" href="../../styles/cadastroTurma.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
  <?php include '../../Headers/Msecretaria.html'; ?>

  <main>
    <div class="containers island">
      <div class="container_table">
        <table class="table">
          <thead>
            <tr><th class="title_table">Turmas Cadastradas</th></tr>
          </thead>
          <tbody id="tabelaTurmas">
            <tr><td>Turma A</td></tr>
            <tr><td>Turma B</td></tr>
            <tr><td>Turma C</td></tr>
          </tbody>
        </table>
      </div>

      <button id="novaTurmaBtn">Nova Turma</button>

      <form id="formNovaTurma" class="table hidden">
        <h3 class="title_table">Cadastro de Turma</h3>

        <div class="input">
          <label>Nome da Turma:</label>
          <input type="text" id="nomeTurma" required />
        </div>

        <div class="input full-width">
          <label>Alunos:</label>
          <div class="aluno-list">
            <label><input type="checkbox" name="alunos[]" value="Ana Silva"> Ana Silva</label>
            <label><input type="checkbox" name="alunos[]" value="Bruno Costa"> Bruno Costa</label>
            <label><input type="checkbox" name="alunos[]" value="Camila Rocha"> Camila Rocha</label>
            <label><input type="checkbox" name="alunos[]" value="Diego Martins"> Diego Martins</label>
            <label><input type="checkbox" name="alunos[]" value="Eduarda Lima"> Eduarda Lima</label>
          </div>
        </div>

        <div class="form_buttons">
          <button type="submit">Criar Turma</button>
          <button type="button" id="cancelarBtn">Cancelar</button>
        </div>
      </form>
    </div>
  </main>

  <script>
    const btn = document.getElementById("novaTurmaBtn");
    const form = document.getElementById("formNovaTurma");
    const tabela = document.getElementById("tabelaTurmas");

    btn.addEventListener("click", () => {
      form.classList.remove("hidden");
      form.classList.add("show");
    });

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const nome = document.getElementById("nomeTurma").value.trim();

      if (nome !== "") {
        const linha = document.createElement("tr");
        const celula = document.createElement("td");
        celula.textContent = nome;
        linha.appendChild(celula);
        tabela.appendChild(linha);

        form.reset();
        form.classList.remove("show");
        form.classList.add("hidden");
      } else {
        alert("Digite o nome da turma.");
      }
    });

    document.getElementById("cancelarBtn").addEventListener("click", () => {
      form.reset();
      form.classList.remove("show");
      form.classList.add("hidden");
    });
  </script>
</body>
</html>
