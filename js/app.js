document.addEventListener('DOMContentLoaded', () => {
    const inputBusqueda = document.getElementById('inputBusqueda');
    const contenedorResultados = document.getElementById('resultados');

    if (inputBusqueda) {
        inputBusqueda.addEventListener('input', async (e) => {
            const query = e.target.value.trim();

            try {
                const response = await fetch(`api/buscar_juegos.php?q=${encodeURIComponent(query)}`);
                
                if (!response.ok) {
                    throw new Error(`Error HTTP: ${response.status}`);
                }

                const res = await response.json();

                if (res.status === 'success') {
                    renderizarResultados(res.data);
                }
            } catch (error) {
                console.error("Error al realizar la petición:", error);
            }
        });
    }

    function renderizarResultados(juegos) {
        if (!contenedorResultados) return;
        
        contenedorResultados.innerHTML = '';

        if (juegos.length === 0) {
            contenedorResultados.innerHTML = '<p class="text-muted">No se encontraron resultados.</p>';
            return;
        }

        juegos.forEach(juego => {
            const item = document.createElement('div');
            item.className = 'card bg-dark text-white mb-2 p-3 border-secondary';
            item.innerHTML = `
                <h5 class="text-primary">${juego.nombre}</h5>
                <p class="mb-0">Precio: $${juego.precio}</p>
            `;
            contenedorResultados.appendChild(item);
        });
    }
});