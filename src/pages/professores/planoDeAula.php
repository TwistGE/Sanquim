<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanquim | Home</title>
  <link rel="stylesheet" href="../../styles/Mprofessores.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>

      <?php include '../../Headers/Mprofessores.html'; ?>


  <h1>Cadastro de Plano Aula</h1>

  <div>
    <label for="turma">Selecione a Turma:</label>
    <select id="turma" required>
      <option value="">-- Selecione uma turma --</option>
      <option value="1A">1º Informática A</option>
      <option value="2B">2º Enfermagem B</option>
    </select>
  </div>

  <div>
    <label for="materia">Selecione a Matéria:</label>
    <select id="materia" required>
      <option value="">-- Selecione uma matéria --</option>
    </select>
  </div>

  <form id="formPlano">
    <div>
      <label for="dia">Data da Aula:</label>
      <input type="date" id="dia" name="dia" required>
    </div>

    <div>
      <label for="assunto">Assunto da Aula:</label>
      <input type="text" id="assunto" name="assunto" maxlength="100" required>
    </div>

    <div>
      <label for="obs">Desxcrição:</label><br>
      <textarea id="obs" name="obs" rows="5" cols="40" placeholder="Observações adicionais..."></textarea>
    </div>

    <button type="submit">Salvar Plano</button>
  </form>

  <div id="listaPlanos">
    <h2>Aulas Cadastradas</h2>
    <!-- Itens adicionados via JS aparecerão aqui -->
  </div>

  <script>
    const turmaSelect = document.getElementById("turma");
    const materiaSelect = document.getElementById("materia");
    const formPlano = document.getElementById("formPlano");
    const listaPlanos = document.getElementById("listaPlanos");

    const materiasPorTurma = {
      "1A": ["Português", "Matemática", "Programação"],
      "2B": ["Anatomia", "Farmacologia", "Enfermagem Básica"]
    };

    turmaSelect.addEventListener("change", function () {
      const turma = this.value;
      materiaSelect.innerHTML = '<option value="">-- Selecione uma matéria --</option>';

      if (turma && materiasPorTurma[turma]) {
        materiasPorTurma[turma].forEach(mat => {
          const opt = document.createElement("option");
          opt.value = mat;
          opt.textContent = mat;
          materiaSelect.appendChild(opt);
        });
      }
    });

    formPlano.addEventListener("submit", function (e) {
      e.preventDefault();
      const turma = turmaSelect.value;
      const materia = materiaSelect.value;
      const dia = document.getElementById("dia").value;
      const assunto = document.getElementById("assunto").value;
      const obs = document.getElementById("obs").value;

      adicionarPlano(turma, materia, dia, assunto, obs);

      formPlano.reset();
    });

    function adicionarPlano(turma, materia, dia, assunto, obs) {
      const planoDiv = document.createElement("div");

      const resumo = document.createElement("strong");
      resumo.textContent = `📅 ${dia} - ${turma} - ${materia}`;
      planoDiv.appendChild(resumo);

      const detalhes = document.createElement("div");
      detalhes.innerHTML = `
        <p><strong>Assunto:</strong> ${assunto}</p>
        <p><strong>Observações:</strong> ${obs || "Nenhuma"}</p>
      `;

      planoDiv.appendChild(detalhes);

      planoDiv.addEventListener("click", function () {
        detalhes.style.display = detalhes.style.display === "none" ? "block" : "none";
      });

      listaPlanos.appendChild(planoDiv);
    }

    // Inicializar com turma vazia (para não deixar a matéria vazia)
    turmaSelect.dispatchEvent(new Event('change'));
  </script>

</body>
</html>
