const productos_container = document.querySelector(".productos-container");
const input = document.querySelector(".search-input");
const cantidad = document.querySelector(".cart-count");
const precio_total = document.querySelector(".saldo");
const list_added_prod = document.querySelector(".list-added-prod");
const precio_total1 = document.querySelector(".saldo1");
const finalizar_compra = document.querySelector(".buy1");
const usuario_ui = document.querySelector(".usuario_ui");
const cerrar_seccion = document.querySelector(".logout-style");
const userBtn = document.querySelector(".user-btn");
const userMenu = document.querySelector(".user-menu");
const nombreUsuario = document.querySelector(".nombreUsuario");
const correoUsuario = document.querySelector(".correoUsuario");
const telefonoUsuario = document.querySelector(".telefonoUsuario");
const contenedor_caregorias = document.querySelector(".container-categorias");
const token = localStorage.getItem("token");
const usuario = localStorage.getItem("usuario");


usuario_ui.textContent = usuario;



if(!token){
  window.location.href = "login.html";
}

let carrito = JSON.parse(localStorage.getItem("carrito")) || [];


obtener_info_usuario();
actualizarCarrito();
obtenerProductos();
obtener_categorias();


async function obtener_categorias(){
  try{
    const respuesta = await fetch("https://fakestoreapi.com/products/categories");

    if (!respuesta.ok){
      throw new Error("Error al obtener las categorias")
    };

    const categorias = await respuesta.json();

    // console.log(categorias);

    agregar_filtros(categorias);
  }catch(error){
    console.log(error);
    mostrarNotificacion("Error", "No se pudieron cargar las categorias. Intenta nuevamente más tarde.");
  }
}

function agregar_filtros(categorias){

  const filtro_todos = document.createElement("li");
  const botonTodos = document.createElement("button");

  botonTodos.classList.add("cat-btn", "btn-todos");
  botonTodos.innerHTML = `<i class="fa-solid fa-cart-shopping"></i><span>Todos</span>`;

  filtro_todos.appendChild(botonTodos);
  contenedor_caregorias.appendChild(filtro_todos);

  categorias.forEach(categoria => {
    const filtro = document.createElement("li");

    const boton = document.createElement("button");
    const span = document.createElement("span")
    

    boton.classList.add("cat-btn");

    switch (categoria) {
    case "men's clothing":
       boton.classList.add("btn-men");
       boton.innerHTML = `<i class="fa-solid fa-shirt"></i>`;
       span.textContent = "Hombre";
       console.log("TEST");
        break;

    case "women's clothing":
        boton.classList.add("btn-woman");
        boton.innerHTML = `<i class="fa-solid fa-person-dress"></i>`;
         span.textContent = "Mujer";
        console.log("Ropa de mujer");
        break;

    case "jewelery":
      boton.classList.add("btn-jewelry");
      boton.innerHTML  = `<i class="fa-regular fa-gem"></i>`;
       span.textContent = "Joyeria";
        console.log("Joyería");
        break;

    case "electronics":
       span.textContent = "Eletronica";
      boton.classList.add("btn-electronics");
      boton.innerHTML = `<i class="fa-solid fa-computer"></i>`;
        console.log("Electrónica");
        break;

    default:
        console.log("No se encontro la categoria");
  }

    filtro.appendChild(boton);

    

    boton.appendChild(span);

    contenedor_caregorias.appendChild(filtro);

  })
  
  configurarFiltros();
}

async function obtenerProductos() {
  try {
    const respuesta = await fetch("https://fakestoreapi.com/products");

    if (!respuesta.ok){
      throw new Error("Error al obtener los productos")
    };
    
    const productos = await respuesta.json();

    mostrarProductos(productos);

  } catch (error) {
    console.error(error);
    mostrarNotificacion("Error", "No se pudieron cargar los productos. Intenta nuevamente más tarde.");
  }
}

function obtenerTarjetas() {
  return productos_container.querySelectorAll(".tarjeta-style");
}

input.addEventListener('input', function (event) {
  buscador();   
  console.log("Buscando productos...");

  
});

function buscador(){
   const texto = (input.value).trim().toLowerCase();
   let visible = 0;
    obtenerTarjetas().forEach(tarjeta => {
      const tituloElem = tarjeta.querySelector('h1');
      let title = "";

      if (tarjeta.dataset.title) {
        title = tarjeta.dataset.title;
      } 

      title = title.toLowerCase();

      if (title.includes(texto)) {
        tarjeta.style.display = "";
        visible++;
      } else {
        tarjeta.style.display = "none";
      }
  });

  if (visible === 0) {
    mostrarNotificacion("No se encontraron productos", "No hay productos que coincidan con la búsqueda.");
  }

}

function mostrarProductos(productos){
    productos.forEach(producto => {
      const { boton, tarjeta } = crear_producto(producto);

      boton.addEventListener('click', (event) =>{
          agregar_al_carrito(producto);
      });

      tarjeta.appendChild(boton);

      productos_container.appendChild(tarjeta);
    });
}


function crear_producto(producto){
  const tarjeta = document.createElement("div");
  tarjeta.classList.add("tarjeta-style");
  tarjeta.dataset.title = producto.title;
  tarjeta.dataset.categoria = producto.category;

  const titulo = document.createElement("h1");
  titulo.textContent = producto.title;

  const img = document.createElement("img");
  img.classList.add("imagen-style");
  img.src = producto.image;

  const precio = document.createElement("p");
  precio.textContent = `$${producto.price}`;

  const boton = document.createElement("button");
  boton.textContent = "Agregar al carrito";
  boton.classList.add("boton-style");

  tarjeta.appendChild(titulo);
  tarjeta.appendChild(img);
  tarjeta.appendChild(precio);

  return {
    boton,
    tarjeta
  };
}

function configurarFiltros() {
  const btn1 = document.querySelector(".btn-todos");
  const btn2 = document.querySelector(".btn-men");
  const btn3 = document.querySelector(".btn-woman");
  const btn4 = document.querySelector(".btn-jewelry");
  const btn5 = document.querySelector(".btn-electronics");
  

  btn1.addEventListener('click', function(event) {
    event.preventDefault();
    obtenerTarjetas().forEach(tarjeta => {
      tarjeta.style.display = "block";
    });
  });

  btn2.addEventListener('click', function(event) {
    event.preventDefault();
    filtrar_por_categoria("men's clothing");
  });

  btn3.addEventListener('click', function(event) {
    event.preventDefault();
    filtrar_por_categoria("women's clothing");
  });

  btn4.addEventListener('click', function(event) {
    event.preventDefault();
    filtrar_por_categoria("jewelery");
  });

  btn5.addEventListener('click', function(event) {
    event.preventDefault();
    filtrar_por_categoria("electronics");
  });
}

function agregar_al_carrito(producto){
    const existe = carrito.find(p => p.id === producto.id);

      if (existe) {
        existe.cantidad++;
      } else {
         carrito.push({
         ...producto,
          cantidad: 1
     });
}

  actualizarCarrito();
}

function filtrar_por_categoria(categoria_seleccionada) {
  obtenerTarjetas().forEach(tarjeta => {
    if(tarjeta.dataset.categoria === categoria_seleccionada) {
      tarjeta.style.display = "block";
    } else {
      tarjeta.style.display = "none";
    }
  });
  
}

function actualizarCarrito() {
  list_added_prod.innerHTML = "";

  let total = 0;
  let cantidad_productos = 0;

  carrito.forEach(producto => {

    
    total += producto.price * producto.cantidad;
    cantidad_productos += producto.cantidad;


    const list_tarjeta = document.createElement("div");
    list_tarjeta.classList.add("added-prod");

    const list_img = document.createElement("img");
    list_img.src = producto.image;
    list_img.style.width = "auto";
    list_img.style.height = "30" + "px";

    const desc_container = document.createElement("div");
    desc_container.classList.add("desc");

    const list_title = document.createElement("h3");
    list_title.textContent = producto.title.split(" ").slice(0, 2).join(" ");

    const list_precio = document.createElement("span");

    list_precio.textContent = `$${producto.price.toFixed(2)}`;

    const list_cantidad = document.createElement("p");
    list_cantidad.textContent = `x${producto.cantidad}`;

    const btn_eliminar = document.createElement("button");
    btn_eliminar.textContent = "Eliminar";

        


    desc_container.appendChild(list_title);
    desc_container.appendChild(list_precio);

    list_tarjeta.appendChild(list_img);
    list_tarjeta.append(desc_container);
    list_tarjeta.appendChild(list_cantidad);
    list_tarjeta.appendChild(btn_eliminar);

    list_added_prod.appendChild(list_tarjeta);

      btn_eliminar.addEventListener("click", () => {

          if (producto.cantidad > 1) {
              producto.cantidad--;
          } else {
            carrito = carrito.filter(p => p.id !== producto.id);
          }

          actualizarCarrito();
      });
  })

  cantidad.textContent = cantidad_productos;
  precio_total.textContent = total.toFixed(2);
  precio_total1.textContent = total.toFixed(2);

  localStorage.setItem("carrito", JSON.stringify(carrito));
}



finalizar_compra.addEventListener("click", (event) => {
  event.preventDefault();

  if (carrito.length === 0) {
    mostrarNotificacion(
      "Carrito vacío",
      "Agrega productos antes de finalizar la compra."
    );
    return;
  }

  mostrarNotificacion(
    "Compra realizada",
    "Se ha finalizado la compra correctamente."
  );

  // Vaciar carrito
  carrito = [];
  actualizarCarrito();
});

cerrar_seccion.addEventListener('click', function(event){
  localStorage.removeItem("token");
  localStorage.removeItem("usuario");
  window.location.href = "login.html";
  event.preventDefault();
})

userBtn.addEventListener("click", function(event){
    if(userMenu.style.display === "block"){
        userMenu.style.display = "none";
    } else {
        userMenu.style.display = "block";
    }


    event.preventDefault();

});

// cerrar al hacer click afuera
document.addEventListener("click", (e)=>{

    if(!userBtn.contains(e.target) && !userMenu.contains(e.target)){
        userMenu.style.display = "none";
    }

});

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

  document.body.appendChild(notificacion);

  // Botón para cerrar
  notificacion.querySelector(".button").addEventListener("click", () => {
    notificacion.remove();
  });

  // Se elimina automáticamente después de 4 segundos
  setTimeout(() => {
    notificacion.remove();
  }, 4000);
}

async function obtener_info_usuario(){
  try{
    const respuesta = await fetch("https://fakestoreapi.com/users/1");
    const resultado = await respuesta.json();

    console.log(resultado);

    if(!respuesta.ok){
      console.log("Error al intentar conectarse!")
    }

    nombreUsuario.textContent = resultado.name.firstname + " " + resultado.name.lastname;
    correoUsuario.textContent = resultado.email;
    telefonoUsuario.textContent = resultado.phone;
  }catch(error){
    console.log(error);
    mostrarNotificacion("Error", "No se pudo cargar la información del usuario. Intenta nuevamente más tarde.");
  }
  
}