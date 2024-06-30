<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de Dados</title>
    <link rel="stylesheet" href="style/style2.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    
</head>
<body>
    <header>
        <div class="container2"></div>
        <form id="form2" name="form2" action="handle_form.php" method="post" enctype="multipart/form-data">
            <div class="tela">
                <h1>Preencha todos os campos abaixo para a criação do Currículo</h1>
                <section>
                    <h2>Nome Completo:</h2>
                    <input type="text" id="nome_completo" name="nome_completo">
                </section>
                <main class="dois">
                    <section>
                        <h2>Idade:</h2>
                        <input type="text" id="data_nascimento" class="date" name="data_nascimento">
                    </section>
                    <section class="genero_section">
                        <h2>Gênero:</h2>
                        <div class="genero2">
                            <label><input class="hospital" type="radio" name="genero" value="feminino"> </label> Feminino 
                            <label><input type="radio" name="genero" value="masculino"> </label>Masculino
                        </div>
                    </section>
                </main>
                <section>
                    <h2>E-mail:</h2>
                    <input type="email" id="email" name="email">
                </section>
                <section>
                    <h2>Contato:</h2>
                    <input type="tel" id="contato" name="contato">
                </section>
                <section>
                    <h2>Experiências profissionais:</h2>
                    <input type="text" id="experiencia_p" name="experiencia_p">
                </section>
                <section>
                    <h2>Habilidades:</h2>
                    <input type="text" id="habilidade" name="habilidade">
                </section>
                <section>
                    <h2>Formação acadêmica:</h2>
                    <input type="text" id="formacao_academica" name="formacao_academica">
                </section>
                <section>
                    <h2>Fale sobre você:</h2>
                    <input type="text" id="sobre_eu" name="sobre_eu">
                </section>
                <br><br>
                <section>
                    <button id="botao" class="botao-enter" type="submit">Enviar</button>
                </section>
            </div>
        </form>
    </header>
    <script type="text/javascript" src="C:\xampp\htdocs\Gerador\scriptteste.js" defer></script>
</body>
</html>