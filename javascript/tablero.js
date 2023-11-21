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
