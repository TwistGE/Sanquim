<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Turma</title>
    <link rel="stylesheet" href="../../styles/Msecretaria.css">
    <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>

  <style>
    #formNovaTurma{
      display: none;
    }
  </style>
 <?php include '../../Headers/Msecretaria.html'; ?>

<!--Tabela de turmas cadastradas fictícias-->
<table class="table" border="1">
  <thead>
    <tr>
      
      <th scope="col">Turmas Cadastradas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Turma A</td>
    </tr>
    <tr>
      <td>Turma B</td>
    </tr>
    <tr>
      <td>Turma C</td>
    </tr>
  </tbody>
</table>

<!--Ao Apertar em "Nova Turma, abrirá um forms de registro:" -->
  <button id="novaTurmaBtn">Nova Turma</button>

  <!-- Formulário oculto -->
<form id="formNovaTurma" style="display: none;" method="">
  <br />
  <input type="text" id="nomeTurma" name="nomeTurma" placeholder="Nome da turma" required />

  <table class="table" border="1">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome do Aluno</th>
        <th>Selecionar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ana Silva</td>
        <td><input type="checkbox" name="alunos[]" value="Ana Silva" /></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Bruno Costa</td>
        <td><input type="checkbox" name="alunos[]" value="Bruno Costa" /></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Camila Rocha</td>
        <td><input type="checkbox" name="alunos[]" value="Camila Rocha" /></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Diego Martins</td>
        <td><input type="checkbox" name="alunos[]" value="Diego Martins" /></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Eduarda Lima</td>
        <td><input type="checkbox" name="alunos[]" value="Eduarda Lima" /></td>
      </tr>
    </tbody>
  </table>

  <button type="submit">Criar Turma</button>   <button type="button" id="cancelarBtn">Cancelar</button>
</form>


  <!-- Script para mostrar/ocultar -->
  <script>
    document.getElementById("novaTurmaBtn").addEventListener("click", function () {
      var form = document.getElementById("formNovaTurma");
      form.style.display = form.style.display === "none" ? "block" : "none";
    });
  </script>

  <script>
  // Mostrar o formulário ao clicar em "Nova Turma"
  document.getElementById("novaTurmaBtn").addEventListener("click", function () {
    const form = document.getElementById("formNovaTurma");
    form.style.display = "block";
    this.style.display = "none"; // Esconde o botão após abrir o form (opcional)
  });

  // Adicionar turma à tabela ao submeter o formulário
  document.getElementById("formNovaTurma").addEventListener("submit", function (e) {
    e.preventDefault(); // Impede recarregamento da página

    const nomeTurma = document.getElementById("nomeTurma").value.trim();

    if (nomeTurma !== "") {
      // Cria nova linha na tabela
      const tabela = document.querySelector("table.table tbody");
      const novaLinha = document.createElement("tr");
      const novaCelula = document.createElement("td");
      novaCelula.textContent = nomeTurma;
      novaLinha.appendChild(novaCelula);
      tabela.appendChild(novaLinha);

      // Resetar o formulário
      this.reset();

      // Esconder o formulário novamente (opcional)
      this.style.display = "none";
      document.getElementById("novaTurmaBtn").style.display = "inline-block"; // Mostrar o botão de novo
    } else {
      alert("Digite o nome da turma.");
    }
  });
</script>

<script>
    // Cancelar: esconde o formulário e volta o botão "Nova Turma"
  document.getElementById("cancelarBtn").addEventListener("click", function () {
    const form = document.getElementById("formNovaTurma");
    form.reset(); // Limpa os campos (opcional)
    form.style.display = "none";
    document.getElementById("novaTurmaBtn").style.display = "inline-block";
  });
</script>

</body>
</html>