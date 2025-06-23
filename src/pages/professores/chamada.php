<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor | Registro de frequência</title>
  
  <link rel="stylesheet" href="../../styles/Mprofessores.css">
  <link rel="stylesheet" href="../../styles/chamada.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>
<body>
      <?php include '../../Headers/Mprofessores.html'; ?>

    <main>
        <div class="chamada island">
            <h1>Chamada</h1>
            
            <div class="chamada-select">
                <label for="turma">Selecione a turma:</label>
                <select id="turma">
                    <option value="">-- Selecione --</option>
                    <option value="1A">1º Ano A - Informática</option>
                    <option value="1B">1º Ano B - Enfermagem</option>
                    <option value="2A" selected>2º Ano A - Administração</option>
                    <option value="2B">2º Ano B - Edificações</option>
                </select>
            </div>
            
            <div>
                <label for="quantidadeAulas">Quantidade de aulas no período:</label>
                <input type="number" id="quantidadeAulas" min="1" max="20" value="2">
            </div>
        </div>
            
        <div id="tabelaFaltas" class="island">
            <!-- Tabela de faltas será inserida aqui -->
        </div>
    </main>
        
        <script>
            const turmaSelect = document.getElementById('turma');
            const quantidadeAulasInput = document.getElementById('quantidadeAulas');
            const tabelaFaltas = document.getElementById('tabelaFaltas');
            
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

        function gerarTabelaFaltas() {
            const turmaSelecionada = turmaSelect.value;
            const quantidadeAulas = parseInt(quantidadeAulasInput.value);
            
            // Limpa a tabela anterior
            tabelaFaltas.innerHTML = '';
            
            if (!turmaSelecionada || quantidadeAulas < 1) return;
            
            // Cria a tabela
            const tabela = document.createElement('table');
            
            // Cria cabeçalho
            const thead = document.createElement('thead');
            const headerRow = document.createElement('tr');
            
            // Célula vazia para o canto superior esquerdo
            const thVazio = document.createElement('th');
            headerRow.appendChild(thVazio);
            
            // Adiciona colunas para cada aula
            for (let i = 1; i <= quantidadeAulas; i++) {
                const thAula = document.createElement('th');
                thAula.textContent = `Aula ${i}`;
                headerRow.appendChild(thAula);
            }
            
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
                
                // Colunas para as faltas (checkboxes)
                for (let i = 1; i <= quantidadeAulas; i++) {
                    const tdFalta = document.createElement('td');
                    const inputFalta = document.createElement('input');
                    inputFalta.type = 'checkbox';
                    inputFalta.title = `Marcar falta na aula ${i}`;
                    tdFalta.appendChild(inputFalta);
                    row.appendChild(tdFalta);
                }
                
                tbody.appendChild(row);
            });
            
            tabela.appendChild(tbody);
            tabelaFaltas.appendChild(tabela);
            
            // Adiciona botão para salvar
            const btnSalvar = document.createElement('button');
            btnSalvar.textContent = 'Salvar chamada';
            btnSalvar.addEventListener('click', function() {
                alert(`Chamada Realizada com sucesso na turma: ${turmaSelect.options[turmaSelect.selectedIndex].text}`);
            });
            
            tabelaFaltas.appendChild(btnSalvar);
        }

        // Event listeners
        turmaSelect.addEventListener('change', gerarTabelaFaltas);
        quantidadeAulasInput.addEventListener('change', gerarTabelaFaltas);
        
        // Gera a tabela inicial
        gerarTabelaFaltas();
    </script>
    </script>
</body>
</html>