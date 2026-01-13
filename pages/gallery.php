<?php if(!defined('SECURE_ACCESS')) die('Direct access not permitted'); 
// Array URL Gambar Gallery (Ganti URL ini dengan foto asli koreo/aksi kalian)
$gallery_images = [
    "https://www.dbl.id/thumbs/extra-large/uploads/post/2025/09/11/Gagahnya%20Sung%20Jin-woo%20Menjadi%20Inspirasi%20Koreografi%20Wolumania!.jpg", // Aksi 1
    "https://www.dbl.id/thumbs/extra-large/uploads/post/2024/08/30/koreografi-wolu-mania.jpg", // Aksi 2
    "https://www.dbl.id/thumbs/extra-large/uploads/post/2025/08/29/Gaya%20WPAP%20Berikut%20Maknanya%20Dalam%20Koreografi%20Wolumania.jpg", // Aksi 3
    "https://www.dbl.id/uploads/post/2024/09/08/koreo-wolu-mania%20(2).jpg", // Aksi 4
    "https://www.dbl.id/uploads/post/2024/09/08/koreo-wolu-mania%20(1).jpg", // Aksi 5
    "https://www.dbl.id/thumbs/extra-large/uploads/post/2024/08/22/koreo-1-wolu-mania-sman-8-surabaya.jpg"  // Aksi 6
];
?>
<div class="container fade-in">
    <h1>Galeri Aksi & Koreo</h1>
    <p>Bukti nyata kreativitas dan totalitas di tribun.</p>
    <div class="gallery-grid">
        <?php foreach($gallery_images as $img): ?>
        <div class="gallery-item">
            <img src="<?php echo $img; ?>" alt="Aksi Wolumania">
        </div>
        <?php endforeach; ?>
    </div>
</div>