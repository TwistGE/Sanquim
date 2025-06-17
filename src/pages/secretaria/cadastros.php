<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="../../styles/Msecretaria.css">
    <link rel="stylesheet" href="../../styles/cadastros.css">
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
        <main>
        <div class="island select">
            <h2>Cadastro</h2>
            <label for="tipoCadastro">Tipo de Cadastro:</label>
            <select id="tipoCadastro" name="tipoCadastro" onchange="mostrarFormulario(this.value)">
                <option value="">Selecione</option>
                <option value="usuario">Usuário</option>
                <option value="professor">Professor</option>
                <option value="aluno">Aluno</option>
            </select>
</div>

        <!-- Formulário de Usuário -->
         <div class="">
        <form id="formUsuario" style="display:none;" method="POST" action="" class="form island">

            <h3>Cadastro de Usuário</h3>
<div class="pattern">            
            <label>Usuário:</label>
            <input type="text" name="usuario" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <label>Nível:</label>
            <input type="text" name="nivel" required>

            <label>Status:</label>
            <input type="number" name="status" required>
</div>
            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Professor -->
        <form id="formProfessor" style="display:none;" method="POST" action="" class="form island">
            <h3>Cadastro de Professor</h3>
            <div class="pattern">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>CPF:</label>
            <input type="text" name="cpf" required>

            <label>RG:</label>
            <input type="text" name="rg" required>

            <label>Endereço:</label>
            <input type="text" name="endereco" required>

            <label>Bairro:</label>
            <input type="text" name="bairro" required>

            <label>Cidade:</label>
            <input type="text" name="cidade" required>

            <label>Fone:</label>
            <input type="text" name="fone" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Status:</label>
            <input type="number" name="status" required>
</div>
            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Aluno -->
        <form id="formAluno" style="display:none;" method="POST" action="" class="form island">
            <h3>Cadastro de Aluno</h3>
            <div class="pattern">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>

            <label>CPF:</label>
            <input type="text" name="cpf" required>

            <label>RG:</label>
            <input type="text" name="rg" required>

            <label>Endereço:</label>
            <input type="text" name="endereco" required>

            <label>Bairro:</label>
            <input type="text" name="bairro" required>

            <label>Cidade:</label>
            <input type="text" name="cidade" required>

            <label>Fone:</label>
            <input type="text" name="fone" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Status:</label>
            <input type="number" name="status" required>
</div>
            <button type="submit">Cadastrar</button>
        </form>
</div>

</main>

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