<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Disciplina</title>
    <link rel="stylesheet" href="../../styles/Msecretaria.css">
    <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>

  <style>
    #formNovaDisciplina{
      display: none;
    }
  </style>


<!--Tabela de turmas cadastradas fictícias-->
<table class="table" border="1">
  <thead>
    <tr>
      
      <th scope="col">Disciplinas Cadastradas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Quimica</td>
    </tr>
    <tr>
      <td>Biologia</td>
    </tr>
    <tr>
      <td>Matemática</td>
    </tr>
  </tbody>
</table>

<button id="novaDisciplinaBtn">Nova Disciplina</button>

<!-- Formulário para nova disciplina -->
<form id="formNovaDisciplina" method="">
  <br />
  <input type="text" id="nomeDisciplina" name="nomeDisciplina" placeholder="Nome da disciplina" required /><br>
  <input type="number" id="statusDisc" name="statusDisc" placeholder="Status" required /><br><br>
  <button type="submit">Criar Disciplina</button>
  <button type="button" id="cancelarBtn">Cancelar</button>
</form>

<!-- Scripts -->
<script>
  document.getElementById("novaDisciplinaBtn").addEventListener("click", function () {
    const form = document.getElementById("formNovaDisciplina");
    form.style.display = "block";
    this.style.display = "none";
  });

  document.getElementById("formNovaDisciplina").addEventListener("submit", function (e) {
    e.preventDefault();

    const nomeDisciplina = document.getElementById("nomeDisciplina").value.trim();

    if (nomeDisciplina !== "") {
      const tabela = document.querySelector("table.table tbody");
      const novaLinha = document.createElement("tr");
      const novaCelula = document.createElement("td");
      novaCelula.textContent = nomeDisciplina;
      novaLinha.appendChild(novaCelula);
      tabela.appendChild(novaLinha);

      this.reset();
      this.style.display = "none";
      document.getElementById("novaDisciplinaBtn").style.display = "inline-block";
    } else {
      alert("Digite o nome da disciplina.");
    }
  });

  document.getElementById("cancelarBtn").addEventListener("click", function () {
    const form = document.getElementById("formNovaDisciplina");
    form.reset();
    form.style.display = "none";
    document.getElementById("novaDisciplinaBtn").style.display = "inline-block";
  });
</script>

</body>
</html>