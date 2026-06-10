const agregar = document.querySelector(".agregar");
let contadorcard = 0;
const contadortexto = document.querySelector(".contador1");


agregar.addEventListener("click", (e) => {

    e.preventDefault();
    const nombreInput = document.querySelector(".nombre");
    const urlInput = document.querySelector(".URL");
    const estadoInput = document.querySelector(".estado");
    const calificacionInput = document.querySelector(".calificacion");
    const descripcionInput = document.querySelector(".descripcion");
    const categoriaInput = document.querySelector(".categoria");
    const avisos = document.querySelector(".avisos");
    
    
    const subSubMain = document.querySelector(".sub-sub-main");

    

    if (nombreInput.value === "" || urlInput.value === "" || estadoInput.value === "" || calificacionInput.value === "" || descripcionInput.value === "" || categoriaInput.value === "") {
        avisos.textContent = "Por favor, complete todos los campos.";
        return;
    }
    avisos.textContent = "";

    if(calificacionInput.value < 1 || calificacionInput.value > 5) {
        avisos.textContent = "La calificación debe ser un número entre 1 y 5.";
        return;
    }
    avisos.textContent = "";
    
    const card = document.createElement("div");
    card.classList.add("card");

    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");

    const cardTitle = document.createElement("h2");
    cardTitle.classList.add("card-title");
    cardTitle.textContent = nombreInput.value;

    cardHeader.appendChild(cardTitle);

    const carddescripcion = document.createElement("p");
    carddescripcion.classList.add("card-descripcion");
    carddescripcion.textContent = descripcionInput.value;

    cardHeader.appendChild(carddescripcion);
    card.appendChild(cardHeader);

    const imagen = document.createElement("img");
    imagen.classList.add("card-image");
    imagen.src = urlInput.value;

    card.appendChild(imagen);

    const cardtext = document.createElement("div");
    cardtext.classList.add("card-text");
    card.appendChild(cardtext);
    
    const categoria = document.createElement("p");
    categoria.classList.add("card-categoria");
    categoria.textContent = "Categoria: ";

    const categoriaValor = document.createElement("span");
    categoriaValor.classList.add("card-categoria-valor");
    categoriaValor.textContent = categoriaInput.value;

    categoria.appendChild(categoriaValor);
    cardtext.appendChild(categoria);

    
    const estado = document.createElement("p");
    estado.classList.add("card-estado");
    estado.textContent = "Estado: ";

    const estadoValor = document.createElement("span");
    estadoValor.classList.add("card-estado-valor");
    estadoValor.textContent = estadoInput.value;

    estado.appendChild(estadoValor);
    cardtext.appendChild(estado);

    
    const clasificacion = document.createElement("p");
    clasificacion.classList.add("card-clasificacion");
    clasificacion.textContent = "Clasificacion: ";

    const clasificacionValor = document.createElement("span");
    clasificacionValor.classList.add("card-clasificacion-valor");
    clasificacionValor.textContent = calificacionInput.value;

    clasificacion.appendChild(clasificacionValor);
    cardtext.appendChild(clasificacion);

    card.appendChild(cardtext);
    
    const footercard = document.createElement("div");
    footercard.classList.add("card-footer");

    const cambiarestado = document.createElement("button");
    cambiarestado.classList.add("cambiar-estado");
    cambiarestado.textContent = "Cambiar Estado";

    cambiarestado.addEventListener("click", () => {
    if(estadoValor.textContent === "pendiente"){
        estadoValor.textContent = "en progreso";
    } else if(estadoValor.textContent === "en progreso"){
        estadoValor.textContent = "terminado";
    }else if(estadoValor.textContent === "terminado"){
        estadoValor.textContent = "pendiente";
    }

    });

    const favoritoBtn = document.createElement("button");
    favoritoBtn.classList.add("favorito-btn");
    favoritoBtn.textContent = "Favorito";


    favoritoBtn.addEventListener("click", () => {
        card.classList.toggle("favorito-style");

        
    });





    const eliminarBtn = document.createElement("button");
    eliminarBtn.classList.add("eliminar-card");
    eliminarBtn.textContent = "Eliminar";

    eliminarBtn.addEventListener("click", () => {
        card.remove();
        contadorcard--;
        contadortexto.textContent = contadorcard;
    });
    
    footercard.appendChild(cambiarestado);
    footercard.appendChild(favoritoBtn);
    footercard.appendChild(eliminarBtn);
    card.appendChild(footercard)

    subSubMain.appendChild(card);   
    contadorcard ++;
    contadortexto.textContent=contadorcard;

    



    

}); 

const btn1 = document.querySelector(".btn1");
const btn5 = document.querySelector(".btn5");
if (btn1) {
    btn1.addEventListener("click", () => {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => card.style.display = '');
    });

}

if (btn5) {
    btn5.addEventListener("click", () => {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            if (card.classList.contains('favorito-style')) card.style.display = '';
            else card.style.display = 'none';
        });
    });
}