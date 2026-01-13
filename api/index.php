<?php
// Security Header
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Define constant
define('SECURE_ACCESS', true);

// --- KONFIGURASI GAMBAR (Global) ---
$bg_home = "https://www.dbl.id/uploads/post/2025/09/11/Wolumania%20kala%20merapatkan%20barisan%20dan%20menyanyikan%20Anthem.jpg"; 
$img_about = "https://media.discordapp.net/attachments/904596578961096785/1460569234403758244/Tim_basket_SMAN_8_Surabaya_dan_Wolumania_saat_menyanyikan_anthem.jpg?ex=69676499&is=69661319&hm=a1e68c1ba3e677ab7d161638e7e856043d138fbaed5ddb0f09e4ba1c75759287&=&format=webp&width=1423&height=658"; 
$img_history = "https://images.unsplash.com/photo-1526666923127-b2970f64b422?w=500"; 
// Gambar Join (Array URL langsung diproses di page join, atau define disini juga boleh)

// --- ROUTING SYSTEM ---
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'history', 'gallery', 'join'];

// --- INCLUDE SYSTEM (Pake __DIR__ biar Absolute Path) ---

// Panggil Header
// __DIR__ . '/../' artinya: Dari folder api, mundur satu langkah ke root
include __DIR__ . '/../includes/header.php'; 

if (in_array($page, $allowed_pages)) {
    // Cek file
    $file_path = __DIR__ . "/../pages/$page.php";
    
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        echo "<div class='container' style='text-align:center; padding:50px;'><h2>Error: File halaman tidak ditemukan di server.</h2></div>";
    }
} else {
    echo "<div class='container' style='text-align:center; padding:50px;'><h2>404 - Halaman Tidak Ditemukan</h2></div>";
}

// Panggil Footer
include __DIR__ . '/../includes/footer.php';

?>

