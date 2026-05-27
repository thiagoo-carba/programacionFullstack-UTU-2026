const agregar = document.querySelector(".agregar");
const eliminar = document.querySelector(".eliminar");

const tituloInput = document.querySelector(".titulo");
const urlInput = document.querySelector(".URL");

const galeria = document.querySelector(".galeria");
const validacion = document.querySelector("#validacion");

agregar.addEventListener("click", (e) => {

    e.preventDefault();

    const titulo = tituloInput.value;
    const url = urlInput.value;

    if(!tituloInput.value.trim() || !urlInput.value.trim()){

    validacion.textContent = "Completa todos los los campos";
    validacion.classList.add("validacion-style");

    return;
    }

    validacion.classList.remove("validacion-style");
    validacion.textContent = "";
    // CARD
    const card = document.createElement("div");
    card.classList.add("card");

    // HEADER
    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");

    const cardTitle = document.createElement("h2");
    cardTitle.classList.add("card-title");
    cardTitle.textContent = titulo;

    cardHeader.appendChild(cardTitle);

    // IMAGEN
    const imagen = document.createElement("img");
    imagen.classList.add("card-image");
    imagen.src = url;

    // FOOTER
    const cardFooter = document.createElement("div");
    cardFooter.classList.add("card-footer");

    const favoritoBtn = document.createElement("button");
    favoritoBtn.classList.add("favorito");
    favoritoBtn.textContent = "Favorito";

    const eliminarBtn = document.createElement("button");
    eliminarBtn.classList.add("eliminar-img");
    eliminarBtn.textContent = "Eliminar";

    cardFooter.appendChild(favoritoBtn);
    cardFooter.appendChild(eliminarBtn);

    // ARMAR CARD
    card.appendChild(cardHeader);
    card.appendChild(imagen);
    card.appendChild(cardFooter);

    // AGREGAR A GALERÍA
    galeria.appendChild(card);

    // LIMPIAR INPUTS
    tituloInput.value = "";
    urlInput.value = "";

});