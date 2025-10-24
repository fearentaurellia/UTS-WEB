<?php
include 'connect.php';

$query = "SELECT * FROM produk";
$result = pg_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Produk AureaSkin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Produk AureaSkin</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID Produk</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
        </tr>

        <?php
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_produk'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['kategori'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
