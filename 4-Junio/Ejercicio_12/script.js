const agregar = document.querySelector(".agregar");


agregar.addEventListener("click", (e) => {

    e.preventDefault();
    const nombreInput = document.querySelector(".nombre");
    const urlInput = document.querySelector(".url");
    const estadoInput = document.querySelector(".estado");
    const calificacionInput = document.querySelector(".calificacion");
    const descripcionInput = document.querySelector(".descripcion");
    const categoriaInput = document.querySelector(".categoria");
    const avisos = document.querySelector(".avisos");


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
    cardtext.textContent = calificacionInput.value;
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

    
    const calificacion = document.createElement("p");
    calificacion.classList.add("card-calificacion");
    calificacion.textContent = "Clasificacion: ";

    const calificacionValor = document.createElement("span");
    calificacionValor.classList.add("card-calificacion-valor");
    calificacionValor.textContent = calificacionInput.value;

    calificacion.appendChild(calificacionValor);
    cardtext.appendChild(calificacion);

    card.appendChild(cardtext);




    

}); 