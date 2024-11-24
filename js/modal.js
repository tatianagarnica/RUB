let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".cta")[0];
let modal = document.querySelectorAll(".container")[0];
let modalC = document.querySelectorAll(".modal-container")[0];

abrir.addEventListener("click", function(e){
    e.preventDefault();
    modalC.style.opacity = "1";
    modalC.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click", function(){
    modal.classList.toggle("modal-close");
    modalC.style.opacity = "0";
    modalC.style.visibility = "hidden";
    setTimeout(function(){

    }, 900);
});

let cerrar1 = document.querySelectorAll(".close1")[0];
let abrir1 = document.querySelectorAll(".abrir")[0];
let modal1 = document.querySelectorAll(".container1")[0];
let modalC1 = document.querySelectorAll(".modal-container1")[0];

abrir1.addEventListener("click", function(e){
    e.preventDefault();
    modalC1.style.opacity = "1";
    modalC1.style.visibility = "visible";
    modal1.classList.toggle("modal-close1");
});

cerrar1.addEventListener("click", function(){
    modal1.classList.toggle("modal-close1");
    modalC1.style.opacity = "0";
    modalC1.style.visibility = "hidden";
    setTimeout(function(){

    }, 900);
});

let cerrar2 = document.querySelectorAll(".close2")[0];
let abrir2 = document.querySelectorAll(".abrir2")[0];
let modal2 = document.querySelectorAll(".container2")[0];
let modalC2 = document.querySelectorAll(".modal-container2")[0];

abrir2.addEventListener("click", function(e){
    e.preventDefault();
    modalC2.style.opacity = "1";
    modalC2.style.visibility = "visible";
    modal2.classList.toggle("modal-close1");
});

cerrar2.addEventListener("click", function(){
    modal2.classList.toggle("modal-close2");
    modalC2.style.opacity = "0";
    modalC2.style.visibility = "hidden";
    setTimeout(function(){

    }, 900);
});