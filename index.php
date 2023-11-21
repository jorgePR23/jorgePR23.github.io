<!DOCTYPE html>
<html>
<head>
  <title>Aplicación de Inicio de Sesión</title>
  <link rel="stylesheet" href="/css/stilo-inicio.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <form action="cerrar_sesion.php">
    
    <div class="sidebar">
    <li class="cerrar">
          <input type="submit" value="Cerrar"/>
        </li>
      <ul>
        <li class="dropdown">
          Control de Gestión
          <div class="dropdown-content">
            <a href="#" onclick="loadDashboard('cultura-vendedora')">Cultura vendedora</a>
            <a href="#" onclick="loadDashboard('ficha-tecnica')">Ficha técnica</a>
            <a href="#" onclick="loadDashboard('recorrido-valor')">Recorrido de Valor</a>
            <a href="#" onclick="loadDashboard('equipo')">Equipo</a>
          </div>
        </li>
        <li class="dropdown">
          Productividad
          <div class="dropdown-content">
            <a href="#" onclick="loadDashboard('6-curvas')">6 Curvas</a>
            <a href="#" onclick="loadDashboard('mercaderistas')">Mercaderístas</a>
            <a href="#" onclick="loadDashboard('equipo')">Equipo</a>
          </div>
        </li>
        <li class="dropdown">
          Procesos
          <div class="dropdown-content">
            <a href="#" onclick="loadDashboard('pruebas')">Pruebas</a>
            <a href="#" onclick="loadDashboard('equipo')">Equipo</a>
          </div>
        </li>

        
      </ul>
    </div>

  <div class="dashboard">
      <h2 class="dashboard-title">Bienvenido al Dashboard</h2>
      <h3 id="subtitle"></h3>
      <div id="dashboard-content"></div>
  </div>

  <div class="team-container" style="display: none;">
    <div class="team-member">
      <img src="https://i.pinimg.com/736x/36/a2/e2/36a2e242bfe3ac039e0618fbaaef7596.jpg" alt="Victor Quiñones">
      <p>Prueba de Nombre</p>
      <p>Prueba de Puesto</p>
    </div>
    <!-- Agrega más miembros del equipo aquí -->
  </div>
</form>
  <script>
    function login() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      if (username === 'Prueba' && password === '12345') {
        document.querySelector('.login-container').style.display = 'none';
        document.querySelector('.dashboard-container').style.display = 'flex';
      } else {
        alert('Usuario o contraseña incorrectos');
      }
    }

    function loadDashboard(dashboard) {
      var subtitleElement = document.getElementById('subtitle');
      var dashboardContent = document.getElementById('dashboard-content');
      var teamContainer = document.querySelector('.team-container');

      if (dashboard === 'cultura-vendedora') {
        subtitleElement.textContent = 'Cultura vendedora';
        dashboardContent.innerHTML = '';
        teamContainer.style.display = 'none';
      } else if (dashboard === 'ficha-tecnica') {
        subtitleElement.textContent= 'Ficha técnica';
        dashboardContent.innerHTML = '<iframe title="FIcha Tecnica 2023-2" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=ef49feac-1f23-408b-90b1-7160bdbf8848&autoAuth=true&ctid=5daabe65-ff53-4336-a448-2f61ecf0b059" frameborder="0" allowFullScreen="true"></iframe>';
        teamContainer.style.display = 'none';
      } else if (dashboard === 'recorrido-valor') {
        subtitleElement.textContent = 'Recorrido de Valor';
        dashboardContent.innerHTML = '<div class="responsive-iframe-container"><iframe title="Recorrido de Valor" src="https://app.powerbi.com/view?r=eyJrIjoiNTExNGIxMGYtYTZjMi00NTkxLWFhZGQtMDUzZGU0MmQ0NzQ5IiwidCI6IjVkYWFiZTY1LWZmNTMtNDMzNi1hNDQ4LTJmNjFlY2YwYjA1OSIsImMiOjR9" allowfullscreen></iframe></div>';
        teamContainer.style.display = 'none';
      } else if (dashboard === '6-curvas') {
        subtitleElement.textContent = '6 Curvas';
        dashboardContent.innerHTML = '';
        teamContainer.style.display = 'none';
      } else if (dashboard === 'mercaderistas') {
        subtitleElement.textContent = 'Mercaderístas';
        dashboardContent.innerHTML = '';
        teamContainer.style.display = 'none';
      } else if (dashboard === 'pruebas') {
        subtitleElement.textContent = 'Pruebas';
        dashboardContent.innerHTML = '';
        teamContainer.style.display = 'none';
      } else if (dashboard === 'equipo') {
        subtitleElement.textContent = 'Equipo';
        dashboardContent.innerHTML = '';
        teamContainer.style.display = 'flex';
      }
    }
  </script>
</body>
</html>