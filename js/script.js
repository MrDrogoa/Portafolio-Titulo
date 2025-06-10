// menu amburguesa
function openMenu() {
  const menuContent = document.getElementById("menu-content");
  menuContent.classList.toggle("hidden");
  menuContent.classList.toggle("block");
}

document.addEventListener("DOMContentLoaded", function () {
  // Inicializar el menú móvil (tu código existente)

  // Inicializar el carrusel de Splide
  if (document.querySelector(".splide")) {
    new Splide(".splide", {
      type: "loop",
      perPage: 3,
      perMove: 1,
      pagination: false,
      arrows: true,
      autoplay: true,
      interval: 1800,
      breakpoints: {
        1024: {
          perPage: 2,
        },
        768: {
          perPage: 1,
        },
      },
    }).mount();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Para pantallas móviles, permite hacer clic en elementos con submenús
  const menuItemsWithChildren = document.querySelectorAll(
    ".menu-item-has-children > a"
  );

  menuItemsWithChildren.forEach((item) => {
    item.addEventListener("click", function (e) {
      // Solo en móviles (pantallas pequeñas)
      if (window.innerWidth < 1024) {
        e.preventDefault();
        const submenu = this.nextElementSibling;

        // Alternar visibilidad del submenú
        if (submenu && submenu.classList.contains("hidden")) {
          // Primero oculta todos los submenús abiertos
          document
            .querySelectorAll(".menu-item-has-children > ul:not(.hidden)")
            .forEach((menu) => {
              menu.classList.add("hidden");
            });

          // Luego muestra el submenú actual
          submenu.classList.remove("hidden");
        } else if (submenu) {
          submenu.classList.add("hidden");
        }
      }
    });
  });
});

// scroll libreria - Inicializar dentro del evento DOMContentLoaded
document.addEventListener("DOMContentLoaded", function () {
  // Verificar que ScrollReveal esté disponible
  if (typeof ScrollReveal === "function") {
    window.sr = ScrollReveal();

    // Determinar configuraciones basadas en el tamaño de pantalla
    const screenWidth = window.innerWidth;
    let config = {
      small: {
        // Para pantallas pequeñas
        distance: "40px",
        duration: 1500,
      },
      medium: {
        // Para pantallas medianas
        distance: "70px",
        duration: 1800,
      },
      large: {
        // Para pantallas grandes
        distance: "100px",
        duration: 2000,
      },
    };

    // Seleccionar configuración según ancho de pantalla
    let currentConfig;
    if (screenWidth < 640) {
      currentConfig = config.small;
    } else if (screenWidth < 1024) {
      currentConfig = config.medium;
    } else {
      currentConfig = config.large;
    }

    // Aplicar a elementos con clase card-1, card-2, card-3
    sr.reveal(".card-1", {
      duration: currentConfig.duration,
      origin: "bottom",
      distance: currentConfig.distance,
      mobile: true, // Habilitamos en móvil
    });

    sr.reveal(".card-2", {
      duration: currentConfig.duration,
      origin: "bottom",
      distance: parseInt(currentConfig.distance) * 1.5 + "px", // 50% más de distancia
      mobile: true,
    });

    sr.reveal(".card-3", {
      duration: currentConfig.duration,
      origin: "bottom",
      distance: parseInt(currentConfig.distance) * 2 + "px", // El doble de distancia
      mobile: true,
    });

    const screenWidth2 = window.innerWidth;
    let config1 = {
      small: {
        // Para pantallas pequeñas
        distance: "20px",
        duration: 1300,
      },
      medium: {
        // Para pantallas medianas
        distance: "30px",
        duration: 1300,
      },
      large: {
        // Para pantallas grandes
        distance: "50px",
        duration: 1300,
      },
    };

    // Seleccionar configuración según ancho de pantalla
    let currentConfig1;
    if (screenWidth2 < 640) {
      currentConfig1 = config1.small;
    } else if (screenWidth < 1024) {
      currentConfig1 = config1.medium;
    } else {
      currentConfig1 = config1.large;
    }

    sr.reveal(".card-footer-1", {
      duration: currentConfig1.duration,
      origin: "bottom",
      distance: currentConfig1.distance,
      mobile: true,
      delay: 200,
    });

    sr.reveal(".card-footer-2", {
      duration: currentConfig1.duration,
      origin: "bottom",
      distance: currentConfig1.distance,
      mobile: true,
      delay: 300,
    });

    sr.reveal(".card-footer-3", {
      duration: currentConfig1.duration,
      origin: "bottom",
      distance: currentConfig1.distance,
      mobile: true,
      delay: 400,
    });

    sr.reveal(".title-sobre-mi", {
      duration: currentConfig1.duration,
      origin: "right",
      distance: parseInt(currentConfig.distance) * 1 + "px",
      mobile: true,
    });

    sr.reveal(".title-experiencia", {
      duration: currentConfig1.duration,
      origin: "left",
      distance: parseInt(currentConfig.distance) * 1 + "px",
      mobile: true,
    });
  }
});
