// Tambah kode untuk menampilkan menu
document.querySelectorAll('nav a').forEach((link) => {
    link.addEventListener('click', () => {
        console.log(link.textContent);
    });
});

// Tambah kode untuk menampilkan hero image
const image = document.querySelector('#hero-image');
image.src = 'image.jpg';

