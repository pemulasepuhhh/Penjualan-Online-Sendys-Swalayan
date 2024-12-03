<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Kelompok</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .swiper-container {
            width: 60%; 
            max-width: 700px;
            margin: 0 auto; 
            overflow: hidden; 
            border-radius: 15px; 
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            opacity: 0;
            transition: opacity 0.5s ease-in-out; 
        }

        .swiper-slide.swiper-slide-active {
            opacity: 1; 
            transform: scale(1); 
        }

        .swiper-slide.swiper-slide-next,
        .swiper-slide.swiper-slide-prev {
            transform: scale(0.8); 
            opacity: 0.5;
        }


    .card2 {
        background: linear-gradient(135deg, #6dd5ed, #2193b0); 
        border-radius: 15px; 
        padding: 20px;
        width: 90%; 
        max-width: 500px; 
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
        text-align: center;
        color: #fff; 
    }

    .saya {
        display: block;
        margin: 0 auto 15px auto; 
        width: 120px; 
        height: 120px; 
        border-radius: 50%; 
        object-fit: cover;
        border: 3px solid #fff;
    }

    table {
        margin: 0 auto;
        text-align: left;
        border-spacing: 8px; 
        font-size: 14px; 
        color: #f3f3f3; 
    }

    /* Heading pada kartu */
    h2 {
        color: #fff; 
        font-weight: bold;
        font-size: 20px; 
        margin-bottom: 15px; 
    }

    /* Tombol Panah */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff; 
            background-color: rgba(0, 0, 0, 0.4); 
            border-radius: 50%; 
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
        }

    /* Hover Tombol */
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: rgba(255, 255, 255, 0.7); 
            color: #000; 
            transform: scale(1.2); 
        }

    /* Posisi Tombol */
        .swiper-button-next {
            right: 20px;
        }

        .swiper-button-prev {
            left: 55%;
        }


    /* Responsif untuk Perangkat Kecil */
    @media (max-width: 768px) {
        .swiper-container {
            width: 90%; 
        }
        .swiper-button-next,
        .swiper-button-prev {
            width: 30px;
            height: 30px;
        }
        .card2 {
            width: 100%; 
        }
    }


    </style>

</head>

<body>
    <a href="index.php">Home</a> / About Us

    <div class="about-us-container">
    <h2>About Us</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- angoota pertama -->
            <div class="swiper-slide">
                <div class="card2">
                    <h2>Biodata Anggota</h2>
                    <img src="http://localhost/tugas_andika/BIODATA POTO/ANDIKA.jpeg" class="saya" alt="ANDIKA.jpg">
                    <table>
                        <tr><td>Nama</td><td>:</td><td>Andika Kristersen</td></tr>
                        <tr><td>NIM</td><td>:</td><td>C2355201001</td></tr>
                        <tr><td>Tempat Lahir</td><td>:</td><td>Kuala Kurun</td></tr>
                        <tr><td>Jenis Kelamin</td><td>:</td><td>Laki-laki</td></tr>
                        <tr><td>Jurusan</td><td>:</td><td>Teknik Informatika</td></tr>
                    </table>
                </div>
            </div>
            <!--anggota kedua-->
            <div class="swiper-slide">
            <div class="card2">
                <h2>Biodata Anggota</h2>
                <img src="http://localhost/tugas_andika/BIODATA POTO/VALLEN.jpeg" class="saya" alt="Foto Anggota">
                    <table>
                        <tr><td>Nama</td><td>:</td><td>Vallen Saputra</td></tr>
                        <tr><td>NIM</td><td>:</td><td>C2355201017</td></tr>
                        <tr><td>Tempat Lahir</td><td>:</td><td>Kutai Kartanegara</td></tr>
                        <tr><td>Jenis Kelamin</td><td>:</td><td>Laki-laki</td></tr>
                        <tr><td>Jurusan</td><td>:</td><td>Teknik Informatika</td></tr>
                    </table>
                </div>
            </div>
            <!--anggota ketiga-->
            <div class="swiper-slide">
                <div class="card2">
                    <h2>Biodata Anggota</h2>
                    <img src="http://localhost/tugas_andika//BIODATA POTO/YEREMIA.jpeg" class="saya" alt="Foto Anggota">
                    <table>
                        <tr><td>Nama</td><td>:</td><td>Yeremia Paniano T.Lalin</td></tr>
                        <tr><td>NIM</td><td>:</td><td>C2355201018</td></tr>
                        <tr><td>Tempat Lahir</td><td>:</td><td>Kasongan</td></tr>
                        <tr><td>Jenis Kelamin</td><td>:</td><td>Laki-laki</td></tr>
                        <tr><td>Jurusan</td><td>:</td><td>Teknik Informatika</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
    <script>
       const swiper = new Swiper('.swiper-container', {
            loop: true, 
            centeredSlides: true, 
            slidesPerView: 1, 
            spaceBetween: 30, 
            navigation: {
                nextEl: '.swiper-button-next', 
                prevEl: '.swiper-button-prev', 
            },
        pagination: {
        el: '.swiper-pagination', 
        clickable: true, 
        },
    });
    </script>

</body>
</html>
