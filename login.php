<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="src/images/icone.jpg">
    <title>Colégio Sanquim - Mogi Mirim</title>
</head>

<body>

       <main class="container_login">
            <img src="  src/images/logosamquim.webp" alt="Logo"
                style="max-width: 150px; display: block; margin: 0 auto;">
        <form action="">

            <h3>Login</h3>
            <br>
            <div class="input-box">
                <input type="text" placeholder="Usuário">
            </div>
            <br>
            <div class="input-box">
                <input type="password" placeholder="Senha">
            </div>
            <br>
            <button>Entrar</button>
            <br>
            <a href="recuperarsenha.html" class="esqueci-senha">Esqueci minha senha</a>
        </form>

    </main>

    <script>
  // Usuários mockados: usuário, senha, tipo
  const usuarios = [
    { usuario: 'joao.aluno',   senha: '1234', tipo: 'aluno' },
    { usuario: 'maria.pro',    senha: 'abcd', tipo: 'professor' },
    { usuario: 'ana.secret',   senha: 'qwerty', tipo: 'secretaria' }
  ];

  function validarLogin() {
    const u = document.getElementById('usuario').value;
    const s = document.getElementById('senha').value;

    const achou = usuarios.find(x => x.usuario === u && x.senha === s);

    if (!achou) {
      alert('Usuário ou senha inválidos');
      return false; // impede o envio
    }

    // Redireciona conforme o tipo
    if (achou.tipo === 'aluno') {
      window.location.href = '/Sanquim/src/pages/alunos/homeAlunos.php';
    } else if (achou.tipo === 'professor') {
      window.location.href = '/Sanquim/src/pages/professores/homeProfessores.php';
    } else if (achou.tipo === 'secretaria') {
      window.location.href = '/Sanquim/src/pages/secretaria/homeSecretaria.php';
    }

    return false; // impede o envio real
  }
</script>

</body>

</html>
