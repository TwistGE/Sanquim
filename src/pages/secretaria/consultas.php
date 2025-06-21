    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secretaria | Consultas</title>
        <link rel="stylesheet" href="../../styles/Msecretaria.css">
        <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
    </head>

    <body>
        <?php include '../../Headers/Msecretaria.html'; ?>

        <h2>Consulta da Secretaria</h2>



        <label for="tipo">Escolha uma categoria:</label>
        <select id="tipo" onchange="mostrarTabela()">
            <option value="">-- Selecione --</option>
            <option value="alunos">Alunos</option>
            <option value="professores">Professores</option>
            <option value="usuarios">Usuários</option>
        </select>

        <div id="tabela-container"></div>
        <div id="detalhes"></div>

    <script>
        const dados = {
            alunos: [
                { id: 1, nome: 'Maria Silva', data_nascimento: '2005-08-15', cpf: '123.456.789-00', rg: '12.345.678-9', endereco: 'Rua A, 123', bairro: 'Centro', cidade: 'Mogi Guaçu', fone: '(19) 99999-1111', email: 'maria@email.com', status: 1 },
                { id: 2, nome: 'João Souza', data_nascimento: '2006-02-10', cpf: '987.654.321-00', rg: '98.765.432-1', endereco: 'Rua B, 456', bairro: 'Bela Vista', cidade: 'Mogi Mirim', fone: '(19) 98888-2222', email: 'joao@email.com', status: 1 },
                { id: 3, nome: 'Ana Paula', data_nascimento: '2007-03-21', cpf: '321.654.987-00', rg: '32.165.498-3', endereco: 'Rua C, 789', bairro: 'Zona Leste', cidade: 'Mogi Mirim', fone: '(19) 98777-3333', email: 'ana@email.com', status: 1 },
                { id: 4, nome: 'Lucas Mendes', data_nascimento: '2004-11-30', cpf: '852.963.741-00', rg: '85.296.374-1', endereco: 'Av. Sul, 124', bairro: 'Parque Sul', cidade: 'Mogi Guaçu', fone: '(19) 97666-4444', email: 'lucas@email.com', status: 1 },
                { id: 5, nome: 'Carla Dias', data_nascimento: '2005-07-19', cpf: '147.258.369-00', rg: '14.725.836-9', endereco: 'Rua D, 321', bairro: 'Centro', cidade: 'Mogi Guaçu', fone: '(19) 96555-5555', email: 'carla@email.com', status: 1 },
                { id: 6, nome: 'Pedro Lima', data_nascimento: '2006-09-12', cpf: '753.951.852-00', rg: '75.395.185-2', endereco: 'Rua E, 456', bairro: 'Bairro Alto', cidade: 'Mogi Mirim', fone: '(19) 95444-6666', email: 'pedro@email.com', status: 1 },
                { id: 7, nome: 'Juliana Rocha', data_nascimento: '2005-12-02', cpf: '963.852.741-00', rg: '96.385.274-1', endereco: 'Rua F, 987', bairro: 'Vila Nova', cidade: 'Mogi Guaçu', fone: '(19) 94333-7777', email: 'juliana@email.com', status: 1 },
                { id: 8, nome: 'Tiago Santos', data_nascimento: '2007-04-18', cpf: '321.987.654-00', rg: '32.198.765-4', endereco: 'Av. Norte, 654', bairro: 'Centro', cidade: 'Mogi Mirim', fone: '(19) 93222-8888', email: 'tiago@email.com', status: 1 },
                { id: 9, nome: 'Larissa Alves', data_nascimento: '2006-08-25', cpf: '456.789.123-00', rg: '45.678.912-3', endereco: 'Rua G, 852', bairro: 'Vila Rica', cidade: 'Mogi Guaçu', fone: '(19) 92111-9999', email: 'larissa@email.com', status: 1 },
                { id: 10, nome: 'Felipe Costa', data_nascimento: '2005-10-07', cpf: '654.123.987-00', rg: '65.412.398-7', endereco: 'Rua H, 741', bairro: 'Jardim Planalto', cidade: 'Mogi Mirim', fone: '(19) 91100-0000', email: 'felipe@email.com', status: 1 }
            ],
            professores: [
                { id: 1, nome: 'Carlos Alberto', cpf: '111.222.333-44', rg: '55.666.777-8', endereco: 'Av. Central, 789', bairro: 'Jardim América', cidade: 'Mogi Guaçu', fone: '(19) 97777-3333', email: 'carlos@email.com', status: 1 },
                { id: 2, nome: 'Fernanda Lima', cpf: '222.333.444-55', rg: '88.999.000-1', endereco: 'Rua das Flores, 321', bairro: 'Jardim Elite', cidade: 'Mogi Mirim', fone: '(19) 96666-4444', email: 'fernanda@email.com', status: 1 },
                { id: 3, nome: 'Paulo Sérgio', cpf: '333.444.555-66', rg: '11.222.333-4', endereco: 'Rua da Paz, 654', bairro: 'Centro', cidade: 'Mogi Guaçu', fone: '(19) 95555-1111', email: 'paulo@email.com', status: 1 },
                { id: 4, nome: 'Mariana Costa', cpf: '444.555.666-77', rg: '22.333.444-5', endereco: 'Rua Azul, 789', bairro: 'Vila Nova', cidade: 'Mogi Mirim', fone: '(19) 94444-2222', email: 'mariana@email.com', status: 1 },
                { id: 5, nome: 'Renato Gomes', cpf: '555.666.777-88', rg: '33.444.555-6', endereco: 'Rua Verde, 123', bairro: 'Bela Vista', cidade: 'Mogi Guaçu', fone: '(19) 93333-3333', email: 'renato@email.com', status: 1 },
                { id: 6, nome: 'Luciana Souza', cpf: '666.777.888-99', rg: '44.555.666-7', endereco: 'Av. Oeste, 456', bairro: 'Centro', cidade: 'Mogi Mirim', fone: '(19) 92222-4444', email: 'luciana@email.com', status: 1 },
                { id: 7, nome: 'André Martins', cpf: '777.888.999-00', rg: '55.666.777-8', endereco: 'Rua Branca, 852', bairro: 'Zona Leste', cidade: 'Mogi Guaçu', fone: '(19) 91111-5555', email: 'andre@email.com', status: 1 },
                { id: 8, nome: 'Simone Dias', cpf: '888.999.000-11', rg: '66.777.888-9', endereco: 'Rua Preta, 963', bairro: 'Vila Rica', cidade: 'Mogi Mirim', fone: '(19) 90000-6666', email: 'simone@email.com', status: 1 },
                { id: 9, nome: 'Fábio Leal', cpf: '999.000.111-22', rg: '77.888.999-0', endereco: 'Rua Amarela, 741', bairro: 'Jardim Planalto', cidade: 'Mogi Guaçu', fone: '(19) 98888-7777', email: 'fabio@email.com', status: 1 },
                { id: 10, nome: 'Tatiane Moraes', cpf: '000.111.222-33', rg: '88.999.000-1', endereco: 'Rua Rosa, 159', bairro: 'Jardim Elite', cidade: 'Mogi Mirim', fone: '(19) 97777-8888', email: 'tatiane@email.com', status: 1 }
            ],
            usuarios: [
                { id: 1, usuario: 'admin', senha: '1234', nivel: 'Administrador', status: 1 },
                { id: 2, usuario: 'secretaria1', senha: 'abcd', nivel: 'Secretaria', status: 1 },
                { id: 3, usuario: 'prof1', senha: 'prof123', nivel: 'Professor', status: 1 },
                { id: 4, usuario: 'coord1', senha: 'coord123', nivel: 'Coordenador', status: 1 },
                { id: 5, usuario: 'user5', senha: 'user5', nivel: 'Secretaria', status: 1 },
                { id: 6, usuario: 'admin2', senha: '4321', nivel: 'Administrador', status: 1 },
                { id: 7, usuario: 'secretaria2', senha: 'dcba', nivel: 'Secretaria', status: 1 },
                { id: 8, usuario: 'prof2', senha: 'prof456', nivel: 'Professor', status: 1 },
                { id: 9, usuario: 'coord2', senha: 'coord456', nivel: 'Coordenador', status: 1 },
                { id: 10, usuario: 'user10', senha: 'senha10', nivel: 'Secretaria', status: 1 }
            ]
        };

  function mostrarTabela() {
        const tipo = document.getElementById('tipo').value;
        const container = document.getElementById('tabela-container');
        container.innerHTML = ''; // limpa o conteúdo anterior

        if (!tipo || !dados[tipo]) return;

        const tabela = document.createElement('table');
        tabela.border = '1';

        // Cabeçalhos
        const cabecalho = document.createElement('tr');
        const colunas = Object.keys(dados[tipo][0]);
        colunas.forEach(col => {
            const th = document.createElement('th');
            th.textContent = col.charAt(0).toUpperCase() + col.slice(1);
            cabecalho.appendChild(th);
        });
        tabela.appendChild(cabecalho);

        // Linhas de dados
        dados[tipo].forEach(registro => {
            const linha = document.createElement('tr');
            colunas.forEach(col => {
                const td = document.createElement('td');
                if (col === 'status') {
                    td.textContent = registro[col] === 1 ? 'Ativo' : 'Inativo';
                } else {
                    td.textContent = registro[col];
                }
                linha.appendChild(td);
            });
            tabela.appendChild(linha);
        });

        container.appendChild(tabela);
    }
</script>
    </body>
    </html>
