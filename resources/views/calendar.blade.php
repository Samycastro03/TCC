<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Semanal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos básicos para o calendário */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        /* Navbar */
        .navbar {
            background-color: #F2D8E1; 
        }
        .navbar .nav-link {
            color: white;
        }
        .btn-custom {
            margin: 5px;
            background-color: #ffffff; 
            color: black; 
        }
        .btn-custom:hover {
            background-color: #ff1493; 
        }
        .logo {
            height: 50px; 
        }
        .navbar-brand img {
            width: 120px; /* Tamanho personalizado */
        }

        .calendar-container {
            width: 100%;
            margin: 20px auto;
            padding: 10px;
        }

        table {
            width: 99%;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #C9C5EC;
        }

        td {
            min-height: 100px;
            vertical-align: top;
            position: relative;
            font-size: 20px;
        }

        .today {
            border-radius: 50%;
            background-color: #000;
            color: white;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            display: inline-block;
        }

        .event {
            display: block;
            margin: 5px 0;
            padding: 10px;
            color: black; 
            border-radius: 5px;
            cursor: pointer;
            position: relative;
        }

        #eventModal, #editModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #C9C5EC;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .add-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            font-size: 30px;
            text-align: center;
            line-height: 60px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .add-button:hover {
            background-color: #333;
        }

        .events-list {
            margin-top: 20px;
        }

        .event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            color: #fff;
        }

        .event-color {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .action-button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 18px;
            margin-left: 10px;
        }

        .complete-button {
            color: green;
        }

        .edit-button {
            color: blue;
        }

        .calendar-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .event-pastel {
            background-color: #ffcccb; 
        }

        .nav-button, .nav-button2 {
            margin: 10px;
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #fff;
        }
        
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Usando 'mx-auto' para centralizar os itens -->
            <li class="nav-item">
                <a href="inicial.blade.php" class="nav-link"><i class="fas fa-home"></i> Início</a>
            </li>
            <li class="nav-item">
                <a href="calendar.blade.php" class="nav-link"><i class="fas fa-calendar"></i> Calendário</a>
            </li>
            <li class="nav-item">
                <a href="sobre.blade.php" class="nav-link"><i class="fas fa-info-circle"></i> Sobre</a>
            </li></ul>
            <ul class="navbar-nav ">
            <li class="nav-item">
                <a href="entrar.blade.php" class="btn btn-custom"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            <li class="nav-item">
                <a href="cadastro.blade.php" class="btn btn-custom"><i class="fas fa-user-plus"></i> Cadastrar</a>
            </li>
            </ul>
    </div>
</nav>
<br><br>
<div class="calendar-container">
    <div class="calendar-header" id="calendarHeader"></div>
    <table>
        <thead>
            <tr>
                <th>Domingo</th>
                <th>Segunda</th>
                <th>Terça</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
                <th>Sábado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="domingo"></td>
                <td id="segunda"></td>
                <td id="terca"></td>
                <td id="quarta"></td>
                <td id="quinta"></td>
                <td id="sexta"></td>
                <td id="sabado"></td>
            </tr>
        </tbody>
    </table>
    <div>
        <button class="nav-button" onclick="changeWeek(-1)">←</button>
        <button class="nav-button2" onclick="changeWeek(1)"> →</button>
        <button class="nav-button" onclick="goToToday()">Hoje</button>
    </div>

    <!-- Botão de adicionar evento -->
    <div class="add-button" onclick="openAddModal()">+</div>
    
    <!-- Modal para adicionar evento -->
    <div id="eventModal">
        <h3>Adicionar Tarefa</h3>
        <label for="titulo">Título: </label>
        <input type="text" id="titulo"><br><br>
        <label for="data">Data: </label>
        <input type="date" id="data"><br><br>
        <label for="autor">Autor: </label>
        <input type="text" id="autor"><br><br>
        <label for="horario">Horário: </label>
        <input type="time" id="horario"><br><br>
        <label for="Obs">Obs: </label>
        <input type="text" id="obs"><br><br>
        <label for="cor">Cor: </label>
        <input type="color" id="cor"><br><br>
        <button onclick="saveEvent()">Salvar</button>
        <button onclick="closeModal()">Cancelar</button> 
    </div>

    <!-- Modal para editar evento -->
    <div id="editModal">
        <h3>Editar Tarefa</h3>
        <label for="editTitulo">Título: </label>
        <input type="text" id="editTitulo"><br><br>
        <label for="editData">Data: </label>
        <input type="date" id="editData"><br><br>
        <label for="editAutor">Autor: </label>
        <input type="text" id="editAutor"><br><br>
        <label for="editHorario">Horário: </label>
        <input type="time" id="editHorario"><br><br>
        <label for="editObs">Obs: </label>
        <input type="text" id="editObs"><br><br>
        <label for="editCor">Cor: </label>
        <input type="color" id="editCor"><br><br>
        <button onclick="updateEvent()">Salvar</button>
        <button onclick="closeEditModal()">Cancelar</button> 
    </div>

    <!-- Seção de eventos -->
    <div class="events-list" id="eventsList">
        <h3>Tarefas</h3>
        <div id="eventsContainer"></div>
    </div>
</div>

<script>
    let currentWeekStartDate = new Date();
    let currentEventIndex = null;

    function openAddModal() {
        document.getElementById('eventModal').style.display = 'block';
    }

    function openEditModal(eventIndex, titulo, autor, horario, obs, data, cor) {
        currentEventIndex = eventIndex;
        document.getElementById('editTitulo').value = titulo;
        document.getElementById('editAutor').value = autor;
        document.getElementById('editHorario').value = horario;
        document.getElementById('editObs').value = obs;
        document.getElementById('editData').value = data;
        document.getElementById('editCor').value = cor;
        document.getElementById('editModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('eventModal').style.display = 'none';
    }

    function closeEditModal() {
        document.getElementById('editModal').style.display = 'none';
    }

    function getToday() {
        const today = new Date();
        return today;
    }

    function getStartOfWeek(date) {
        const dayOfWeek = date.getDay();
        const startOfWeek = new Date(date);
        startOfWeek.setDate(date.getDate() - dayOfWeek);
        return startOfWeek;
    }

    function fillCalendar() {
        const startOfWeek = getStartOfWeek(currentWeekStartDate);
        const daysOfWeek = ["domingo", "segunda", "terca", "quarta", "quinta", "sexta", "sabado"];

        const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        const calendarHeader = document.getElementById('calendarHeader');
        const month = monthNames[startOfWeek.getMonth()];
        const year = startOfWeek.getFullYear();
        calendarHeader.innerText = `${month} ${year}`;

        for (let i = 0; i < 7; i++) {
            const currentDate = new Date(startOfWeek);
            currentDate.setDate(startOfWeek.getDate() + i);
            const dayId = daysOfWeek[i];
            const cell = document.getElementById(dayId);
            cell.innerHTML = '';

            if (getToday().toDateString() === currentDate.toDateString()) {
                cell.innerHTML = `<span class="today">${currentDate.getDate()}</span>`;
            } else {
                cell.innerHTML = `<span>${currentDate.getDate()}</span>`;
            }
        }
    }

    function saveEvent() {
        const titulo = document.getElementById('titulo').value;
        const data = document.getElementById('data').value;
        const cor = document.getElementById('cor').value;
        if (!titulo || !data) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        const eventItem = document.createElement('div');
        eventItem.classList.add('event', 'event-pastel');
        eventItem.style.backgroundColor = cor;

        const eventDetails = document.createElement('span');
        eventDetails.innerText = titulo;

        const completeButton = document.createElement('button');
        completeButton.innerHTML = '✔️'; 
        completeButton.classList.add('action-button', 'complete-button');
        completeButton.onclick = function() {
            eventItem.style.textDecoration = "line-through"; 
        };

        const editButton = document.createElement('button');
        editButton.innerHTML = '✏️'; 
        editButton.classList.add('action-button', 'edit-button');
        editButton.onclick = function() {
            openEditModal(eventsContainer.children.length, titulo, data, cor);
        };

        eventItem.appendChild(eventDetails);
        eventItem.appendChild(completeButton);
        eventItem.appendChild(editButton);
        document.getElementById('eventsContainer').appendChild(eventItem);

        document.getElementById('titulo').value = '';
        document.getElementById('data').value = '';
        document.getElementById('autor').value = '';
        document.getElementById('horario').value = '';
        document.getElementById('obs').value = '';
        document.getElementById('cor').value = '#ffffff';
        closeModal();
    }

    function updateEvent() {
        const newTitle = document.getElementById('editTitulo').value;
        const newData = document.getElementById('editData').value;
        const newAutor = document.getElementById('editAutor').value;
        const newHorario = document.getElementById('editHorario').value;
        const newObs = document.getElementById('editObs').value;
        const newColor = document.getElementById('editCor').value;

        if (!newTitle || !newData || !newAutor || !newHorario) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        const eventItem = document.getElementById('eventsContainer').children[currentEventIndex];
        eventItem.firstChild.innerText = newTitle;
        eventItem.style.backgroundColor = newColor;
        closeEditModal();
    }

    function changeWeek(direction) {
        const daysToAdd = direction * 7;
        currentWeekStartDate.setDate(currentWeekStartDate.getDate() + daysToAdd);
        fillCalendar();
    }

    function goToToday() {
        currentWeekStartDate = new Date();
        fillCalendar();
    }

    fillCalendar();
</script>

</body>
</html>
