# Gerador de Currículo

Este projeto é um gerador de currículo online que permite aos usuários preencher seus dados pessoais e profissionais em um formulário e, em seguida, gerar um currículo formatado em PDF.

## Estrutura do Projeto

### 1. `index.html`

Este arquivo é a página inicial do projeto, que apresenta uma introdução ao gerador de currículo.

- **Cabeçalho (`header`)**: Contém o título do site "Gerador de Currículo" e um botão "Criar Currículo".
- **Botão "Criar Currículo"**: Redireciona o usuário para a página de preenchimento de dados (`form.html`).
- **Script**: Inclui `script1.js` para funcionalidade adicional.

### 2. `form.html`

Este arquivo contém o formulário que o usuário deve preencher para criar seu currículo.

- **Formulário (`form`)**: Coleta informações como nome completo, data de nascimento, gênero, e-mail, contato, experiências profissionais, habilidades, formação acadêmica e uma breve descrição sobre o usuário.
- **Botão "Enviar"**: Submete o formulário para o processamento dos dados e criação do currículo em PDF.
- **Scripts**: Inclui `jspdf` para gerar o PDF e `script2.js` para funcionalidades adicionais.

### 3. `style1.css` e `style2.css`

Estes arquivos contêm as folhas de estilo CSS para `index.html` e `form.html`, respectivamente, definindo a aparência do site.

### 4. `script1.js` e `script2.js`

Estes arquivos JavaScript adicionam funcionalidade ao projeto.

- **`script1.js`**: Adiciona interatividade à página inicial (`index.html`).
- **`script2.js`**: Lida com a validação do formulário e a criação do currículo em PDF usando a biblioteca `jspdf`.

### 5. `handle_form.php`

Este arquivo (presumido pelo atributo `action` do formulário) seria o responsável por processar os dados do formulário após o envio. Ele pode incluir lógica para armazenar os dados, enviar e-mails ou outras ações necessárias.

## Como Executar o Projeto

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/usuario/gerador-de-curriculo.git

   ## Funcionalidades

- Preenchimento de dados pessoais como nome completo, data de nascimento, gênero, e-mail, e informações de contato.
- Inclusão de experiências profissionais, habilidades, formação acadêmica e uma seção "Sobre Você".
- Geração automática de um currículo em formato PDF baseado nos dados inseridos.

## Tecnologias Utilizadas

- JavaScript para a lógica do formulário e geração do PDF utilizando jsPDF.
- PHP para processamento dos dados do formulário e exibição dos resultados.

## Como Utilizar

1. Clone o repositório para sua máquina local.
2. Abra o arquivo `index.html` em seu navegador.
3. Preencha todos os campos obrigatórios no formulário.
4. Clique no botão "Gerar Currículo".
5. Um arquivo PDF será gerado automaticamente com as informações fornecidas.

# README - Processamento de Formulário em PHP

Este arquivo PHP processa dados de um formulário HTML quando submetido via método POST.

## Funcionamento do Código

1. **Verificação do Método de Requisição:**
   - O código verifica se o método de requisição usado é POST. Isso geralmente ocorre quando o formulário é submetido.

   ```php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Processamento dos dados do formulário aqui
   }

   


  Processamento dos Dados Recebidos:

Após verificar que o formulário foi submetido via POST, o código PHP recupera os dados do formulário usando $_POST.
php
Copiar código
$nome_completo = $_POST["nome_completo"];
$data_nascimento = $_POST["data_nascimento"];
$genero = $_POST["genero"];
$email = $_POST["email"];
$contato = $_POST["contato"];
$experiencia_p = $_POST["experiencia_p"];
$habilidade = $_POST["habilidade"];
$formacao_academica = $_POST["formacao_academica"];
$sobre_eu = $_POST["sobre_eu"];
Exibição dos Dados Recebidos:

Em seguida, os dados recebidos são exibidos na página ou em qualquer outro formato desejado. Neste exemplo, os dados são simplesmente exibidos usando tags HTML.
php
Copiar código
echo "<h2>Dados Recebidos do Formulário:</h2>";
echo "<p>Nome Completo: $nome_completo</p>";
echo "<p>Data de Nascimento: $data_nascimento</p>";
echo "<p>Gênero: $genero</p>";
echo "<p>E-mail: $email</p>";
echo "<p>Contato: $contato</p>";
echo "<p>Experiências Profissionais: $experiencia_p</p>";
echo "<p>Habilidades: $habilidade</p>";
echo "<p>Formação Acadêmica: $formacao_academica</p>";
echo "<p>Sobre Você: $sobre_eu</p>";
Armazenamento ou Processamento Adicional:

Este exemplo apenas exibe os dados. Para salvar em um banco de dados ou enviar por e-mail, você pode adicionar o código apropriado após exibir os dados.
php
Copiar código
// Aqui você pode adicionar o código para salvar os dados em um banco de dados, enviar por e-mail, etc.
Considerações Adicionais
Certifique-se de validar e filtrar os dados recebidos para evitar problemas de segurança, como injeção de SQL ou XSS.
Personalize o processamento de acordo com suas necessidades específicas, como salvar em um banco de dados ou enviar notificações por e-mail.
Este código é um exemplo básico e pode ser expandido para incluir validações mais robustas e tratamento de erros.
javascript
Copiar código

Esse `README.md` fornece uma explicação clara e concisa do código PHP e sugere maneiras de melhorar e expandir o funcionamento para diferentes cenários de uso.

Tela de início
![Tela de início](img/Imagem1.png)
<br>
<br>
Tela do gerador 
![Tela do gerador](img/Imagem2.png)# Curr-culoOnline_PHP
