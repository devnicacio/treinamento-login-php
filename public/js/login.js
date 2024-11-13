const filtro = document.getElementById('filtro')

function abrirModal(idModal){
    modal = document.getElementById(idModal);
    modal.style.display = "flex";
    filtro.style.display = "flex";
}

function fecharModal(idModal){
    modal = document.getElementById(idModal);
    modal.style.display = "none";
    filtro.style.display = "none";
}