// Menampilkan spinner (misalnya saat mulai loading)
document.getElementById('spinner').style.display = 'block';

// Menyembunyikan spinner setelah 3 detik (simulasi proses loading selesai)
setTimeout(function() {
    document.getElementById('spinner').style.display = 'none';
}, 3000); // 3000 ms = 3 detik