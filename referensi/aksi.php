<!-- untuk mengeluarkan data -->
<div class="card">
    <div class="card-header text-white bg-secondary">
        Data Mahasiswa
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Status</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "select * from mahasiswa order by id desc";
                $q2 = mysqli_query($koneksi, $sql2);
                $urut = 1;
                while ($r2 = mysqli_fetch_array($q2)) {
                    $id = $r2['id'];
                    $nim = $r2['npm'];
                    $nama = $r2['nama lengkap'];
                    $alamat = $r2['fakultas'];
                    $fakultas = $r2['jurusan'];
                    $fakultas = $r2['status'];
                    $fakultas = $r2['aksi'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td scope="row"><?php echo $npm ?></td>
                        <td scope="row"><?php echo $namalengkap ?></td>
                        <td scope="row"><?php echo $fakultas ?></td>
                        <td scope="row"><?php echo $jurusan ?></td>
                        <td scope="row"><?php echo $status ?></td>
                        <td scope="row"><?php echo $aksi ?></td>
                        <td scope="row">
                            <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                    class="btn btn-warning">Edit</button></a>
                            <a href="index.php?op=delete&id=<?php echo $id ?>"
                                onclick="return confirm('Yakin mau delete data?')"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>
</div>
</body>

</html>