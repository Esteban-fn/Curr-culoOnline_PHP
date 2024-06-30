window.onload = function () {
    const { jsPDF } = window.jspdf;

    document.getElementById("botao").addEventListener("click", function (event) {
        event.preventDefault();

        const nome = document.getElementById("nome_completo").value;
        const dataNascimento = document.getElementById("data_nascimento").value;
        const genero = document.querySelector('input[name="genero"]:checked').value;
        const email = document.getElementById("email").value;
        const contato = document.getElementById("contato").value;
        const experiencia = document.getElementById("experiencia_p").value;
        const habilidade = document.getElementById("habilidade").value;
        const formacao = document.getElementById("formação_academica").value;
        const sobre = document.getElementById("sobre_eu").value;

        const doc = new jsPDF();

        doc.text("Currículo", 10, 10);
        doc.text(`Nome Completo: ${nome}`, 10, 20);
        doc.text(`Data de Nascimento: ${dataNascimento}`, 10, 30);
        doc.text(`Gênero: ${genero}`, 10, 40);
        doc.text(`E-mail: ${email}`, 10, 50);
        doc.text(`Contato: ${contato}`, 10, 60);
        doc.text(`Experiências Profissionais: ${experiencia}`, 10, 70);
        doc.text(`Habilidades: ${habilidade}`, 10, 80);
        doc.text(`Formação Acadêmica: ${formacao}`, 10, 90);
        doc.text(`Sobre Você: ${sobre}`, 10, 100);

        const pdfBlob = doc.output('blob');
        const url = URL.createObjectURL(pdfBlob);
        window.open(url);
    });
}; 
