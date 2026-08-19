const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const formulario = document.querySelector("#form-pedido");
const aviso = document.querySelector("#aviso-contacto");

let esDeDia = false;

function alternarModo() {

    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;

    if (esDeDia) {
        botonModo.textContent = "Modo dia";
    } else {
        botonModo.textContent = "Modo noche";
    }
}

botonModo.addEventListener("click", alternarModo);



function revisarFormulario(event){

    event.preventDefault();
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const mensaje = document.querySelector("#msg").value.trim();

    if(nombre === ""){
        aviso.textContent = "ingresa tu nombre";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
        return;
    }

    if(!correo.includes("@")){
        aviso.textContent = "eso no parece un correo";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
        return;
    }

    aviso.textContent = "mensaje enviado correctamente!!!";
    aviso.classList.add("exito");
    aviso.classList.remove("error");

    formulario.submit();
}

formulario.addEventListener("submit", revisarFormulario);