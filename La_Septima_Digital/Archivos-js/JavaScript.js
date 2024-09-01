var apiTimeUrl = "http://worldtimeapi.org/api/timezone/America/Argentina/San_Juan"

async function updateTime() {
    try {
        const response = await fetch(apiTimeUrl);
        const data = await response.json();
        const dateTime = new Date(data.datetime); // La hora ya está en la zona horaria local
        const hours = dateTime.getHours().toString().padStart(2, '0'); // Usa getHours() para la hora local
        const minutes = dateTime.getMinutes().toString().padStart(2, '0'); // Usa getMinutes() para los minutos
        const timeString = `${hours}:${minutes}`;
        document.getElementById('time').textContent = timeString;
    } catch (error) {
        console.error('Error al obtener la hora:', error);
        document.getElementById('time').textContent = 'Error al cargar la hora';
    }
}

// Actualiza la hora cada minuto (60000 ms)
setInterval(updateTime, 60000);
updateTime(); // Muestra la hora inmediatamente al cargar la página



function getWeather() {
  var latitude = -31.549722;
  var longitude = -68.533056;
  var url = `https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&current_weather=true`;

  fetch(url)
      .then(response => response.json())
      .then(data => {
          var temp = data.current_weather.temperature;
          var weatherInfo = getWeatherDescription(data.current_weather.weathercode);
          var weatherDescription = weatherInfo.text;
          var icon = weatherInfo.icon ? `<img src="${weatherInfo.icon}" alt="${weatherDescription}" class="weather-icon">` : '';
          
          document.getElementById('weather').innerHTML = `
              <div class="weather-container">
                  <div class="weather-icon-container">${icon}</div>
                  <div class="weather-info">${temp}°C<br>${weatherDescription}</div>
              </div>`;
      })
      .catch(error => console.log('Error:', error));
}

function getWeatherDescription(code) {
  const descriptions = {
      0: { text: 'Despejado', icon: './Iconos-Clima/sun.png'},
      1: { text: 'Principalmente despejado', icon: './Iconos-Clima/sun.png' },
      2: { text: 'Parcialmente nublado', icon: './Iconos-Clima/sun.png' }, 
      3: { text: 'Nublado', icon: './Iconos-Clima/sun.png' },
      45: { text: 'Niebla', icon: './Iconos-Clima/sun.png' },
      48: { text: 'Niebla con escarcha', icon: '' },
      51: { text: 'Llovizna ligera', icon: './Iconos-Clima/cloud-showers.png' },
      53: { text: 'Llovizna moderada', icon: './Iconos-Clima/cloud-showers.png' },
      55: { text: 'Llovizna intensa', icon: './Iconos-Clima/cloud-showers.png' },
      61: { text: 'Lluvia ligera', icon: './Iconos-Clima/cloud-showers.png' },
      63: { text: 'Lluvia moderada', icon: './Iconos-Clima/cloud-showers.png' },
      65: { text: 'Lluvia intensa', icon: './Iconos-Clima/cloud-showers.png' },
  };
  return descriptions[code] || { text: 'Desconocido', icon: '' };
}

getWeather();

// Función para abrir y cerrar el menú lateral
document.getElementById('menu-toggle').addEventListener('click', function(event) {
    var sideMenu = document.getElementById('side-menu');
    sideMenu.classList.toggle('active');
    // Evita que el clic en el botón del menú cierre el menú
    event.stopPropagation();
});

// Función para cerrar el menú si se hace clic fuera de él
document.addEventListener('click', function(event) {
    var sideMenu = document.getElementById('side-menu');
    var menuToggle = document.getElementById('menu-toggle');
    // Verifica si el clic se hizo fuera del menú y del botón
    if (!sideMenu.contains(event.target) && !menuToggle.contains(event.target)) {
        if (sideMenu.classList.contains('active')) {
            sideMenu.classList.remove('active');
        }
    }
});