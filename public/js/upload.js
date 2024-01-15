// public/js/upload.js

// Tangkap elemen tombol unggah dan wadah galeri gambar
const fileInput = document.getElementById('fileInput');
const gallery = document.getElementById('gallery');

// Tambahkan event listener untuk tombol unggah
fileInput.addEventListener('change', handleFileSelect);

// Fungsi untuk menampilkan gambar yang dipilih oleh pengguna
function handleFileSelect(event) {
    const files = event.target.files;

    for (const file of files) {
        const reader = new FileReader();

        reader.onload = function (event) {
            const img = document.createElement('img');
            img.src = event.target.result;
            gallery.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
}

// Tambahkan event listener untuk tombol unggah
const uploadButton = document.getElementById('uploadButton');

uploadButton.addEventListener('click', () => {
    const files = fileInput.files;
    const formData = new FormData();

    for (const file of files) {
        formData.append('image[]', file);
    }

    // Kirim data gambar menggunakan AJAX
    fetch('/upload', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        gallery.innerHTML = '';
    })
    .catch(error => {
        alert('Terjadi kesalahan saat mengunggah gambar.');
    });
});
