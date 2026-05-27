const agregar = document.querySelector(".agregar");
const eliminar = document.querySelector(".eliminar");

const tituloInput = document.querySelector(".titulo");
const urlInput = document.querySelector(".URL");

const galeria = document.querySelector(".galeria");
const validacion = document.querySelector("#validacion");
const info = document.querySelector(".info");

const cntimg = document.querySelector(".contador1");
const cntfav = document.querySelector(".contador2");
const cntnfav = document.querySelector(".contador3");
const btnTodas = document.querySelector(".btn-todas");
const btnFavoritas = document.querySelector(".btn-favoritas");
const btnNoFavoritas = document.querySelector(".btn-no-favoritas");


agregar.addEventListener("click", (e) => {

    contador1 = document.querySelectorAll(".card").length + 1;
    cntimg.textContent = `${contador1}`;
    contador2 = document.querySelectorAll(".favorito-style").length;
    cntfav.textContent = `${contador2}`;
    contador3 = document.querySelectorAll(".card:not(.favorito-style)").length + 1;
    cntnfav.textContent = `${contador3}`;


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

    favoritoBtn.addEventListener("click", () => {
    card.classList.toggle("favorito-style");
    contador2 = document.querySelectorAll(".favorito-style").length;
    contador3 = document.querySelectorAll(".card:not(.favorito-style)").length;
    cntfav.textContent = `${contador2}`;
    cntnfav.textContent = `${contador3}`;
});

    const eliminarBtn = document.createElement("button");
    eliminarBtn.classList.add("eliminar-img");
    eliminarBtn.textContent = "Eliminar";

    eliminarBtn.addEventListener("click", () => {
        card.remove();
        contador1--;
        cntimg.textContent = `${contador1}`;
    });

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


if (eliminar) {
    eliminar.addEventListener("click", () => {
        const elementos = document.querySelectorAll(".card");
        elementos.forEach((elemento) => elemento.remove());
        contador1 =0;
        cntimg.textContent = `${contador1}`;
        contador2 = 0;
        cntfav.textContent = `${contador2}`;
        contador3 = 0;
        cntnfav.textContent = `${contador3}`;
    });
}

// Filtrar la galería
if (btnTodas) {
    btnTodas.addEventListener("click", () => {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => card.style.display = '');
    });
}

if (btnFavoritas) {
    btnFavoritas.addEventListener("click", () => {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            if (card.classList.contains('favorito-style')) card.style.display = '';
            else card.style.display = 'none';
        });
    });
}

if (btnNoFavoritas) {
    btnNoFavoritas.addEventListener("click", () => {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            if (!card.classList.contains('favorito-style')) card.style.display = '';
            else card.style.display = 'none';
        });
    });
}


