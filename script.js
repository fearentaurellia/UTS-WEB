function confirmClick() {
    if (confirm("Apakah Anda Ingin Mengunjungi Halaman ini?")) {
        window.location.href = "facialwash.html";
    } else {
        window.location.href = "index.html";
    }
}