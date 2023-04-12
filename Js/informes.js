// Obtener los elementos del DOM
var clases = document.getElementById("clases");
var divClases = document.getElementById("divClases");
var estudiantes = document.getElementById("estudiantes");
var divEstudiantes = document.getElementById("divEstudiantes");
var recursos = document.getElementById("recursos");
var divRecursos = document.getElementById("divRecursos");

// Agregar un evento de clic a cada elemento del menú
clases.addEventListener("click", function() {
    divEstudiantes.style.display = "none";
    divRecursos.style.display = "none";
    divClases.style.display = "block";
    clases.style.color = "#10729F";
    clases.style.boxShadow = "#0A2A66 0px 5px";
    estudiantes.style.color = "white";
    estudiantes.style.boxShadow = "none";
    recursos.style.color = "white";
    recursos.style.boxShadow = "none";
});

estudiantes.addEventListener("click", function() {
    divClases.style.display = "none";
    divRecursos.style.display = "none";
    divEstudiantes.style.display = "block";
    estudiantes.style.color = "#10729F";
    estudiantes.style.boxShadow = "#0A2A66 0px 5px";
    clases.style.color = "white";
    clases.style.boxShadow = "none";
    recursos.style.color = "white";
    recursos.style.boxShadow = "none";
});

recursos.addEventListener("click", function() {
    divClases.style.display = "none";
    divEstudiantes.style.display = "none";
    divRecursos.style.display = "block";
    recursos.style.color = "#10729F";
    recursos.style.boxShadow = "#0A2A66 0px 5px";
    clases.style.color = "white";
    clases.style.boxShadow = "none";
    estudiantes.style.color = "white";
    estudiantes.style.boxShadow = "none";
});

const abrirModal = document.getElementById('btnClases');
const cerrarModal = document.getElementsByClassName('cerrar')[0];
const modal = document.getElementById('modal');

abrirModal.onclick = function() {
    modal.style.display = "block";
}

cerrarModal.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



const form = document.querySelector('form');
const tarjeta = document.getElementById('divClases');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    const titulo = form.titulo.value;
    const descripcion = form.descripcion.value;
    const actividades = form.actividades.value;
    const evaluacion = form.evaluacion.value;
    const cierre = form.cierre.value;

    const contenedorTarjetas = document.getElementById('contenedor-tarjetas');

    const nuevaTarjeta = document.createElement('div');
    nuevaTarjeta.className = 'card';
    nuevaTarjeta.innerHTML = `
      <h2>${titulo}</h2>
      <p>${descripcion}</p>
      <h3>Actividades de Aprendizaje</h3>
      <p>${actividades}</p>
      <h3>Evaluación</h3>
      <p>${evaluacion}</p>
      <h3>Cierre</h3>
      <p>${cierre}</p>
    `;
    
    contenedorTarjetas.appendChild(nuevaTarjeta);
    

   
});
