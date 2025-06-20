<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Secretaria | Decl.Matricula</title>
  <link rel="stylesheet" href="../../styles/Msecretaria.css" />
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
  <?php include '../../Headers/Msecretaria.html'; ?>

  <main style="padding:20px;">
    <h2>Declaração de Matrícula</h2>

    <label for="alunoSelect">Selecione o aluno:</label>
    <select id="alunoSelect">
      <option value="">-- Escolha um aluno --</option>
    </select>
    <button id="btnGerar">Gerar Declaração</button>

    <section id="declaracao" style="margin-top:30px; display:none; border:1px solid #000; padding:20px; max-width:600px;">
      <p>
        Declaramos, para os devidos fins, que o(a) aluno(a)
        <strong id="nomeAluno"></strong>, portador(a) do CPF nº
        <strong id="cpfAluno"></strong> e RG nº
        <strong id="rgAluno"></strong>, encontra-se regularmente matriculado(a)
        no <strong id="serieAluno"></strong>, Turma
        <strong id="turmaAluno"></strong>, no período
        <strong id="turnoAluno"></strong>, nesta instituição de ensino.
      </p>
      <p>
        A matrícula foi realizada no dia
        <strong id="dataMatricula"></strong> e permanece ativa até a presente data.
      </p>
      <p>
        Para que produza os efeitos legais, firmamos a presente declaração.
      </p>
      <p><strong id="dataAtual"></strong></p>

      <br />
      <p>____________________________________________</p>
      <p>Assinatura da Secretaria</p>
    </section>
  </main>

  <script>
    // Dados fictícios dos alunos
    const alunos = [
      {
        nome: "Maria Clara Santos",
        cpf: "123.456.789-00",
        rg: "12.345.678-9",
        serie: "8º Ano",
        turma: "A",
        turno: "Vespertino",
        dataMatricula: "10/03/2025",
      },
      {
        nome: "João Pedro Almeida",
        cpf: "987.654.321-00",
        rg: "98.765.432-1",
        serie: "9º Ano",
        turma: "B",
        turno: "Matutino",
        dataMatricula: "05/02/2024",
      },
      {
        nome: "Ana Beatriz Oliveira",
        cpf: "555.444.333-22",
        rg: "55.444.333-2",
        serie: "7º Ano",
        turma: "C",
        turno: "Integral",
        dataMatricula: "15/01/2025",
      },
    ];

    // Preenche o select com os alunos
    const select = document.getElementById("alunoSelect");
    alunos.forEach((aluno, index) => {
      const option = document.createElement("option");
      option.value = index; // índice do array
      option.textContent = aluno.nome;
      select.appendChild(option);
    });

    // Formata data no padrão dd/mm/yyyy
    function formatDate(date) {
      const day = String(date.getDate()).padStart(2, "0");
      const month = String(date.getMonth() + 1).padStart(2, "0");
      const year = date.getFullYear();
      return `${day}/${month}/${year}`;
    }

    // Gera a declaração ao clicar no botão
    document.getElementById("btnGerar").addEventListener("click", () => {
      const idx = select.value;
      if (idx === "") {
        alert("Por favor, selecione um aluno.");
        return;
      }

      const aluno = alunos[idx];
      document.getElementById("nomeAluno").textContent = aluno.nome;
      document.getElementById("cpfAluno").textContent = aluno.cpf;
      document.getElementById("rgAluno").textContent = aluno.rg;
      document.getElementById("serieAluno").textContent = aluno.serie;
      document.getElementById("turmaAluno").textContent = aluno.turma;
      document.getElementById("turnoAluno").textContent = aluno.turno;
      document.getElementById("dataMatricula").textContent = aluno.dataMatricula;

      const hoje = new Date();
      document.getElementById("dataAtual").textContent = "Mogi Guaçu, " + formatDate(hoje) + ".";

      document.getElementById("declaracao").style.display = "block";
    });
  </script>
</body>
</html>
