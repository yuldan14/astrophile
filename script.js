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




// IndexedDB
// Inisialisasi IndexedDB
function initIndexedDB() {
    return new Promise((resolve, reject) => {
        const request = indexedDB.open('shoppingCartDB', 1);

        request.onerror = (event) => {
            console.error('IndexedDB error:', event);
            reject('Error opening IndexedDB');
        };

        request.onsuccess = (event) => {
            console.log('IndexedDB opened successfully');
            resolve(event.target.result);
        };

        request.onupgradeneeded = (event) => {
            const db = event.target.result;
            // Buat object store bernama 'cart' dengan keyPath 'id'
            const objectStore = db.createObjectStore('cart', { keyPath: 'id', autoIncrement: true });
            objectStore.createIndex('name', 'name', { unique: false });
            objectStore.createIndex('price', 'price', { unique: false });
            objectStore.createIndex('image', 'image', { unique: false });
        };
    });
}
// Fungsi untuk menambahkan data ke IndexedDB
function addToCart(product) {
    initIndexedDB().then((db) => {
        const transaction = db.transaction(['cart'], 'readwrite');
        const objectStore = transaction.objectStore('cart');

        // Menambahkan data produk ke IndexedDB
        objectStore.add(product);

        transaction.oncomplete = () => {
            console.log('Produk berhasil ditambahkan ke cart');
        };

        transaction.onerror = (event) => {
            console.error('Error adding product to cart:', event);
        };
    }).catch((error) => {
        console.error('IndexedDB error:', error);
    });
}
document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.lihat-detail a i[data-feather="shopping-cart"]');

    cartButtons.forEach((button) => {
        button.parentElement.addEventListener('click', (event) => {
            event.preventDefault();

            // Ambil elemen card produk terkait
            const card = event.target.closest('.card-produk');
            const productImage = card.querySelector('.card-image img').src;
            const productName = card.querySelector('.nama-produk h5').innerText;
            const productPrice = card.querySelector('.harga-produk b').innerText;

            // Buat object produk untuk disimpan di IndexedDB
            const product = {
                name: productName,
                price: productPrice,
                image: productImage
            };

            // Tambahkan produk ke IndexedDB
            addToCart(product);

            alert(`${productName} berhasil ditambahkan ke keranjang`);
        });
    });
});
// Fungsi untuk mengambil semua data dari IndexedDB
function getCartData() {
    return new Promise((resolve, reject) => {
        initIndexedDB().then((db) => {
            const transaction = db.transaction(['cart'], 'readonly');
            const objectStore = transaction.objectStore('cart');
            const request = objectStore.getAll();

            request.onsuccess = (event) => {
                resolve(event.target.result);
            };

            request.onerror = (event) => {
                console.error('Error fetching data from cart:', event);
                reject('Error fetching data');
            };
        });
    });
}
function addToCartTable(product) {
    const cartTable = document.getElementById('cart-table'); // Pastikan tabel cart memiliki id="cart-table"

    // Buat elemen <tr> baru
    const row = document.createElement('tr');

    // Set konten dari <tr> dengan data produk
    row.innerHTML = `
        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()"></td>
        <td id="foto-barang">
            <img src="${product.image}" alt="">
        </td>
        <td class="namaProduk">${product.name}</td>
        <td>
            <select name="size" id="size">
                <option value="S">Ukuran - S</option>
                <option value="M">Ukuran - M</option>
                <option value="L">Ukuran - L</option>
            </select>
        </td>
        <td id="jumlah">
            <button id="minus">−</button>
            <input type="number" value="1" id="input" readonly onchange="updateTotal()" />
            <button id="plus">+</button>
        </td>
        <td><input type="text" name="total-harga" id="total-harga" value="${product.price}" readonly></td>
    `;

    // Tambahkan <tr> ke tabel
    cartTable.appendChild(row);
}
// Fungsi untuk memuat data keranjang belanja dari IndexedDB dan menampilkannya di tabel
function loadCart() {
    getCartData().then((products) => {
        products.forEach((product) => {
            addToCartTable(product);
        });
    });
}

// Panggil fungsi ini saat halaman selesai dimuat
document.addEventListener('DOMContentLoaded', () => {
    loadCart();
});
document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.lihat-detail a i[data-feather="shopping-cart"]');

    cartButtons.forEach((button) => {
        button.parentElement.addEventListener('click', (event) => {
            event.preventDefault();

            // Ambil elemen card produk terkait
            const card = event.target.closest('.card-produk');
            const productImage = card.querySelector('.card-image img').src;
            const productName = card.querySelector('.nama-produk h5').innerText;
            const productPrice = card.querySelector('.harga-produk b').innerText;

            // Buat object produk untuk disimpan di IndexedDB
            const product = {
                name: productName,
                price: productPrice,
                image: productImage
            };

            // Tambahkan produk ke IndexedDB dan langsung ke tabel
            addToCart(product);  // Simpan ke IndexedDB
            addToCartTable(product);  // Tambahkan ke tabel
        });
    });
});
