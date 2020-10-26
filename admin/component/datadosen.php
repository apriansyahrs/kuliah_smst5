    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Profile
                        Dosen</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=data_dosen_multidelete" method="POST">

                        <a href="index.php?page=form_datadosen" class="btn btn-primary">Tambah</a>

                        <input type="submit" value="Delete Select Data" name="tombol_hapus" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                        <p></p>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No.</th>
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../koneksi.php';
                                    $sqld = mysqli_query($con, "SELECT * FROM tbl_dosen");
                                    $i = 1;
                                    while ($rd = mysqli_fetch_array($sqld)) {
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" name="id_dosen[]" value="<?= "$rd[id_dosen]"; ?>"></td>
                                            <td><?= "$i"; ?></td>
                                            <td><?= "$rd[nidn_dosen]"; ?></td>
                                            <td><?= "$rd[nm_dosen]"; ?></td>
                                            <td><?= "$rd[alamat]"; ?></td>
                                            <td><?= "$rd[gender]"; ?></td>
                                            <td>
                                                <a href="index.php?page=form_datadosen_edit&id=<?= $rd['id_dosen']; ?>" class="btn btn-warning">Edit</a>
                                                <a href="index.php?page=hapus_datadosen&id=<?= $rd['id_dosen']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
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
                                        <th>NIDN Dosen</th>
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