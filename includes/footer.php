<?php if(!defined('SECURE_ACCESS')) die('Direct access not permitted'); ?>
    
    <footer>
        <div style="text-align: center; padding: 30px; color: #555; font-size: 0.9rem;">
            &copy; <?php echo date("Y"); ?> Wolumania Surabaya. All Rights Reserved.
        </div>
    </footer>

    <script>
        // Fungsi untuk mendeteksi scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal, .gallery-item, .join-card");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100; // Jarak trigger dari bawah layar

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                    // Khusus gallery item & card biar ada efek fade in juga
                    reveals[i].style.opacity = "1";
                    reveals[i].style.transform = "translateY(0)";
                }
            }
        }

        // Jalankan saat scroll
        window.addEventListener("scroll", reveal);
        // Jalankan sekali saat loading biar yg di atas langsung muncul
        reveal();
    </script>
</body>
</html>