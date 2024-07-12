<?php
include 'header.php';
include_once 'koneksi.php';

// Pastikan ada ID yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data mahasiswa berdasarkan ID
    $query = "SELECT * FROM tb_data WHERE id = $id";
    $result = $konek->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

// Proses form jika ada POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $status = $_POST['status'];

    $update_query = "UPDATE tb_data SET npm='$npm', nama_lengkap='$nama_lengkap', fakultas='$fakultas', jurusan='$jurusan', status='$status' WHERE id=$id";

    if ($konek->query($update_query) === TRUE) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $update_query . "<br>" . $konek->error;
    }
}
?>

<html>
<h2>Edit Data Mahasiswa</h2>
<form method="POST" action="">
    <label for="npm">NPM:</label>
    <input type="text" id="npm" name="npm" value="<?php echo $row['npm']; ?>" required><br><br>

    <label for="nama_lengkap">Nama Lengkap:</label>
    <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"
        required><br><br>

    <label for="fakultas">Fakultas:</label>
    <input type="text" id="fakultas" name="fakultas" value="<?php echo $row['fakultas']; ?>" required><br><br>

    <label for="jurusan">Jurusan:</label>
    <input type="text" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>" required><br><br>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>" required><br><br>

    <input type="submit" value="Update">
</form>

<a href="index.php">Kembali ke Daftar</a>

<?php include 'footer.php' ?>

</html>