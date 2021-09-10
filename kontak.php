<?php
$conn = mysqli_connect("localhost", "root", "", "kontak");
$query = "SELECT * FROM labeltabel ";
$result = mysqli_query($conn, $query) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1' >
<tr> <th> No </th> <th> Nama </th> <th> JKel </th> <th> Email </th> <th> Alamat </th> <th> Kota </th> <th> Pesan </th> </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>" . $row['id'] . "</td>
    <td>" . $row['nama'] . "</td>
    <td>" . $row['jkel'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['alamat'] . "</td>
    <td>" . $row['kota'] . "</td>
    <td>" . $row['pesan'] . "</td>
    </tr>";
}
