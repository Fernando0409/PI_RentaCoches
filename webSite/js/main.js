// Metodo para mostrar y ocultar el menu
const btnToogle = document.querySelector('.toggle-btn');
btnToogle.addEventListener('click', function() {
    document.getElementById("sidebar").classList.toggle('active');
})