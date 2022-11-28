var entrys = [];
var ps = [];
var edit_btn, ok_btn, cancel_btn;


window.onload = function () {
    entrys = document.querySelectorAll("#entrys");
    ps = document.querySelectorAll("#ps");
    edit_btn = document.getElementById("edit_btn");
    ok_btn = document.getElementById("ok_btn");
    cancel_btn = document.getElementById("cancel_btn");

}

function f_edit() {
    for (let i = 0; i < 4; i++) {
        entrys[i].classList.remove("hidden");
        ps[i].classList.add("hidden");
    }
    edit_btn.classList.add("hidden");
    ok_btn.classList.remove("hidden");
    cancel_btn.classList.remove("hidden");
}

function f_cancel() {
    for (let i = 0; i < 4; i++) {
        entrys[i].classList.add("hidden");
        ps[i].classList.remove("hidden");
    }
    edit_btn.classList.remove("hidden");
    ok_btn.classList.add("hidden");
    cancel_btn.classList.add("hidden");
}