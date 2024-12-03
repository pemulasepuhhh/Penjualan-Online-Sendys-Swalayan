<?php
session_start();
include "header.php";
include "nav.php";

$page = isset($_GET['page'])? $_GET['page']: "home";
switch ($page) {
    case 'pelanggan' : include "pelanggan.php"; break;
    case 'produk' : include "produk.php"; break;
    case 'penjualan' : include "penjualan.php"; break;
    case 'penjualan_per_tanggal' : include "penjualan_per_tanggal.php"; break;
    case 'penjualan_per_pelanggan' : include "penjualan_per_pelanggan.php"; break;
    case 'penjualan_per_produk' : include "penjualan_per_produk.php"; break;
    case 'pelanggan_add' : include "pelanggan_add.php"; break;
    case 'pelanggan_edit' : include "pelanggan_edit.php"; break;
    case 'pelanggan_del' : include "pelanggan_del.php"; break;
    case 'produk_add' : include "produk_add.php"; break;
    case 'produk_edit' : include "produk_edit.php"; break;
    case 'produk_del' : include "produk_del.php"; break;
     case 'detilpenjualan' : include "detilpenjualan.php"; break;
   case 'aboutus' : include "aboutus.php"; break;
   case 'grafik_hari' : include "grafik_hari.php"; break;
   case 'grafik_bulan' : include "grafik_bulan.php"; break;
   case 'grafik_tahun' : include "grafik_tahun.php"; break;
    case 'home':
    default : include "home.php";
}

include "footer.php";
?>