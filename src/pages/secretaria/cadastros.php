<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="../../styles/Msecretaria.css">
    <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <?php include '../../Headers/Msecretaria.html'; ?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title>Cadastro Único</title>
    </head>

    <body>

        <h2>Cadastro</h2>

        <label for="tipoCadastro">Tipo de Cadastro:</label>
        <select id="tipoCadastro" name="tipoCadastro" onchange="mostrarFormulario(this.value)">
            <option value="">Selecione</option>
            <option value="usuario">Usuário</option>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select>

        <!-- Formulário de Usuário -->
        <form id="formUsuario" style="display:none;" method="POST" action="">

            <br><br>
            <h3>Cadastro de Usuário</h3>
            <label>Usuário:</label>
            <input type="text" name="usuario" required><br>

            <label>Senha:</label>
            <input type="password" name="senha" required><br>

            <label>Nível:</label>
            <input type="text" name="nivel" required><br>

            <label>Status:</label>
            <input type="number" name="status" required><br>

            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Professor -->
        <form id="formProfessor" style="display:none;" method="POST" action="">
            <br><br>
            <h3>Cadastro de Professor</h3>
            <label>Nome:</label>
            <input type="text" name="nome" required><br>

            <label>CPF:</label>
            <input type="text" name="cpf" required><br>

            <label>RG:</label>
            <input type="text" name="rg" required><br>

            <label>Endereço:</label>
            <input type="text" name="endereco" required><br>

            <label>Bairro:</label>
            <input type="text" name="bairro" required><br>

            <label>Cidade:</label>
            <input type="text" name="cidade" required><br>

            <label>Fone:</label>
            <input type="text" name="fone" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Status:</label>
            <input type="number" name="status" required><br>

            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Aluno -->
        <form id="formAluno" style="display:none;" method="POST" action="">
            <br><br>
            <h3>Cadastro de Aluno</h3>
            <label>Nome:</label>
            <input type="text" name="nome" required><br>

            <label>Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required><br>

            <label>CPF:</label>
            <input type="text" name="cpf" required><br>

            <label>RG:</label>
            <input type="text" name="rg" required><br>

            <label>Endereço:</label>
            <input type="text" name="endereco" required><br>

            <label>Bairro:</label>
            <input type="text" name="bairro" required><br>

            <label>Cidade:</label>
            <input type="text" name="cidade" required><br>

            <label>Fone:</label>
            <input type="text" name="fone" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Status:</label>
            <input type="number" name="status" required><br>

            <button type="submit">Cadastrar</button>
        </form>

        <!-- Script para exibir o formulário correto -->
        <script>
            function mostrarFormulario(tipo) {
                document.getElementById('formUsuario').style.display = 'none';
                document.getElementById('formProfessor').style.display = 'none';
                document.getElementById('formAluno').style.display = 'none';

                if (tipo === 'usuario') {
                    document.getElementById('formUsuario').style.display = 'block';
                } else if (tipo === 'professor') {
                    document.getElementById('formProfessor').style.display = 'block';
                } else if (tipo === 'aluno') {
                    document.getElementById('formAluno').style.display = 'block';
                }
            }
        </script>

    </body>

    </html>

</body>

</html>
