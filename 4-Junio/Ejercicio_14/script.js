const img = document.querySelector(".fotogato");
const btn = document.querySelector(".btn-gato");
btn.addEventListener("click", async ()=> {
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
        console.error(error);
    }

});

