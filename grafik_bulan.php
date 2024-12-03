<?php
include "koneksi.php";

// Query untuk penjualan per bulan
$query = "SELECT DATE_FORMAT(p.tgl_pesan, '%Y-%m') AS bulan, 
                 SUM(dp.jumlah * pr.harga) AS total_penjualan
          FROM pesan p
          JOIN detil_pesan dp ON p.id_pesan = dp.id_pesan
          JOIN produk pr ON dp.id_produk = pr.id_produk
          GROUP BY DATE_FORMAT(p.tgl_pesan, '%Y-%m')
          ORDER BY bulan";

$result = $conn->query($query);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['bulan'];  // Bulan
    $data[] = (float)$row['total_penjualan'];  // Total penjualan
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Penjualan per Bulan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Grafik Penjualan per Bulan</h2>
    <canvas id="salesChart" width="400" height="200"></canvas>
    <script>
        const labels = <?php echo json_encode($labels); ?>;  
        const data = <?php echo json_encode($data); ?>;      

        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: labels, 
                datasets: [{
                    label: 'Total Penjualan',
                    data: data, 
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Total Penjualan'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
