const categoriaInput = document.querySelector(".categoria");
const tipoInput = document.querySelector(".tipo");
const languageSelect = document.querySelector(".lang");
const mostrarButton = document.querySelector(".mostrar");
const chisteDiv = document.querySelector(".chiste");
const errorDiv = document.querySelector(".error");

const racista = document.querySelector(".racista");
const politico = document.querySelector(".political");
const religioso = document.querySelector(".religious");
const nsfw = document.querySelector(".nsfw");
const sexist = document.querySelector(".sexista");  
const explicit = document.querySelector(".explicit");

mostrarButton.addEventListener("click", async() => {

    chisteDiv.textContent = "Cargando chiste...";
    errorDiv.textContent = "";

    let blacklistFlags = "";

    if (racista.checked) {
        blacklistFlags += "racist,";
    }
    if (nsfw.checked) {
        blacklistFlags += "nsfw,";
    }
    if (sexist.checked) {
        blacklistFlags += "sexist,";
    }
    if (explicit.checked) {
        blacklistFlags += "explicit,";
    }

    if (politico.checked) {
        blacklistFlags += "political,";
    }

    if (religioso.checked) {
        blacklistFlags += "religious,";
    }
    if (blacklistFlags.endsWith(",")) {
    blacklistFlags = blacklistFlags.slice(0, -1);
    }
    let url = `https://v2.jokeapi.dev/joke/${categoriaInput.value}?type=${tipoInput.value}&blacklistFlags=${blacklistFlags}`;

    if (languageSelect.value === "es") {
        url = `https://v2.jokeapi.dev/joke/${categoriaInput.value}?lang=es&type=${tipoInput.value}&blacklistFlags=${blacklistFlags}`;
    }

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (data.error) {
            errorDiv.textContent = data.additionalInfo;
            chisteDiv.textContent = "";
            return;
        }

        errorDiv.textContent = "";

        if (data.type === "single") {
            chisteDiv.textContent = data.joke;
        } else {
            chisteDiv.textContent = data.setup + " " + data.delivery;
        }

    } catch (error) {
        errorDiv.textContent = "Error de conexión.";
        console.log(error);
    }
});

