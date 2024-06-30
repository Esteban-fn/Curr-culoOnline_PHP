<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de Dados</title>
    <link rel="stylesheet" href="style/style2.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script type="text/javascript" src="script/scripttest.js" defer></script>
</head>
<body>
    <header>
        <div class="container2"></div>
        <form id="form2" name="form2" action="handle_form.php" method="post" enctype="multipart/form-data">
            <div class="tela">
                <h1>Preencha todos os campos abaixo para a criação do Currículo</h1>
                <section>
                    <h2>Nome Completo:</h2>
                    <input type="text" id="nome_completo" name="nome_completo" required>
                </section>
                <main class="dois">
                    <section>
                        <h2>Idade:</h2>
                        <input type="text" id="data_nascimento" class="date" name="data_nascimento" required>
                    </section>
                    <section class="genero_section">
                        <h2>Gênero:</h2>
                        <div class="genero2">
                            <label><input class="hospital" type="radio" name="genero" value="feminino" required> Feminino </label>
                            <label><input type="radio" name="genero" value="masculino" required> Masculino</label>
                        </div>
                    </section>
                </main>
                <section>
                    <h2>E-mail:</h2>
                    <input type="email" id="email" name="email" required>
                </section>
                <section>
                    <h2>Contato:</h2>
                    <input type="tel" id="contato" name="contato" required>
                </section>
                <section>
                    <h2>Experiências profissionais:</h2>
                    <input type="text" id="experiencia_p" name="experiencia_p" required>
                </section>
                <section>
                    <h2>Habilidades:</h2>
                    <input type="text" id="habilidade" name="habilidade" required>
                </section>
                <section>
                    <h2>Formação acadêmica:</h2>
                    <input type="text" id="formacao_academica" name="formacao_academica" required>
                </section>
                <section>
                    <h2>Fale sobre você:</h2>
                    <input type="text" id="sobre_eu" name="sobre_eu" required>
                </section>
                <br><br>
                <section>
                    <button id="botao" class="botao-enter" type="submit">Enviar</button>
                </section>
            </div>
        </form>
    </header>
</body>
</html>
