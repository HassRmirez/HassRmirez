// Función para mostrar el reloj
function showTime() {
    const now = new Date();
    const time = now.toLocaleTimeString();
    document.getElementById('clock').textContent = time;
}

// Actualizar cada segundo
setInterval(showTime, 1000);



function showTime() {
    const now = new Date();
    const time = now.toLocaleTimeString();
    const date = now.toLocaleDateString();
    document.getElementById('clock').textContent = time;
    document.getElementById('date').textContent = date; // Mostrar la fecha
}

// Actualizar cada segundo
setInterval(showTime, 1000);
