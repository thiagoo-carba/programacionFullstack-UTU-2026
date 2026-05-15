/* =========================================================
   Luxury Motors Time Machine
   La idea es simple para explicar:
   - El usuario escribe un ano.
   - JS decide la epoca.
   - JS cambia una clase en body.
   - CSS transforma la web completa.
   - JS renderiza textos, cards y audios de esa epoca.
   ========================================================= */

const form = document.getElementById("timeForm");
const yearInput = document.getElementById("yearInput");
const vehicleGrid = document.getElementById("vehicleGrid");
const timeTunnel = document.getElementById("timeTunnel");
const toastMessage = document.getElementById("toastMessage");
const secretButton = document.getElementById("secretButton");
const muteButton = document.getElementById("muteButton");
const audioLabel = document.getElementById("audioLabel");

const ambientAudio = document.getElementById("ambientAudio");

const eraKicker = document.getElementById("eraKicker");
const floatingBadge = document.getElementById("floatingBadge");
const eraTitle = document.getElementById("eraTitle");
const eraDescription = document.getElementById("eraDescription");
const yearDisplay = document.getElementById("yearDisplay");
const visualMode = document.getElementById("visualMode");
const inventoryMode = document.getElementById("inventoryMode");
const dangerMode = document.getElementById("dangerMode");
const collectionLabel = document.getElementById("collectionLabel");
const collectionTitle = document.getElementById("collectionTitle");
const receptionText = document.getElementById("receptionText");
const easterText = document.getElementById("easterText");
const warrantyText = document.getElementById("warrantyText");

let isMuted = false;

/* AUDIO PREPARADO:
   Crea una carpeta llamada audio junto a index.html.
   Luego agrega archivos con estos nombres:
   audio/future.mp3, audio/windows.mp3, audio/arcade.mp3,
   audio/palace.mp3, audio/jurassic.mp3.

   Los navegadores suelen bloquear autoplay. Por eso el audio se intenta
   reproducir despues de que el usuario presiona "Viajar en el tiempo".
*/

const eras = {
  future: {
    className: "era-future",
    audio: "audio/future.mp3",
    kicker: "Hyper showroom 2035",
    title: "El lujo acaba de doblar el espacio-tiempo.",
    description: "Cristal, neon, pantallas flotantes y autos que parecen disenados por un arquitecto con exceso de cafe.",
    visual: "Neon luxury",
    inventory: "Hypercars",
    danger: "Factura dimensional",
    collectionLabel: "Inventario premium",
    collectionTitle: "Vehiculos de lujo para clientes que no respetan el calendario",
    reception: "Un asistente holografico te recibe, escanea tu billetera y decide hablarte con respeto.",
    easter: "El piso brilla tanto que los autos se sienten obligados a comportarse.",
    warranty: "Incluye actualizacion remota, perfume de cuero nuevo y un contrato de 400 paginas.",
    secret: "Modo millonario activado: el boton ahora cobra estacionamiento.",
    vehicles: [
      {
        name: "Bugatti Chiron",
        image: "img/future1.jpg",
        fallback: "img/future1.jpg",
        description: "Un misil con modales de gala. Acelera tan fuerte que el pasado pide disculpas.",
        specs: ["W16", "Carbono", "Precio misterioso"]
      },
      {
        name: "Rolls-Royce Phantom Quantum",
        image: "img/future2.jpg",
        fallback: "img/future2.jpg",
        description: "No arranca: convence al universo de moverse con mas elegancia.",
        specs: ["Silencio total", "Palacio movil", "Chofer opcional"]
      },
      {
        name: "Mercedes-Benz EQ Silver Arrow 01",
        image: "img/future3.jpg",
        fallback: "img/future3.jpg",
        description: "Electrico, insolente y listo para dejarle marcas de neumatico al futuro.",
        specs: ["Electrico", "Pantalla gigante", "Carga lunar"]
      }
    ]
  },
  windows: {
    className: "era-windows",
    audio: "audio/windows.mp3",
    kicker: "Internet Explorer Motors 1990-2000",
    title: "Bienvenido a la concesionaria punto com.",
    description: "Ventanas grises, popups falsos, botones cuadrados y el glamour dudoso de comprar un auto desde una PC beige.",
    visual: "Windows 95 / XP caotico",
    inventory: "Autos noventeros",
    danger: "Error 404: elegancia no encontrada",
    collectionLabel: "Tabla de ofertas HTML",
    collectionTitle: "Catalogo oficial optimizado para Internet Explorer 5",
    reception: "El vendedor aparece en un popup y pregunta si deseas instalar 17 barras de herramientas.",
    easter: "Se detecto un descuento. Windows necesita reiniciarse para aplicarlo.",
    warranty: "Incluye disquete de mantenimiento, manual impreso y un antivirus que no funciona.",
    secret: "ERROR: El lujo ha realizado una operacion no valida y sera cerrado.",
    vehicles: [
      {
        name: "BMW M3",
        image: "img/windows1.jpg",
        fallback: "img/windows1.jpg",
        description: "Carga de 0 a 100 mas rapido que una imagen JPEG en 1998. Casi siempre.",
        specs: ["Tahoma", "CD-ROM", "56k turbo"]
      },
      {
        name: "Mercedes SLK",
        image: "img/windows2.jpg",
        fallback: "img/windows2.jpg",
        description: "Cada vez que abres el techo aparece una ventana preguntando si estas seguro.",
        specs: ["Airbag", "Popup", "Winamp ready"]
      },
      {
        name: "Toyota Supra",
        image: "img/windows3.jpg",
        fallback: "img/windows3.jpg",
        description: "Demasiado rapido para cargar completo. El aleron aparece despues del tercer refresh.",
        specs: ["Turbo", "CRT glow", "Tabla HTML"]
      }
    ]
  },
  arcade: {
    className: "era-arcade",
    audio: "audio/arcade.mp3",
    kicker: "Arcade Racing Club 1980",
    title: "Insert coin. Burn rubber. Repeat.",
    description: "Un videojuego de autos de los 80: neones salvajes, horizonte synthwave, scanlines y drama digital.",
    visual: "VHS arcade",
    inventory: "Maquinas pixeladas",
    danger: "Glitch de neumaticos",
    collectionLabel: "Seleccion de corredores",
    collectionTitle: "Vehiculos que parecen desbloqueados con un codigo secreto",
    reception: "Una voz robotica grita 'READY!' mientras el piso se convierte en una grilla infinita.",
    easter: "Arriba arriba abajo abajo no da descuento, pero cambia tu postura frente al volante.",
    warranty: "Incluye tres vidas, musica sintetica y reparacion de pixeles quemados.",
    secret: "NIVEL SECRETO: el vendedor final tiene lentes espejados y no acepta cheques.",
    vehicles: [
      {
        name: "Ferrari Testarossa",
        image: "img/arcade1.jpg",
        fallback: "img/arcade1.jpg",
        description: "Roja, ancha y con energia de jefe final en una carretera violeta.",
        specs: ["V12", "Glow maximo", "Modo VHS"]
      },
      {
        name: "DeLorean Turbo",
        image: "img/arcade2.jpg",
        fallback: "img/arcade2.jpg",
        description: "No viaja en el tiempo, pero parpadea como si estuviera cargando el siguiente nivel.",
        specs: ["Acero", "Puertas ala", "8 bits"]
      },
      {
        name: "Porsche 911",
        image: "img/arcade3.jpg",
        fallback: "img/arcade3.jpg",
        description: "Perfecto para perseguir atardeceres imposibles y records de arcade.",
        specs: ["Turbo", "Laser", "High score"]
      }
    ]
  },
  palace: {
    className: "era-palace",
    audio: "audio/palace.mp3",
    kicker: "Salon Real 1700-1950",
    title: "Carruajes, caballos y lujo con candelabros.",
    description: "La web deja de ser web y se vuelve catalogo aristocratico: papel antiguo, madera, marcos dorados y humor de establo fino.",
    visual: "Palacio barroco",
    inventory: "Caballos y carruajes",
    danger: "Barro en el terciopelo",
    collectionLabel: "Galeria de monturas nobles",
    collectionTitle: "Vehiculos previos al motor, posteriores al ego",
    reception: "Un mayordomo con guantes blancos anuncia tu llegada y juzga tus botas en silencio.",
    easter: "La financiacion feudal acepta oro, tierras o promesas dramaticas.",
    warranty: "Incluye heno premium, velas aromaticas y herraduras con acabado real.",
    secret: "El caballo principal exige retrato al oleo antes de la entrega.",
    vehicles: [
      {
        name: "Caballo Edicion Limitada",
        image: "img/palace1.jpg",
        fallback: "img/palace1.jpg",
        description: "0 HP, porque el HP lo trae puesto. Gran presencia, baja autonomia si ve manzanas.",
        specs: ["Heno premium", "Suspension biologica", "Relincho noble"]
      },
      {
        name: "Carruaje Imperial V8",
        image: "img/palace2.jpg",
        fallback: "img/palace2.jpg",
        description: "No tiene motor, pero tiene cortinas. Ideal para llegar tarde con autoridad.",
        specs: ["Madera real", "Cojines", "Traccion animal"]
      },
      {
        name: "Pony Diplomático",
        image: "img/palace3.jpg",
        fallback: "img/palace3.jpg",
        description: "Compacto, elegante y capaz de entrar al palacio sin romper jarrones caros.",
        specs: ["Mini lujo", "Bajo consumo", "Alta presencia"]
      }
    ]
  },
  jurassic: {
    className: "era-jurassic",
    audio: "audio/jurassic.mp3",
    kicker: "Mega Feria -65 Millones",
    title: "La concesionaria fue devorada por la jungla.",
    description: "Niebla, volcanes, hojas gigantes, huesos y dinosaurios premium con garantia hasta el meteorito.",
    visual: "Jungla prehistorica",
    inventory: "Dinosaurios a la venta",
    danger: "Cliente comestible",
    collectionLabel: "Corral de criaturas premium",
    collectionTitle: "Modelos con rugido de fabrica y consumo cuestionable",
    reception: "Un paleovendedor grita precios desde una roca mientras algo enorme respira detras de ti.",
    easter: "Toda compra incluye meteorito de regalo. No se aceptan devoluciones despues del impacto.",
    warranty: "Garantia hasta el meteorito. No cubre mordidas, lava ni pisotones de prueba.",
    secret: "El T-Rex intento firmar el contrato. La lapicera ahora es fosil.",
    vehicles: [
      {
        name: "T-Rex",
        image: "img/jurassic1.jpg",
        fallback: "img/jurassic1.jpg",
        description: "Consume 14 humanos por kilometro. Acelera poco, intimida muchisimo.",
        specs: ["Rugido V12", "Brazos cortos", "14 humanos/km"]
      },
      {
        name: "Velociraptor Edicion Limitada",
        image: "img/jurassic2.jpg",
        fallback: "img/jurassic2.jpg",
        description: "Agil, inteligente y probablemente ya abrio la puerta del showroom.",
        specs: ["Pack caza", "Alarma natural", "Muy veloz"]
      },
      {
        name: "Mamut Blindado",
        image: "img/jurassic3.jpg",
        fallback: "img/jurassic3.jpg",
        description: "Mucho pelo, mucho caracter y climatizacion inversa para epocas de hielo.",
        specs: ["Lana blindada", "4x4 glacial", "Colmillos cromados"]
      }
    ]
  }
};

function getEraByYear(year) {
  if (year <= -65000000) return eras.jurassic;
  if (year >= 1500 && year <= 1959) return eras.palace;
  if (year >= 1980 && year <= 1989) return eras.arcade;
  if (year >= 1990 && year <= 2000) return eras.windows;
  return eras.future;
}

function changeBodyClass(className) {
  document.body.classList.remove("era-future", "era-windows", "era-arcade", "era-palace", "era-jurassic");
  document.body.classList.add(className);
}

function renderVehicles(vehicles) {
  vehicleGrid.innerHTML = "";

  vehicles.forEach((vehicle) => {
    const column = document.createElement("div");
    column.className = "col-12 col-md-6 col-xl-4";

    const card = document.createElement("article");
    card.className = "vehicle-card";

    const imageBox = document.createElement("div");
    imageBox.className = "vehicle-image";
    imageBox.dataset.fallback = vehicle.fallback;

    const image = document.createElement("img");
    image.src = vehicle.image;
    image.alt = vehicle.name;

    // Si no agregaste car1.jpg, car2.jpg, etc., aparece un cartel bonito.
    image.addEventListener("error", () => {
      imageBox.classList.add("image-missing");
    });

    const body = document.createElement("div");
    body.className = "vehicle-body";

    const title = document.createElement("h3");
    title.textContent = vehicle.name;

    const description = document.createElement("p");
    description.textContent = vehicle.description;

    const specs = document.createElement("div");
    specs.className = "specs";

    vehicle.specs.forEach((spec) => {
      const item = document.createElement("span");
      item.textContent = spec;
      specs.appendChild(item);
    });

    imageBox.appendChild(image);
    body.appendChild(title);
    body.appendChild(description);
    body.appendChild(specs);
    card.appendChild(imageBox);
    card.appendChild(body);
    column.appendChild(card);
    vehicleGrid.appendChild(column);
  });
}

function setAudioForEra(era) {
  ambientAudio.src = era.audio;
  audioLabel.textContent = `Música preparada: ${era.audio}`;
  ambientAudio.muted = isMuted;
  ambientAudio.volume = 0.35;

  if (!isMuted) {
    ambientAudio.play().catch(() => {
      showToast("Toca el botón de música o viaja otra vez para activar el audio.");
    });
  }
}

function updateInterface(year) {
  const era = getEraByYear(year);

  changeBodyClass(era.className);
  setAudioForEra(era);

  eraKicker.textContent = era.kicker;
  floatingBadge.textContent = year;
  eraTitle.textContent = era.title;
  eraDescription.textContent = era.description;
  yearDisplay.textContent = year;
  visualMode.textContent = era.visual;
  inventoryMode.textContent = era.inventory;
  dangerMode.textContent = era.danger;
  collectionLabel.textContent = era.collectionLabel;
  collectionTitle.textContent = era.collectionTitle;
  receptionText.textContent = era.reception;
  easterText.textContent = era.easter;
  warrantyText.textContent = era.warranty;
  renderVehicles(era.vehicles);
}

function travelToYear(year) {
  timeTunnel.classList.add("active");

  setTimeout(() => {
    updateInterface(year);
    timeTunnel.classList.remove("active");
    showToast(`Viaje completado: ano ${year}.`);
  }, 900);
}


function showToast(message) {
  toastMessage.textContent = message;
  toastMessage.classList.add("show");

  setTimeout(() => {
    toastMessage.classList.remove("show");
  }, 3200);
}

form.addEventListener("submit", (event) => {
  event.preventDefault();
  const year = Number(yearInput.value);

  if (!Number.isFinite(year)) {
    showToast("Escribe un ano valido.");
    return;
  }

  travelToYear(year);
});

muteButton.addEventListener("click", () => {
  isMuted = !isMuted;
  muteButton.textContent = isMuted ? "Música: OFF" : "Música: ON";
  ambientAudio.muted = isMuted;

  if (isMuted) {
    ambientAudio.pause();
  } else {
    ambientAudio.play().catch(() => {
      showToast("El navegador bloqueó el audio. Prueba viajar en el tiempo otra vez.");
    });
  }
});


secretButton.addEventListener("click", () => {
  const era = getEraByYear(Number(yearInput.value));
  showToast(era.secret);
});


updateInterface(Number(yearInput.value));