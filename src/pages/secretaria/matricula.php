<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Matricula</title>
  <link rel="stylesheet" href="../../styles/Msecretaria.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
  <style>
    #formNovaMatricula {
      display: none; /* Escondido por padrão */
      margin-top: 20px;
    }
  </style>
</head>
<body>
    <?php include '../../Headers/Msecretaria.html'; ?>
  <h2>Matrículas Registradas:</h2>
  <table class="table" border="1" cellpadding="8" cellspacing="0" style="margin-bottom: 20px;" id="tabelaMatriculas">
    <thead>
      <tr>
        <th>RA</th>
        <th>Nome</th>
        <th>Curso</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1234567890</td>
        <td>Maria da Silva</td>
        <td>Informática</td>
      </tr>
      <tr>
        <td>0987654321</td>
        <td>João Pereira</td>
        <td>Enfermagem</td>
      </tr>
      <tr>
        <td>1122334455</td>
        <td>Ana Souza</td>
        <td>Logística</td>
      </tr>
    </tbody>
  </table>

  <button id="NovaMatriculaBtn">Nova Matrícula</button>

  <form id="formNovaMatricula">
    <h2>Cadastro de Matrícula</h2>
    <label for="ra">RA:</label>
    <input type="text" id="ra" name="RA" maxlength="10" required><br><br>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" maxlength="50" required><br><br>

    <label for="curso">Curso:</label>
    <select id="curso" name="curso" required>
      <option value="">-- Selecione um curso --</option>
      <option value="Informática">Informática</option>
      <option value="Administração">Administração</option>
      <option value="Enfermagem">Enfermagem</option>
      <option value="Eletrotécnica">Eletrotécnica</option>
      <option value="Logística">Logística</option>
    </select><br><br>

    <button type="submit">Cadastrar</button>
  </form>

  <script>
    const btnNovaMatricula = document.getElementById('NovaMatriculaBtn');
    const formMatricula = document.getElementById('formNovaMatricula');
    const tabela = document.getElementById('tabelaMatriculas').getElementsByTagName('tbody')[0];

    btnNovaMatricula.addEventListener('click', () => {
      formMatricula.style.display = formMatricula.style.display === 'none' ? 'block' : 'none';
    });

    formMatricula.addEventListener('submit', (e) => {
      e.preventDefault(); // Evita recarregar a página

      // Pegando os valores do formulário
      const ra = document.getElementById('ra').value.trim();
      const nome = document.getElementById('nome').value.trim();
      const curso = document.getElementById('curso').value;

      if (ra && nome && curso) {
        // Criando nova linha
        const novaLinha = tabela.insertRow();

        // Inserindo colunas
        novaLinha.insertCell(0).textContent = ra;
        novaLinha.insertCell(1).textContent = nome;
        novaLinha.insertCell(2).textContent = curso;

        // Limpando o formulário
        formMatricula.reset();

        // Escondendo o formulário novamente (opcional)
        formMatricula.style.display = 'none';
      } else {
        alert('Preencha todos os campos corretamente!');
      }
    });
  </script>
</body>
</html>
