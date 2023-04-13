const usuarios = document.querySelector("#usuarios");
usuarios.addEventListener('click', ()=>{
    location.href = 'informes.php';
})

const docentes = document.querySelector("#docentes");
docentes.addEventListener('click',()=>{
    location.href = 'menuInformes.php';
})

const agregar = document.querySelector(".agregar");

const cerrarModal = document.querySelector(".cerrarModal");
const modal = document.querySelector(".modal");

cerrarModal.addEventListener('click',()=>{
    modal.style.display = "none";
});

agregar.addEventListener('click',()=>{
    modal.style.display = "block";
});