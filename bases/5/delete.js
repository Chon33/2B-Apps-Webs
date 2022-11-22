// definir botones de forma global
var borrar_btn;
var si_btn;
var no_btn;

// cuando la ventana cargue, asignar botones a variables
window.onload = function () {
    borrar_btn = document.getElementById("b_borrar");
    si_btn = document.getElementById("yes");
    no_btn = document.getElementById("no");
}

// ocultar boton borrar, y mostar botones si/no
function f_borrar() {
    borrar_btn.classList.add("hidden");
    si_btn.classList.remove("hidden");
    no_btn.classList.remove("hidden");
}

// ocultar botones si/no, y mostar boton borrar
function f_no() {
    borrar_btn.classList.remove("hidden");
    si_btn.classList.add("hidden");
    no_btn.classList.add("hidden");
}


// function f_si() => se hace de forma atomatica en el form