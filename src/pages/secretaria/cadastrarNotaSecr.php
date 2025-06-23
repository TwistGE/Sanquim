<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor | Registro de notas</title>
  
  <link rel="stylesheet" href="../../styles/Mprofessores.css">
    <link rel="stylesheet" href="../../styles/cadastrarNota.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
      <?php include '../../Headers/Msecretaria.html'; ?>

 <main>
    <div class="cadastro island">
    
    <h1>Cadastro de Notas</h1>
    <div class="cadastro-select">
        <label for="turma">Selecione a turma:</label>
        <select id="turma">
            <option value="">-- Selecione --</option>
            <option value="1A">1º Ano A - Informática</option>
            <option value="1B">1º Ano B - Enfermagem</option>
            <option value="2A">2º Ano A - Administração</option>
            <option value="2B">2º Ano B - Edificações</option>
        </select>
    </div>
    </div>
    

    <div id="tabelaNotas" class="island">
        <!-- Tabela de notas será inserida aqui -->
    </div>
</main>
    

    <script>
        const turmaSelect = document.getElementById('turma');
        const tabelaNotas = document.getElementById('tabelaNotas');

        // Dados fictícios de alunos por turma
        // Dados fictícios de alunos por turma (10 alunos cada)
        const alunosPorTurma = {
            "1A": [
                "Ana Silva", "Bruno Oliveira", "Carlos Santos", "Daniela Costa", "Eduardo Pereira",
                "Fernanda Lima", "Gabriel Souza", "Helena Martins", "Igor Almeida", "Juliana Ferreira"
            ],
            "1B": [
                "Kevin Ribeiro", "Larissa Gomes", "Marcos Nunes", "Natália Dias", "Otávio Castro",
                "Patrícia Mendes", "Queila Ramos", "Rafael Torres", "Sandra Vieira", "Tiago Monteiro"
            ],
            "2A": [
                "Ulisses Junior", "Vanessa Xavier", "Wagner Santos", "Ximena Fernandes", "Yago Lima",
                "Zélia Costa", "Arthur Mendes", "Bianca Oliveira", "Caio Pereira", "Débora Alves"
            ],
            "2B": [
                "Ester Carvalho", "Felipe Rocha", "Giovana Nunes", "Heitor Castro", "Isabela Dias",
                "João Pedro Gomes", "Kamila Martins", "Leonardo Souza", "Mariana Torres", "Nicolas Ramos"
            ]
        };

        turmaSelect.addEventListener('change', function() {
            const turmaSelecionada = this.value;
            
            // Limpa a tabela anterior
            tabelaNotas.innerHTML = '';
            
            if (!turmaSelecionada) return;
            
            // Cria a tabela
            const tabela = document.createElement('table');
            
            // Cria cabeçalho
            const thead = document.createElement('thead');
            const headerRow = document.createElement('tr');
            
            const thAluno = document.createElement('th');
            thAluno.textContent = 'Aluno';
            
            const thNota1 = document.createElement('th');
            thNota1.textContent = 'Nota 1';
            
            const thNota2 = document.createElement('th');
            thNota2.textContent = 'Nota 2';
            
            const thNota3 = document.createElement('th');
            thNota3.textContent = 'Nota 3';
            
            headerRow.appendChild(thAluno);
            headerRow.appendChild(thNota1);
            headerRow.appendChild(thNota2);
            headerRow.appendChild(thNota3);
            thead.appendChild(headerRow);
            tabela.appendChild(thead);
            
            // Cria corpo da tabela
            const tbody = document.createElement('tbody');
            
            // Adiciona alunos da turma selecionada
            alunosPorTurma[turmaSelecionada].forEach(aluno => {
                const row = document.createElement('tr');
                
                // Coluna do nome do aluno
                const tdAluno = document.createElement('td');
                tdAluno.textContent = aluno;
                row.appendChild(tdAluno);
                
                // Colunas para as notas (input type number)
                for (let i = 0; i < 3; i++) {
                    const tdNota = document.createElement('td');
                    const inputNota = document.createElement('input');
                    inputNota.type = 'number';
                    inputNota.min = '0';
                    inputNota.max = '10';
                    inputNota.step = '0.1';
                    inputNota.style.width = '50px';
                    tdNota.appendChild(inputNota);
                    row.appendChild(tdNota);
                }
                
                tbody.appendChild(row);
            });
            
            tabela.appendChild(tbody);
            tabelaNotas.appendChild(tabela);
            
            // Adiciona botão para salvar
            const btnSalvar = document.createElement('button');
            btnSalvar.textContent = 'Salvar Notas';
            btnSalvar.addEventListener('click', function() {
                alert('Notas salvas com sucesso!');
            });
            
            tabelaNotas.appendChild(btnSalvar);
        });
    </script>
</body>
</html>