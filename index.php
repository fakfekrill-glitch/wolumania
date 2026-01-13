<?php
// Security Header: Mencegah Clickjacking dan XSS dasar
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Define constant untuk keamanan file include
define('SECURE_ACCESS', true);

// Konfigurasi Gambar (5 Custom URL Utama + Gallery)
$bg_home = "https://www.dbl.id/uploads/post/2025/09/11/Wolumania%20kala%20merapatkan%20barisan%20dan%20menyanyikan%20Anthem.jpg"; // Foto Crowd/Suporter
$img_about = "https://media.discordapp.net/attachments/904596578961096785/1460569234403758244/Tim_basket_SMAN_8_Surabaya_dan_Wolumania_saat_menyanyikan_anthem.jpg?ex=69676499&is=69661319&hm=a1e68c1ba3e677ab7d161638e7e856043d138fbaed5ddb0f09e4ba1c75759287&=&format=webp&width=1423&height=658"; // Foto Spirit
$img_history = "https://images.unsplash.com/photo-1526666923127-b2970f64b422?w=500"; // Foto Old School/Gedung
$img_join = "https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=500"; // Foto Team

// Routing System (Secure Whitelist)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'history', 'gallery', 'join'];

include 'includes/header.php';

if (in_array($page, $allowed_pages)) {
    // Memanggil file dari folder pages
    include "pages/$page.php";
} else {
    echo "<div class='container'><h2>404 - Halaman Tidak Ditemukan</h2></div>";
}

include 'includes/footer.php';
?>