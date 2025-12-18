function menuMovil() {
  const btnMenus = document.querySelectorAll(".btn_movil, .links_nav");
  const boxNav = document.querySelector(".box_nav");
  const icoOpen = document.querySelector(".icon_open");
  const icoClose = document.querySelector(".icon_close");

  // 🛡️ Blindaje
  if (!btnMenus.length || !boxNav || !icoOpen || !icoClose) return;

  // 🔁 Todos los botones disparan el mismo toggle
  btnMenus.forEach((btn) => {
    btn.addEventListener("click", () => {
      boxNav.classList.toggle("active");
    });
  });

  // 👁️ Observer para sincronizar iconos
  const observer = new MutationObserver(() => {
    const isOpen = boxNav.classList.contains("active");

    icoOpen.classList.toggle("hidden", isOpen);
    icoOpen.classList.toggle("block", !isOpen);

    icoClose.classList.toggle("hidden", !isOpen);
    icoClose.classList.toggle("block", isOpen);
  });

  observer.observe(boxNav, {
    attributes: true,
    attributeFilter: ["class"],
  });
}

function splidePartners() {
  const splidePartners = new Splide(".carousel_partners", {
    type: "loop",
    drag: "free",
    perPage: 8,
    arrows: false,
    pagination: false,
    gap: "1rem",
    autoScroll: {
      speed: 0.8,
    },
    breakpoints: {
      420: {
        perPage: 3,
      },
      580: {
        perPage: 4,
        autoScroll: {
          speed: 1.5,
        },
      },
      768: {
        perPage: 6,
      },
    },
  });

  splidePartners.mount(window.splide.Extensions);
  // splide_partners.mount();
}

function splideActivities() {
  const splideActivities = new Splide(".carousel_activities", {
    type: "loop",
    perPage: 2,
    perMove: 1,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    pauseOnFocus: true,
    pagination: false,
    gap: "2rem",
    breakpoints: {
      768: { perPage: 1 },
    },
  });

  splideActivities.mount();
}

function accordion() {
  const headers = document.querySelectorAll(".accordion-header");
  const contents = document.querySelectorAll(".accordion-content");
  const icons = document.querySelectorAll(".accordion-header .icon");

  headers.forEach((header, i) => {
    header.addEventListener("click", () => {
      const index = header.dataset.index;

      contents.forEach((content, j) => {
        if (i == j) {
          const isOpen =
            content.style.maxHeight && content.style.maxHeight !== "0px";

          if (isOpen) {
            content.style.maxHeight = "0px";
            icons[j].textContent = "+";
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icons[j].textContent = "−";
          }
        } else {
          content.style.maxHeight = "0px";
          icons[j].textContent = "+";
        }
      });
    });
  });

  // Abrir el primer ítem por defecto
  contents[0].style.maxHeight = contents[0].scrollHeight + "px";
}

function isDropdown() {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach((dropdown) => {
    const btn = dropdown.querySelector(".dropdown-btn");
    const menu = dropdown.querySelector(".dropdown-menu");
    const arrow = btn.querySelector("svg");

    // Toggle
    btn.addEventListener("click", (e) => {
      e.stopPropagation();

      const isOpen = menu.classList.contains("visible");

      // Cerrar todos antes de abrir uno
      closeAllDropdowns();

      if (!isOpen) {
        openDropdown(menu, arrow);
      }
    });
  });

  // Cerrar al hacer click fuera
  document.addEventListener("click", () => {
    closeAllDropdowns();
  });

  // Cerrar al presionar ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeAllDropdowns();
  });

  // Función abrir
  function openDropdown(menu, arrow) {
    menu.classList.remove("opacity-0", "invisible", "scale-95");
    menu.classList.add("opacity-100", "visible", "scale-100");
    arrow.classList.add("rotate-180");
  }

  // Función cerrar
  function closeDropdown(menu, arrow) {
    menu.classList.remove("opacity-100", "visible", "scale-100");
    menu.classList.add("opacity-0", "invisible", "scale-95");
    arrow?.classList.remove("rotate-180");
  }

  // Cerrar todos
  function closeAllDropdowns() {
    document.querySelectorAll(".dropdown-menu").forEach((menu) => {
      const parent = menu.closest(".dropdown");
      const arrow = parent.querySelector("svg");
      closeDropdown(menu, arrow);
    });
  }
}

function headerOnScroll() {
  const header = document.querySelector("header");

  if (!header) return;

  function checkScroll() {
    if (window.scrollY > 0) {
      header.classList.add("header-scrolled");
    } else {
      header.classList.remove("header-scrolled");
    }
  }

  checkScroll();

  window.addEventListener("scroll", checkScroll);
}

function tabsComponent() {
  const tabGroups = document.querySelectorAll("[data-tabs]");

  tabGroups.forEach((group) => {
    const buttons = group.querySelectorAll(".tab-btn");
    const contents = group.querySelectorAll(".tab-content");

    // Activar el primer tab por defecto
    buttons[0].classList.add("active");
    contents[0].classList.remove("hidden");

    buttons.forEach((btn) => {
      btn.addEventListener("click", () => {
        const selected = btn.getAttribute("data-tab");

        // Resetear estilos
        buttons.forEach((b) => {
          b.classList.remove("active");
          b.classList.add("border-transparent");
        });

        contents.forEach((c) => c.classList.add("hidden"));

        // Activar el tab seleccionado
        btn.classList.add("active");
        const activeContent = group.querySelector(
          `[data-content="${selected}"]`
        );
        activeContent.classList.remove("hidden");
      });
    });
  });
}

function drawerInit() {
  const drawer = document.getElementById("drawer");
  const overlay = document.getElementById("drawer-overlay");
  const closeBtn = document.getElementById("drawer-close");

  // Todos los botones que disparan el drawer
  const triggers = document.querySelectorAll("[data-drawer-trigger]");

  const openDrawer = () => {
    drawer.classList.remove("translate-x-full");
    overlay.classList.remove("opacity-0", "pointer-events-none");
  };

  const closeDrawer = () => {
    drawer.classList.add("translate-x-full");
    overlay.classList.add("opacity-0", "pointer-events-none");
  };

  // Abrir drawer desde cualquier trigger
  triggers.forEach((btn) => btn.addEventListener("click", openDrawer));

  // Cerrar drawer
  closeBtn.addEventListener("click", closeDrawer);
  overlay.addEventListener("click", closeDrawer);

  // Cerrar con ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeDrawer();
  });
}

function modalTeam() {
  const overlay = document.getElementById("modalOverlay");
  const modalContent = document.getElementById("modalContent");
  const closeModal = document.getElementById("closeModal");

  const modalName = document.getElementById("modalName");
  const modalRole = document.getElementById("modalRole");
  const modalImage = document.getElementById("modalImage");
  const modalBody = document.getElementById("modalBody");

  document.querySelectorAll(".openModal").forEach((btn) => {
    btn.addEventListener("click", () => {
      modalName.textContent = btn.dataset.name;
      modalRole.textContent = btn.dataset.role;
      modalImage.src = btn.dataset.image;
      modalBody.innerHTML = btn.dataset.content;

      overlay.classList.remove("hidden");
      modalContent.classList.remove("hidden");

      requestAnimationFrame(() => {
        overlay.classList.replace("opacity-0", "opacity-100");
        modalContent.classList.replace("opacity-0", "opacity-100");
        modalContent.classList.replace("scale-90", "scale-100");
      });
    });
  });

  function closeModalFn() {
    overlay.classList.replace("opacity-100", "opacity-0");
    modalContent.classList.replace("opacity-100", "opacity-0");
    modalContent.classList.replace("scale-100", "scale-90");

    setTimeout(() => {
      overlay.classList.add("hidden");
      modalContent.classList.add("hidden");
    }, 300);
  }

  closeModal.addEventListener("click", closeModalFn);
  overlay.addEventListener("click", closeModalFn);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModalFn();
  });
}
