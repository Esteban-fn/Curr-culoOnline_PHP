<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        p, span {
            color: #555;
            line-height: 1.6;
        }
        .field {
            margin-bottom: 10px;
        }
        .field label {
            font-weight: bold;
        }
        .field span {
            display: block;
            margin-top: 5px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CURRÍCULO</h1>
        <div class="field">
            <label>Nome Completo:</label>
            <span><?php echo htmlspecialchars($_POST['nome_completo']); ?></span>
        </div>
        <div class="field">
            <label>Data de Nascimento:</label>
            <span><?php echo htmlspecialchars($_POST['data_nascimento']); ?></span>
        </div>
        <div class="field">
            <label>Gênero:</label>
            <span><?php echo htmlspecialchars($_POST['genero']); ?></span>
        </div>
        <div class="field">
            <label>E-mail:</label>
            <span><?php echo htmlspecialchars($_POST['email']); ?></span>
        </div>
        <div class="field">
            <label>Contato:</label>
            <span><?php echo htmlspecialchars($_POST['contato']); ?></span>
        </div>
        <div class="field">
            <label>Experiências Profissionais:</label>
            <span><?php echo htmlspecialchars($_POST['experiencia_p']); ?></span>
        </div>
        <div class="field">
            <label>Habilidades:</label>
            <span><?php echo htmlspecialchars($_POST['habilidade']); ?></span>
        </div>
        <div class="field">
            <label>Formação Acadêmica:</label>
            <span><?php echo htmlspecialchars($_POST['formacao_academica']); ?></span>
        </div>
        <div class="field">
            <label>Sobre Você:</label>
            <span><?php echo htmlspecialchars($_POST['sobre_eu']); ?></span>
        </div>
        <div class="button-container">
            <button onclick="window.print()">Gerar Novo Formulário</button>
        </div>
    </div>
</body>
</html>