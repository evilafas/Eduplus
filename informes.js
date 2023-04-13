//seleccion de los botones
const btnClases = document.getElementById("clases");
const btnEstudiantes = document.getElementById("estudiantes");
const btnRecursos = document.getElementById("recursos");
//seleccion de los divs
const divClases = document.querySelector("#contClases");
const divEstudiantes = document.querySelector("#contEstudiantes");
const divRecursos = document.querySelector("#contRecursos");

btnClases.addEventListener("click", function() {
    divEstudiantes.style.display = "none";
    divRecursos.style.display = "none";
    divClases.style.display = "flex";
    btnEstudiantes.style.color = "black";
    btnClases.style.color = "white";
    btnRecursos.style.color = "black"
    btnClases.style.cursor = "pointer";
    divClases.style.background = "green";
});

btnEstudiantes.addEventListener("click", function() {
    divClases.style.display = "none";
    divRecursos.style.display = "none";
    divEstudiantes.style.display = "flex";
    btnEstudiantes.style.color = "white";
    btnClases.style.color = "black";
    btnRecursos.style.color = "black"
    btnEstudiantes.style.cursor = "pointer";
    divEstudiantes.style.background = "blue";
});

btnRecursos.addEventListener("click", function() {
    divClases.style.display = "none";
    divEstudiantes.style.display = "none";
    divRecursos.style.display = "flex";
    btnEstudiantes.style.color = "black";
    btnClases.style.color = "black";
    btnRecursos.style.color = "white"
    divRecursos.style.cursor = "pointer";
    divRecursos.style.background = "red";

});