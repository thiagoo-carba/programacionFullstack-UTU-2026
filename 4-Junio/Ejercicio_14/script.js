const img = document.querySelector(".fotogato");
const btn = document.querySelector(".btn-gato");
const btnlike = document.querySelector(".btn1");
const btndislike = document.querySelector(".btn2");
const alerta = document.querySelector(".alerta");

async function cargarGato() {
        
   
    try {
        const respuesta = await fetch(
            "https://api.thecatapi.com/v1/images/search",
            {
                headers: {
                    "x-api-key": "live_hhq5Fhwcl7GEK9m1Cwxfr9jnR2F0uLIDedbQwmCVX6kDwBLgZCxVsmhgHMzcjM6S"
                }
            }
        );

        const datos = await respuesta.json();

        img.src = datos[0].url;
        

    } catch (error) {
        alerta.textContent = "Error de comunicacion con la API";
    }

}

cargarGato();

btn.addEventListener("click",  ()=> {
    cargarGato();
});

const contador1 = document.querySelector(".contador1")
let contadorlike = 0;

btnlike.addEventListener("click", () => {
contadorlike ++;

contador1.textContent=contadorlike;
cargarGato();

});

const contador2 = document.querySelector(".contador2")
let contadordislike = 0;

btndislike.addEventListener("click", () => {
contadordislike ++;

contador2.textContent=contadordislike;
cargarGato();

});