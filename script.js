const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener("click", function(){
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    //toggle icon
    this.classList.toggle("bi-eye");
});

// Menu Burger

const burger = document.getElementById('burger');
const navLinks = document.getElementById('nav-links');

// Toggle menu function
const toggleMenu = () => {
    navLinks.classList.toggle('active');
    burger.classList.toggle('toggle');
};

// Burger menu click event
burger.addEventListener('click', () => {
    toggleMenu();
}); 
// Close menu when clicking outside
document.addEventListener('click', (event) => {
    const target = event.target;
    const isNavMenu = target.closest('.nav-menu');

    if (!isNavMenu) {
        navLinks.classList.remove('active');
        burger.classList.remove('toggle');
    }
});