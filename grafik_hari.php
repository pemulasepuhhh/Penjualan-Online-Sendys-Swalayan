<?php
include "koneksi.php";

$query = "SELECT 
                p.tgl_pesan AS tanggal, 
                SUM(dp.jumlah * pr.harga) AS total_penjualan
            FROM 
                pesan p
            JOIN 
                detil_pesan dp ON p.id_pesan = dp.id_pesan
            JOIN 
                produk pr ON dp.id_produk = pr.id_produk
            GROUP BY 
                p.tgl_pesan
            ORDER BY 
                p.tgl_pesan;
            ";

$result = $conn->query($query);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['tanggal'];  
    $data[] = (float)$row['total_penjualan'];  
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Penjualan per Hari</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Grafik Penjualan per Hari</h2>
    
    <canvas id="salesChart" width="400" height="200"></canvas>
    <script>
        const labels = <?php echo json_encode($labels); ?>;  
        const data = <?php echo json_encode($data); ?>;      
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line', 
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Penjualan',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        },
                        ticks: {
                            autoSkip: true,
                            maxRotation: 90,
                            minRotation: 45
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
