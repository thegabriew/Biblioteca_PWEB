<?php

require_once 'processa_livro.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de livro</title>
  <style>
    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-color: #f1f7fe;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-box {
      max-width: 300px;
      background: #f1f7fe;
      overflow: hidden;
      border-radius: 16px;
      color: #010101;
    }

    .form {
      display: flex;
      flex-direction: column;
      padding: 32px 24px 24px;
      gap: 16px;
      text-align: center;
    }

    .title {
      font-weight: bold;
      font-size: 1.6rem;
    }

    .subtitle {
      font-size: 1rem;
      color: #666;
    }

    .form-container {
      overflow: hidden;
      border-radius: 8px;
      background-color: #fff;
      margin-bottom: 1rem;
    }

    .input {
      background: none;
      border: 0;
      outline: 0;
      height: 40px;
      width: 100%;
      border-bottom: 1px solid #eee;
      font-size: .9rem;
      padding: 8px 15px;
    }

    .form-section {
      padding: 16px;
      font-size: .85rem;
      background-color: #e0ecfb;
      box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.1);
    }

    .form-section a {
      font-weight: bold;
      color: #0066ff;
      transition: color .3s ease;
    }

    .form-section a:hover {
      color: #005ce6;
      text-decoration: underline;
    }

    .form button {
      background-color: #0066ff;
      color: #fff;
      border: 0;
      border-radius: 24px;
      padding: 10px 16px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color .3s ease;
    }

    .form button:hover {
      background-color: #005ce6;
    }
  </style>

</head>
<body>
  <div class="form-box">
    <div class="form">
      <h1 class="title">Cadastro de livros</h1>

      <?php if (isset($mensagem)) : ?>
        
            <div class="mensagem"><?php echo $mensagem; ?></div>
        <?php endif; ?>

      <form method="POST" action="">

        <div class="form-container">
          
          <label for="titulo" class="subtitle">Título:</label>
          <input type="text" id="titulo" name="titulo" class="input" required>
        </div>

        <div class="form-container">
          <label for="autor" class="subtitle">Autor:</label>
          <input type="text" id="autor" name="autor" class="input" required>
        </div>

        <div class="form-container">
          <label for="ano" class="subtitle">Ano:</label>
          <input type="text" id="ano" name="ano" class="input" required>
        </div>

        <button type="submit">Cadastrar</button>
      </form>

    <?php if ($livro_recuperado) : ?>

      <div class = "livro-detalhes">

        <h2>Livro cadastrado:</h2>
        <p><strong> Título: </strong> <?php echo $livro_recuperado->getTitulo(); ?></p>
        <p><strong> Autor: </strong> <?php echo $livro_recuperado->getAutor(); ?></p>
        <p><strong> Ano: </strong> <?php echo $livro_recuperado->getAno(); ?></p>
      </div>

    <?php endif; ?>
  </div>
</body>
</html>
