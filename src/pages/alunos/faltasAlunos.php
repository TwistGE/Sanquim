<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanquim | Home</title>
  <link rel="stylesheet" href="../../styles/Malunos.css">
  <link rel="stylesheet" href="../../styles/faltasAlunos.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
  <?php include '../../Headers/Malunos.html'; ?>

  <main>
    <div class="container_faltas">
        <h3>Programação Web</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 40</li>
            <li>Faltas: 4</li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Engenharia de Software</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 80</li>
            <li>Faltas: 4</li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>

    </div>

    <div class="container_faltas">
        <h3>Arquitetura e organização de computadores</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 28</li>
            <li>Faltas: 0</li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>

    </div>

    <div class="container_faltas">
        <h3>Programação Web</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 66</li>
            <li>Faltas: 8</li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>

    </div>

    <div class="container_faltas">
        <h3>Programação Web</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 48</li>
            <li>Faltas: 4</li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>

    </div>

    <div class="container_faltas">
        <h3>Programação Web</h3> <!-- Nome da matéria -->
        <br>
        <ul>
            <li>Aulas: 48</li>
            <li>Faltas: 4

            </li>
            <li>Frequência: <span class="frequencia">?</span></li>
            <li>Faltas permitidas: 12</li>
        </ul>

    </div>
  </main>

</body>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll(".container_faltas");

    containers.forEach(container => {
      const items = container.querySelectorAll("li");

      let aulas = 0;
      let faltas = 0;

      items.forEach(li => {
        if (li.textContent.includes("Aulas")) {
          aulas = parseInt(li.textContent.replace(/\D/g, ""));
        }
        if (li.textContent.includes("Faltas") && !li.textContent.includes("permitidas")) {
          faltas = parseInt(li.textContent.replace(/\D/g, ""));
        }
      });

      if (aulas > 0) {
        const frequencia = ((aulas - faltas) / aulas) * 100;
        const frequenciaElement = container.querySelector(".frequencia");
        if (frequenciaElement) {
          frequenciaElement.textContent = `${frequencia.toFixed(0)}%`;
        }
      }
    });
  });
</script>

</html>