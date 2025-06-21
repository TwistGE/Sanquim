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
        <div>
            <label>Usuário:</label>
            <input type="text" name="usuario" required>
        </div>
        <div>
            <label>Senha:</label>
            <input type="password" name="senha" required>
        </div>
        <div>
            <label>Nível:</label>
            <input type="text" name="nivel" required>
        </div>
        <div>
            <label>Status:</label>
            <input type="number" name="status" required>
        </div>
</div>
            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Professor -->
        <form id="formProfessor" style="display:none;" method="POST" action="" class="form island">
            <h3>Cadastro de Professor</h3>
<div class="pattern">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label>CPF:</label>
            <input type="text" name="cpf" required>
        </div>
        <div>
            <label>RG:</label>
            <input type="text" name="rg" required>
        </div>
        <div>
            <label>Endereço:</label>
            <input type="text" name="endereco" required>
        </div>
        <div>
            <label>Bairro:</label>
            <input type="text" name="bairro" required>
        </div>
        <div>
            <label>Cidade:</label>
            <input type="text" name="cidade" required>
        </div>
        <div>
            <label>Fone:</label>
            <input type="text" name="fone" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Status:</label>
            <input type="number" name="status" required>
        </div>
</div>
            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de Aluno -->
        <form id="formAluno" style="display:none;" method="POST" action="" class="form island">
            <h3>Cadastro de Aluno</h3>
<div class="pattern">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label>Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
        </div>
        <div>
            <label>CPF:</label>
            <input type="text" name="cpf" required>
        </div>
        <div>
            <label>RG:</label>
            <input type="text" name="rg" required>
        </div>
        <div>
            <label>Endereço:</label>
            <input type="text" name="endereco" required>
        </div>
        <div>
            <label>Bairro:</label>
            <input type="text" name="bairro" required>
        </div>
        <div>
            <label>Cidade:</label>
            <input type="text" name="cidade" required>
        </div>
        <div>
            <label>Fone:</label>
            <input type="text" name="fone" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Status:</label>
            <input type="number" name="status" required>
        </div>
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
                    document.getElementById('formUsuario').style.display = 'flex';
                } else if (tipo === 'professor') {
                    document.getElementById('formProfessor').style.display = 'flex';
                } else if (tipo === 'aluno') {
                    document.getElementById('formAluno').style.display = 'flex';
                }
            }
        </script>

    </body>

    </html>