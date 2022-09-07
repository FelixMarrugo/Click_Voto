function generar(){
    let nombre = "EL MANDA CALLA";
    let nombres = document.querySelectorAll(".nombre");
    
    let desc = "Lorem, ipsum dolor sit amet consectetur adipisicing elit.";
    let descripcion = document.querySelectorAll(".descripcion");
    
    for (let i = 0; i < nombres.length; i++) {
        nombres[i].innerHTML = nombre;
    }
    for (let i = 0; i < descripcion.length; i++) {
        descripcion[i].innerHTML = desc;
    }
}

function subir() {
    var data = document.createElement("INPUT");
    data.setAttribute("type", "file");
    document.body.appendChild(data);
}