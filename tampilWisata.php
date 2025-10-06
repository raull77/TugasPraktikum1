<!DOCTYPE html>
<html>
<head>
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #90EE90;
        }
        
    </style>
</head>
<body>

<h2 style="text-align:center;">Daftar Wisata</h2>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>

<?php
// Koneksi database
$connect = mysqli_connect("localhost", "root", "", "json");

// Query data
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);

// Tampilkan data ke tabel
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['landmark']."</td>";
    echo "<td>".$row['tarif']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
