<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aluno | Notas</title>
  <link rel="stylesheet" href="../../styles/Malunos.css">
  <link rel="stylesheet" href="../../styles/faltasAlunos.css">
  <script src="https://kit.fontawesome.com/b2800b7110.js" crossorigin="anonymous" defer></script>
  <style>
    .nota-item {
      display: flex;
      justify-content: space-between;
    }
    .nota-valor {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php include '../../Headers/Malunos.html'; ?>

  <main>
    <div class="container_faltas">
        <h3>Programação Web</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Atividade 1):</span> <span class="nota-valor">8.5</span></li>
            <li class="nota-item"><span>AT2 (Atividade 2):</span> <span class="nota-valor">9.0</span></li>
            <li class="nota-item"><span>P1 (Prova 1):</span> <span class="nota-valor">7.8</span></li>
            <li class="nota-item"><span>P2 (Prova 2):</span> <span class="nota-valor">8.2</span></li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Engenharia de Software</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Exercícios):</span> <span class="nota-valor">9.0</span></li>
            <li class="nota-item"><span>AT2 (Caso Prático):</span> <span class="nota-valor">8.5</span></li>
            <li class="nota-item"><span>P1 (Prova Teórica):</span> <span class="nota-valor">8.0</span></li>
            <li class="nota-item"><span>P2 (Prova Prática):</span> <span class="nota-valor">8.7</span></li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Análise de requisitos</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Exercícios):</span> <span class="nota-valor">9.5</span></li>
            <li class="nota-item"><span>AT2 (Relatório):</span> <span class="nota-valor">9.2</span></li>
            <li class="nota-item"><span>P1 (Prova 1):</span> <span class="nota-valor">8.8</span></li>
            <li class="nota-item"><span>P2 (Prova 2):</span> <span class="nota-valor">9.0</span></li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Banco de Dados</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Modelagem):</span> <span class="nota-valor">9.2</span></li>
            <li class="nota-item"><span>AT2 (Consultas SQL):</span> <span class="nota-valor">9.7</span></li>
            <li class="nota-item"><span>P1 (Prova Teórica):</span> <span class="nota-valor">8.5</span></li>
            <li class="nota-item"><span>P2 (Prova Prática):</span> <span class="nota-valor">9.0</span></li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Redes de Computadores</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Protocolos):</span> <span class="nota-valor">8.0</span></li>
            <li class="nota-item"><span>AT2 (Configurações):</span> <span class="nota-valor">8.5</span></li>
            <li class="nota-item"><span>P1 (Prova 1):</span> <span class="nota-valor">7.5</span></li>
            <li class="nota-item"><span>P2 (Prova 2):</span> <span class="nota-valor">8.0</span></li>
        </ul>
    </div>

    <div class="container_faltas">
        <h3>Matemática</h3>
        <br>
        <ul>
            <li class="nota-item"><span>AT1 (Exercícios):</span> <span class="nota-valor">8.8</span></li>
            <li class="nota-item"><span>AT2 (Problemas):</span> <span class="nota-valor">9.2</span></li>
            <li class="nota-item"><span>P1 (Prova 1):</span> <span class="nota-valor">8.5</span></li>
            <li class="nota-item"><span>P2 (Prova 2):</span> <span class="nota-valor">9.0</span></li>
        </ul>
    </div>
  </main>

</body>
</html>