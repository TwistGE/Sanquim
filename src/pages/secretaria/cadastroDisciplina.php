<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro Disciplina</title>
  <link rel="stylesheet" href="../../styles/Msecretaria.css" />
  <link rel="stylesheet" href="../../styles/cadastroDisciplina.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
  <?php include '../../Headers/Msecretaria.html'; ?>
  <main>
    <div class="containers island">
      <div class="container_table">
        <table class="table">
          <thead>
            <tr><th class="title_table">Disciplinas Cadastradas</th></tr>
          </thead>
          <tbody id="tabelaDisciplinas">
            <tr><td>Química</td></tr>
            <tr><td>Biologia</td></tr>
            <tr><td>Matemática</td></tr>
          </tbody>
        </table>
      </div>

      <button id="novaDisciplinaBtn">Nova Disciplina</button>

      <form id="formNovaDisciplina" class="table hidden">
        <h3 class="title_table">Cadastro de Disciplina</h3>

        <div class="input">
          <label>Nome:</label>
          <input type="text" id="nomeDisciplina" required />
        </div>

        <div class="input">
          <label>Status:</label>
          <input type="text" id="statusDisciplina" required />
        </div>

        <div class="form_buttons">
          <button type="submit">Criar Disciplina</button>
          <button type="button" id="cancelarBtn">Cancelar</button>
        </div>
      </form>
    </div>
  </main>

  <script>
    const btn = document.getElementById("novaDisciplinaBtn");
    const form = document.getElementById("formNovaDisciplina");
    const tabela = document.getElementById("tabelaDisciplinas");

    btn.addEventListener("click", () => {
      form.classList.remove("hidden");
      form.classList.add("show");
    });

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const nome = document.getElementById("nomeDisciplina").value.trim();

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
        alert("Digite o nome da disciplina.");
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
