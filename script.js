function abrirMenu() {
    document.getElementById("menu").style.width = "20%";
    document.getElementById("menu").style.display = "block";
    document.getElementById("cuerpo").style.width = "80%";
}
function cerrarMenu() {
    document.getElementById("menu").style.width = "0%";
    document.getElementById("menu").style.display = "none";
    document.getElementById("cuerpo").style.width = "100%";
}