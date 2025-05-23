
//ICONO BUSQUEDA
document.getElementById('icono-busqueda').onclick = function (i) {
    i.preventDefault();
    const buscador = document.getElementById('buscador');
    buscador.style.display = (buscador.style.display === 'block') ? 'none' : 'block';
};


//Botones de paises: aparecer / desaparecer
document.addEventListener('DOMContentLoaded', () => {
    const botones = document.querySelectorAll('.btn-country');
    let ActivarSeccion = null;

    botones.forEach(button => {
        button.addEventListener('click', () => {
            const country = button.dataset.country;
            const PaisSeleccionado = document.querySelector(`.country-section[data-country="${country}"]`);

            // Si la sección activa es la misma que la seleccionada, la ocultamos
            if (ActivarSeccion === PaisSeleccionado) {
                PaisSeleccionado.classList.remove('active');
                ActivarSeccion = null;
            } else {
                // Ocultar todas las secciones
                document.querySelectorAll('.country-section').forEach(section => {
                    section.classList.remove('active');
                });

                // Mostrar la nueva sección
                PaisSeleccionado.classList.add('active');
                ActivarSeccion = PaisSeleccionado;
            }
        });
    });
});


//Flechas carrusel
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const productos = Array.from(carousel.getElementsByClassName('product-card'));
    const IzquierdaBtn = document.getElementById('IzquierdaBtn');
    const DerechaBtn = document.getElementById('DerechaBtn');

    let IndiceActual = 0;
    const MaxMoves = 1;
    const productosVisibles = 4; 

    function updateCarousel() {
        productos.forEach((product, index) => {
            if (index >= IndiceActual && index < IndiceActual + productosVisibles) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });

        // Deshabilitar botones si alcanzamos los límites
        IzquierdaBtn.disabled = IndiceActual === 0;
        DerechaBtn.disabled = IndiceActual >= MaxMoves;
    }

    IzquierdaBtn.addEventListener('click', () => {
        if (IndiceActual > 0) {
            IndiceActual--;
            updateCarousel();
        }
    });

    DerechaBtn.addEventListener('click', () => {
        if (IndiceActual < MaxMoves) {
            IndiceActual++;
            updateCarousel();
        }
    });

    // Inicializar el carrusel
    updateCarousel();
});

//buscador te lleva a perfume
document.getElementById('buscarform').addEventListener('submit', function (e) {
    e.preventDefault();

    const input = document.getElementById('inputaso').value.trim();

    if (input !== "") {
        // Convertimos el nombre del perfume en una URL amigable
        const ruta = normalizarNombre(input);
        // Verificamos si la ruta exacta existe
        if (verificarRutaExistente(ruta)) {
            window.location.href = `/perfumes/${ruta}.html`;
        } else {
            alert('Perfume no encontrado');
            console.log('Ruta no válida:', ruta);
        }
    }
});

function normalizarNombre(nombre) {
    // Mantenemos el nombre tal cual lo escribe el usuario
    return nombre
        .normalize('NFD')          
        .replace(/[\u0300-\u036f]/g, '')  
        .replace(/\s+/g, '-')               
        .replace(/[^a-zA-Z0-9\-]/g, '');   
}

// Simulación de verificación de ruta
function verificarRutaExistente(ruta) {
   
    // Aquí haces una verificación de las rutas existentes en el servidor
    const rutasDisponibles = [
        "BlackPolice", "Perin-kun", "TalianiPizzini", "Dolce&Gabbana", "FraganceEiffel", "EscadaParadise", "PerfumSalam", "IrohaNature"
    ];
    return rutasDisponibles.includes(ruta);
}
