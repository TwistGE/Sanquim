<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sanquim | Histórico de Aulas</title>
  <link rel="stylesheet" href="../../styles/Mprofessores.css" />
    <link rel="stylesheet" href="../../styles/historicoAula.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
  <style>
    .aula-concluida {
      text-decoration: line-through;
      color: #2ecc71;
    }
    .aula-item {
      transition: all 0.3s ease;
    }
  </style>
</head>

<body>
  <?php include '../../Headers/Msecretaria.html'; ?>

   <main>
    <div class="historico island">

      <h1>Histórico de Aulas</h1>
      
      <div class="historico-select">
        <label for="turma">Turma:</label>
        <select id="turma" >
          <option value="">-- Selecione uma turma --</option>
          <option value="1A">1º Informática A</option>
          <option value="2B">2º Enfermagem B</option>
        </select>
        
        <label for="materia">Matéria:</label>
        <select id="materia">
          <option value="">-- Selecione uma matéria --</option>
        </select>
      </div>
    </div>

    <div id="aulasContainer" class="island">
      <!-- Aulas exibidas aqui -->
    </div>
  </main>

  <script>
    const turmaSelect = document.getElementById("turma");
    const materiaSelect = document.getElementById("materia");
    const aulasContainer = document.getElementById("aulasContainer");

    const materiasPorTurma = {
      "1A": ["Português", "Matemática", "Programação"],
      "2B": ["Anatomia", "Farmacologia", "Enfermagem Básica"]
    };

    const aulasFicticias = [
      { data: "2025-06-10", tema: "Introdução ao conteúdo" },
      { data: "2025-06-12", tema: "Fundamentos Teóricos" },
      { data: "2025-06-17", tema: "Exercícios Práticos" },
      { data: "2025-06-20", tema: "Avaliação Parcial" },
      { data: "2025-06-25", tema: "Revisão e Encerramento" }
    ];

    turmaSelect.addEventListener("change", atualizarMaterias);
    materiaSelect.addEventListener("change", carregarAulas);

    function atualizarMaterias() {
      const turma = turmaSelect.value;
      materiaSelect.innerHTML = '<option value="">-- Selecione uma matéria --</option>';

      if (materiasPorTurma[turma]) {
        materiasPorTurma[turma].forEach(materia => {
          const option = document.createElement("option");
          option.value = materia;
          option.textContent = materia;
          materiaSelect.appendChild(option);
        });
      }

      aulasContainer.innerHTML = "";
    }

    function carregarAulas() {
      const turma = turmaSelect.value;
      const materia = materiaSelect.value;

      aulasContainer.innerHTML = "";

      if (!turma || !materia) return;

      aulasFicticias.forEach((aula, index) => {
        const divAula = document.createElement("div");
        divAula.classList.add("aula");

        const aulaItem = document.createElement("div");
        aulaItem.classList.add("aula-item");

        const titulo = document.createElement("h4");
        titulo.textContent = `📅 ${aula.data} - Tema: ${aula.tema}`;
        aulaItem.appendChild(titulo);

        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.id = `checkbox${index}`;

        const labelCheck = document.createElement("label");
        labelCheck.appendChild(checkbox);
        labelCheck.appendChild(document.createTextNode(" Aula Dada"));

        const textarea = document.createElement("textarea");
        textarea.rows = 3;
        textarea.cols = 50;
        textarea.disabled = true;
        textarea.placeholder = "Observações da aula...";

        const botao = document.createElement("button");
        botao.textContent = "Salvar Observações";
        botao.disabled = true;

        checkbox.addEventListener("change", () => {
          const habilitar = checkbox.checked;
          textarea.disabled = !habilitar;
          botao.disabled = !habilitar;
          
          // Adiciona ou remove a classe de aula concluída
          if (checkbox.checked) {
            aulaItem.classList.add("aula-concluida");
          } else {
            aulaItem.classList.remove("aula-concluida");
          }
        });

        botao.addEventListener("click", () => {
          alert("Observações salvas:\n" + textarea.value);
        });

        divAula.appendChild(aulaItem);
        divAula.appendChild(labelCheck);
        divAula.appendChild(document.createElement("br"));
        divAula.appendChild(textarea);
        divAula.appendChild(document.createElement("br"));
        divAula.appendChild(botao);

        aulasContainer.appendChild(divAula);
      });
    }

    // Inicializa
    turmaSelect.dispatchEvent(new Event("change"));
  </script>
</body>
</html> 