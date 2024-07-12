<?php
include'header.php';
include_once'koneksi.php';
$result = $konek -> query("SELECT * FROM biodata ORDER BY id DESC");
?>

<html>
<h2> NAMA - NAMA MAHASISWA TI B 2022 </h2>
<br>
<table>
    <tr>
        <th> No </th>
        <th> NPM </th>
        <th> Nama Lengkap </th>
        <th> Fakultas </th>
        <th> Jurusan </th>
        <th> Status </th>
        <th> Aksi </th>
    </tr>
<?php
$query = "SELECT * FROM biodata";
$result = $konek -> query($query);
if ($result -> num_rows > 0){
    $id = 1;
    while ($row = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td> $id </td>";
        echo "<td>" . $row['npm'] . "</td>";
        echo "<td>" . $row['nama_lengkap'] . "</td>";
        echo "<td>" . $row['fakultas'] . "</td>";
        echo "<td>" . $row['jurusan'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        $id++;
    }
} else{
    "Tidak ada data yang terhubung";
}
$konek -> close();
?>
</table>
<?php include'footer.php'?>
</html>