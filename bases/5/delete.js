var borrar_btn;
var si_btn;
var no_btn;

window.onload = function () {
    borrar_btn = document.getElementById("b_borrar");
    si_btn = document.getElementById("yes");
    no_btn = document.getElementById("no");
}

function test() {
    console.log("hoola")
}

function f_borrar() {
    borrar_btn.classList.add("hidden");
    si_btn.classList.remove("hidden");
    no_btn.classList.remove("hidden");
}

function f_no() {
    borrar_btn.classList.remove("hidden");
    si_btn.classList.add("hidden");
    no_btn.classList.add("hidden");
}
