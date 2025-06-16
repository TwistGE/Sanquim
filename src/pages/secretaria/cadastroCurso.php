<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro Curso</title>
  <link rel="stylesheet" href="../../styles/Msecretaria.css" />
  <link rel="stylesheet" href="../../styles/cadastroCurso.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>

</head>
<body>

  <?php include '../../Headers/Msecretaria.html'; ?>

<main>
  <div class="containers island">
    <div class="container_table">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="title_table">Cursos Cadastrados</th>
          </tr>
        </thead>
        <tbody id="tabelaCursos">
          <tr><td>Empreendedorismo</td></tr>
          <tr><td>Pré-Vestibular</td></tr>
          <tr><td>Pré-Vestibulinho</td></tr>
        </tbody>
      </table>
    </div>
    
    <!-- Botão para abrir o formulário -->
    <button id="novoCursoBtn">Novo Curso</button>
    
    <!-- Formulário de novo curso -->
    <form id="formNovoCurso" class="table hidden">
      <h3 class="title_table">Cadastro de Curso</h3>

      <div class="input">
        <label>ID:</label>
        <input type="text" name="id" required><br>
      </div>
      
      <div class="input">
        
        <label>Nome:</label>
        <input type="text" id="nomeCurso" name="nome" required><br>
      </div>
      
      <div class="input">

        <label>Período:</label>
        <input type="text" name="periodo" required><br>
      </div>
      <div class="input">

        <label>Carga horária:</label>
        <input type="text" name="carga" required><br>
      </div>
      <div class="input">

        <label>Status:</label>
        <input type="text" name="status" required><br>
      </div>
      
      <div class="form_buttons">
        <button type="submit">Criar Curso</button>
        <button type="button" id="cancelarBtn">Cancelar</button>
      </div>
      </form>
  </div>
</main>
  
  <!-- Scripts -->
  <script>
    // Exibir o formulário
    document.getElementById("novoCursoBtn").addEventListener("click", function () {
      const form = document.getElementById("formNovoCurso");
      document.getElementById("formNovoCurso").style.display = "flex";
      form.classList.add('show');
      form.classList.remove('hidden');
    });

    // Submeter o formulário e adicionar o curso à tabela
    document.getElementById("formNovoCurso").addEventListener("submit", function (e) {
      e.preventDefault();

      const nomeCurso = document.getElementById("nomeCurso").value.trim();

      if (nomeCurso !== "") {
        const tabela = document.getElementById("tabelaCursos");
        const novaLinha = document.createElement("tr");
        const novaCelula = document.createElement("td");
        novaCelula.textContent = nomeCurso;
        novaLinha.appendChild(novaCelula);
        tabela.appendChild(novaLinha);

        this.reset();
        const form = document.getElementById("formNovoCurso");
        document.getElementById("novoCursoBtn").style.display = "inline-block";
        form.classList.remove('show');
        form.classList.add('hidden');
      } else {
        alert("Digite o nome do curso.");
      }
    });

    // Cancelar o cadastro
    document.getElementById("cancelarBtn").addEventListener("click", function () {
      const form = document.getElementById("formNovoCurso");
      form.reset();
      form.classList.remove('show');
      form.classList.add('hidden');
      document.getElementById("novoCursoBtn").style.display = "inline-block";
    });
  </script>

</body>
</html>
