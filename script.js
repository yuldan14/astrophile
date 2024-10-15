document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('nav-links');
    const navMenu = document.getElementById('nav-menu'); // Pastikan ini merujuk ke elemen yang benar

    // Fungsi untuk toggle menu
    const toggleMenu = () => {
        navLinks.classList.toggle('active');
        burger.classList.toggle('toggle');
        document.body.classList.toggle('menu-open'); // Mencegah scrolling saat menu terbuka
    };

    // Event listener untuk klik pada burger
    burger.addEventListener('click', (e) => {
        e.stopPropagation(); // Mencegah event click bubble ke document
        toggleMenu();
    });

    // Menutup menu jika mengklik di luar area menu
    document.addEventListener('click', (event) => {
        const isClickInsideMenu = navLinks.contains(event.target); // Cek apakah klik di dalam menu
        const isClickOnBurger = burger.contains(event.target); // Cek apakah klik pada burger

        if (!isClickInsideMenu && !isClickOnBurger) {
            // Jika klik di luar menu dan burger, tutup menu
            navLinks.classList.remove('active');
            burger.classList.remove('toggle');
            document.body.classList.remove('menu-open'); // Re-enable scrolling
        }
    });
});
