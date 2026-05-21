
/* 1 */

/* const titulo = document.getElementById("titulo");
const boton = document.getElementById("boton");

boton.addEventListener("click", () => { titulo.textContent = "Texto cambiado"; }); */


/* 2 */

/* const parrafo = document.getElementById("parrafo");
const boton = document.getElementById("boton");

boton.addEventListener("click", () => { parrafo.innerHTML = "<b>Texto cambiado</b>"; });
 */

/* 3 */

/* const imagen = document.getElementById("imagen");
const boton = document.getElementById("boton");
boton.addEventListener("click", () => { imagen.src = "https://www.supercars.net/blog/wp-content/uploads/2024/02/2019-Bugatti-Divo-004-1536.jpg"; }); */

/* 4 */
/* const input = document.getElementById("input");
const boton = document.getElementById("boton");
const output = document.getElementById("output");

boton.addEventListener("click", () => { output.textContent = input.value; });
 */


/* 5 */
/* const body1 = document.body;
const boton = document.getElementById("boton");

boton.addEventListener("click", () => { body1.classList.add("background");}); */


/* 6 */
/* const boton = document.getElementById("boton");
const div = document.getElementById("div1");

boton.addEventListener("click", () => {div.classList.remove("test");}); */

/* 7 */
/* const boton = document.getElementById("boton");
const body1 = document.body;

boton.addEventListener("click", () => { body1.classList.toggle("background"); }); */

/* 8 */
/* const lista = document.getElementById("lista");
const boton = document.getElementById("boton");

let contador = 2;

boton.addEventListener("click", () => {
const nuevoElemento = document.createElement("li");
nuevoElemento.textContent = "Elemento " + contador;
lista.appendChild(nuevoElemento);
contador++;
}); */

/* 9 */
/* const boton = document.getElementById("boton");
const nombreInput = document.getElementById("nombre");
const colorInput = document.getElementById("color");
const mensajeInput = document.getElementById("mensaje");
const card = document.getElementById("card");
const validacion = document.getElementById("validacion");


boton.addEventListener("click", () => {

    if (!nombreInput.value || !colorInput.value || !mensajeInput.value) {
        validacion.textContent = "Por favor, completa todos los campos.";
        validacion.classList.add("validacion-style");
        return;
    }

    validacion.classList.remove("validacion-style");

    validacion.textContent = "";
    const nombre = nombreInput.value;
    const color = colorInput.value;
    const mensaje = mensajeInput.value;

    document.getElementById("outputn").textContent = nombre;
    document.getElementById("outputc").textContent = color;
    document.getElementById("outputm").textContent = mensaje;

    card.classList.toggle("dark");
}); */





