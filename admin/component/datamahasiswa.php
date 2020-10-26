<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Profile
                    mahasiswa</h4>
            </div>
            <div class="card-body">

                <form action="index.php?page=data_mahasiswa_multidelete" method="POST">
                    <a href="index.php?page=form_datamahasiswa" class="btn btn-primary">Tambah</a>

                    <input type="submit" value="Delete Select Data" name="tombol_hapus" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                    <p></p>

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../koneksi.php';
                                $sqlmhs = mysqli_query($con, "SELECT * FROM tbl_mahasiswa");
                                $i = 1;
                                while ($rmhs = mysqli_fetch_array($sqlmhs)) {
                                ?>
                                    <tr>
                                        <td><input type="checkbox" name="id_mahasiswa[]" value="<?= "$rmhs[id_mahasiswa]"; ?>"></td>
                                        <td><?= "$i"; ?></td>
                                        <td><?= "$rmhs[nim_mahasiswa]"; ?></td>
                                        <td><?= "$rmhs[nm_mahasiswa]"; ?></td>
                                        <td><?= "$rmhs[alamat]"; ?></td>
                                        <td><?= "$rmhs[gender]"; ?></td>
                                        <td>
                                            <a href="index.php?page=form_datamahasiswa_edit&id=<?= "$rmhs[id_mahasiswa]"; ?>" class="btn btn-warning">Edit</a>
                                            <a href="index.php?page=hapus_datamahasiswa&id=<?= "$rmhs[id_mahasiswa]";  ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- order table -->