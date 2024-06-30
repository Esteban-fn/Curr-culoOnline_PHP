<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Currículo</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Dados do Currículo Recebidos</h1>
        </div>
    </header>

    <div class="container">
        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém os dados do formulário
            $nome_completo = $_POST['nome_completo'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];
            $email = $_POST['email'];
            $contato = $_POST['contato'];
            $experiencia_p = $_POST['experiencia_p'];
            $habilidade = $_POST['habilidade'];
            $formacao_academica = $_POST['formacao_academica'];
            $sobre_eu = $_POST['sobre_eu'];

            // Exibe os dados recebidos
            echo "<h2>Nome Completo: $nome_completo</h2>";
            echo "<p>Idade: $data_nascimento</p>";
            echo "<p>Gênero: $genero</p>";
            echo "<p>E-mail: $email</p>";
            echo "<p>Contato: $contato</p>";
            echo "<p>Experiências Profissionais: $experiencia_p</p>";
            echo "<p>Habilidades: $habilidade</p>";
            echo "<p>Formação Acadêmica: $formacao_academica</p>";
            echo "<p>Sobre Você: $sobre_eu</p>";
        }
        ?>
    </div>
</body>
</html>







