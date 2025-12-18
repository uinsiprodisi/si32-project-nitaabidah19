// Konfirmasi hapus data
document.querySelectorAll(".btn-delete").forEach(btn => {
    btn.addEventListener("click", e => {
        if (!confirm("Yakin ingin menghapus film ini?")) {
            e.preventDefault();
        }
    });
});

// Efek navbar saat scroll
window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    if (header) {
        header.style.background =
            window.scrollY > 50 ? "#000" : "linear-gradient(#000,transparent)";
    }
});
