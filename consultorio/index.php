<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Médico</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Agende sua Consulta</h1>
        <p>Escolha seu médico e marque sua consulta rapidamente</p>
    </header>

    <main>
        <!-- Grid de médicos -->
        <section class="medicos-grid">
            <div class="medico-card" onclick="abrirModal('Dr. Joberto', 'Ortopedia', 'Dr. Joberto é especialista em coluna e ortopedia.')">
                <h3>Dr. Joberto</h3>
                <p>Ortopedia</p>
            </div>
            <div class="medico-card" onclick="abrirModal('Dra. Ana', 'Cardiologia', 'Dra. Ana é especialista em cardiologia.')">
                <h3>Dra. Ana</h3>
                <p>Cardiologia</p>
            </div>
            <div class="medico-card" onclick="abrirModal('Dr. Carlos', 'Dermatologia', 'Dr. Carlos é especialista em dermatologia.')">
                <h3>Dr. Carlos</h3>
                <p>Dermatologia</p>
            </div>
            <div class="medico-card" onclick="abrirModal('Dra. Beatriz', 'Pediatria', 'Dra. Beatriz é especialista em pediatria.')">
                <h3>Dra. Beatriz</h3>
                <p>Pediatria</p>
            </div>
            <div class="medico-card" onclick="abrirModal('Dr. Rafael', 'Neurologia', 'Dr. Rafael é especialista em neurologia.')">
                <h3>Dr. Rafael</h3>
                <p>Neurologia</p>
            </div>
            <div class="medico-card" onclick="abrirModal('Dra. Camila', 'Ginecologia', 'Dra. Camila é especialista em ginecologia.')">
                <h3>Dra. Camila</h3>
                <p>Ginecologia</p>
            </div>
        </section>
    </main>

    <!-- Modal de agendamento -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <h2 id="modal-nome">Médico</h2>
            <p id="modal-especialidade">Especialidade</p>
            <form id="modal-form">
                <input type="text" id="paciente" placeholder="Seu nome" required>
                <input type="date" id="data" required>
                <input type="time" id="hora" required>
                <button type="submit">Agendar Consulta</button>
            </form>
            <p id="mensagem-sucesso" class="sucesso">Consulta agendada com sucesso!</p>
        </div>
    </div>

    <script>
        let medicoSelecionado = "";

        function abrirModal(nome, especialidade, descricao) {
            medicoSelecionado = nome;
            document.getElementById('modal-nome').textContent = nome;
            document.getElementById('modal-especialidade').textContent = descricao;
            document.getElementById('mensagem-sucesso').style.display = 'none';
            document.getElementById('modal').style.display = 'flex';
        }

        function fecharModal() {
            document.getElementById('modal').style.display = 'none';
            document.getElementById('modal-form').reset();
        }

        document.getElementById('modal-form').addEventListener('submit', function(e){
            e.preventDefault();
            const paciente = document.getElementById('paciente').value;
            const data = document.getElementById('data').value;
            const hora = document.getElementById('hora').value;

            const mensagem = document.getElementById('mensagem-sucesso');
            mensagem.style.display = 'block';
            mensagem.textContent = `Consulta agendada!\nMédico: ${medicoSelecionado}\nPaciente: ${paciente}\nData: ${data}\nHora: ${hora}`;

            this.reset();
        });

        window.onclick = function(e) {
            if(e.target == document.getElementById('modal')){
                fecharModal();
            }
        }
    </script>
</body>
</html>
