document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    // Fungsi untuk berpindah ke slide berikutnya
    function showNextSlide() {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add("active");
    }

    // Setel interval untuk berganti slide setiap 3 detik
    setInterval(showNextSlide, 3000);
});

document.addEventListener('DOMContentLoaded', function () {
    // Perubahan gaya saat hover pada menu
    const menuItems = document.querySelectorAll('.nav ul li a');
    menuItems.forEach(function(item) {
        item.addEventListener('mouseover', function() {
            this.style.color = 'black'; // Ubah warna teks saat hover
        });
        item.addEventListener('mouseout', function() {
            this.style.color = ''; // Kembalikan ke warna asli
        });
    });

    // Tambahkan event listener ke gambar di gallery
    const galleryImages = document.querySelectorAll('.Gallery img');
    galleryImages.forEach(function(image) {
        image.addEventListener('click', function() {
            alert('photo by: Salsabilla Putrihanda : ' + this.alt);
        });
    });

    // Toggle konten blog saat judul diklik
    const blogArticles = document.querySelectorAll('.Blog article');
    blogArticles.forEach(function(article) {
        const title = article.querySelector('h2');
        const content = article.querySelector('p');
        content.style.display = 'none'; // Sembunyikan konten awalnya

        title.addEventListener('click', function() {
            content.style.display = content.style.display === 'none' ? 'block' : 'none'; // Toggle konten
        });
    });
});
window.addEventListener('scroll', function() {
        const nav = document.querySelector('.nav');
        const hero = document.querySelector('#hero');

        if (window.scrollY > 100) {
            nav.style.opacity = 0.8;
        } else {
            nav.style.opacity = 1;
        }
        const modal = document.createElement('div');
    modal.className = 'modal';
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Welcome!</h2>
            <p>This is a modal popup example.</p>
        </div>
    `; 
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll(".slide");
        let currentSlide = 0;
    
        // Fungsi untuk berpindah ke slide berikutnya
        function showNextSlide() {
            // Hapus border dari slide yang sebelumnya aktif
            slides[currentSlide].classList.remove("active", "bordered");
    
            // Beralih ke slide berikutnya
            currentSlide = (currentSlide + 1) % slides.length;
    
            // Tambahkan kelas active dan bordered ke slide yang baru
            slides[currentSlide].classList.add("active", "bordered");
        }
    
        // Set interval untuk berganti slide setiap 3 detik
        setInterval(showNextSlide, 3000);
    });
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll(".slide");
        const captions = document.querySelectorAll(".caption"); // Ambil semua teks caption
        let currentSlide = 0;
    
        // Fungsi untuk berpindah ke slide berikutnya
        function showNextSlide() {
            slides[currentSlide].classList.remove("active");
            captions[currentSlide].classList.remove("active"); // Hapus kelas active dari teks yang tidak aktif
    
            currentSlide = (currentSlide + 1) % slides.length;
    
            slides[currentSlide].classList.add("active");
            captions[currentSlide].classList.add("active"); // Tambahkan kelas active ke teks yang aktif
        }
    
        setInterval(showNextSlide, 3000);
    });
});