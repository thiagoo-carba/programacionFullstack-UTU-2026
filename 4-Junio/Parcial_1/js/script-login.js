const usuario = document.querySelector(".user-input");
const contra = document.querySelector(".contra-input");
const boton = document.querySelector(".continuar-login");
const main_container = document.querySelector(".main-container");


boton.addEventListener('click', function(event){
    event.preventDefault();
    console.log(usuario.value, contra.value);
    login(usuario.value, contra.value);
})



async function login(usuario, contra) {
    try {
        const respuesta = await fetch("https://fakestoreapi.com/auth/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                username: usuario,
                password: contra
            })
        });

        if (!respuesta.ok) {
            throw new Error("Usuario o contraseña incorrectos");
        }

        const datos = await respuesta.json();

        localStorage.setItem("token", datos.token);
        localStorage.setItem("usuario", usuario);

        console.log(datos);

        const token = localStorage.getItem("token");

        if (token) {
            window.location.href = "dashboard.html";
        }

    } catch (error) {
        console.error(error);

        mostrarNotificacion("Error", "Usuario o contraseña incorrectos!");
    }
}

function mostrarNotificacion(titulo, mensaje) {
  // Elimina una notificación anterior si existe
  const anterior = document.querySelector(".notification");
  if (anterior) {
    anterior.remove();
  }

  const notificacion = document.createElement("div");
  notificacion.className = "notification";

  notificacion.innerHTML = `
    <div class="notification__icon"></div>

    <div class="notification__body">
      <h2 class="notification__header">${titulo}</h2>
      <p class="notification__text">${mensaje}</p>
    </div>

    <div class="notification__action">
      <button class="button" aria-label="Cerrar">
        <span aria-hidden="true">✕</span>
      </button>
    </div>
  `;

  main_container.appendChild(notificacion);

  // Botón para cerrar
  notificacion.querySelector(".button").addEventListener("click", () => {
    notificacion.remove();
  });

  // Se elimina automáticamente después de 4 segundos
  setTimeout(() => {
    notificacion.remove();
  }, 4000);
}