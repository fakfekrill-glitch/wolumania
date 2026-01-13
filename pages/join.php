<?php if(!defined('SECURE_ACCESS')) die('Direct access not permitted'); 

// Gambar (Ganti URL ini dengan foto aksi/koreo kalian yang paling keren)
$img_join_1 = "https://www.dbl.id/uploads/post/2025/09/22/Penuh%20Sukacita%20SMAN%208%20Surabaya%20di%20DBL%20Arena.jpg"; 
$img_join_2 = "https://cdn0-production-images-kly.akamaized.net/2dXvRG9rHfeamg1CUfBEALstwHQ=/800x450/smart/filters:quality(75):strip_icc()/kly-media-production/medias/2891331/original/068657000_1566623036-Opening_Party_Honda_DBL_East_Java_Series__2019_-_North_Region.jpg"; 
?>

<style>
    /* Styling khusus halaman Join */
    .join-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin: 30px 0;
    }
    
    .join-card {
        flex: 1;
        min-width: 300px;
        border: 2px solid #fff;
        padding: 5px;
        border-radius: 4px;
        transition: transform 0.3s ease;
    }

    .join-card:hover {
        transform: scale(1.02);
        border-color: #00d4ff;
    }

    .join-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }

    .join-text {
        max-width: 900px; /* Lebar teks ditambah biar enak bacanya */
        margin: 0 auto 40px auto;
        text-align: center;
    }
</style>

<div class="container fade-in" style="text-align: center;">
    <h1>GABUNG WOLUMANIA</h1>
    
    <div class="join-text">
        <p>
            Wolumania adalah manifestasi nyata dari loyalitas tanpa batas. Di sini kita belajar arti kebersamaan, berdiri sama tinggi, duduk sama rendah. Bukan sekadar komunitas, tapi keluarga besar yang dipersatukan oleh cinta pada almamater dan kebanggaan mengenakan atribut Biru Dongker.
        </p>
    </div>

    <div class="join-container">
        <div class="join-card">
            <img src="<?php echo $img_join_1; ?>" alt="Aksi Wolumania 1">
        </div>
        <div class="join-card">
            <img src="<?php echo $img_join_2; ?>" alt="Aksi Wolumania 2">
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h3 style="margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px;">Siap Jadi Bagian dari Kami?</h3>
        
        <a href="https://docs.google.com/forms" target="_blank" class="btn-outline" style="padding: 15px 50px; font-size: 1.2rem; background: #fff; color: #051024;">
            ISI FORMULIR PENDAFTARAN
        </a>
        
        <p style="margin-top: 15px; font-size: 0.9rem; color: #aaa;">*Wajib siswa aktif SMA Negeri 8 Surabaya</p>
    </div>
</div>