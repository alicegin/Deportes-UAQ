const drawer = document.getElementById('drawer');
const backdrop = document.getElementById('backdrop');
const openButton = document.getElementById('openButton');
const closeButton = document.getElementById('closeButton');

// Función para abrir el drawer
openButton.addEventListener('click', () => {
  drawer.classList.add('open');
  backdrop.classList.add('show');
});

// Función para cerrar el drawer
const closeDrawer = () => {
  drawer.classList.remove('open');
  backdrop.classList.remove('show');
};

closeButton.addEventListener('click', closeDrawer);

// Cerrar el drawer al hacer clic fuera del mismo
backdrop.addEventListener('click', closeDrawer);
