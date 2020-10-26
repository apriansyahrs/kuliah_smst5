<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Profile
          Mata Kuliah</h4>
      </div>
      <div class="card-body">

        <form action="index.php?page=data_matkul_multidelete" method="POST">
          <a href="index.php?page=form_datamatkul" class="btn btn-primary">Tambah</a>

          <input type="submit" value="Delete Select Data" name="tombol_hapus" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">

          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th></th>
                  <th>No.</th>
                  <th>KODE</th>
                  <th>NAMA</th>
                  <th>SKS</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../koneksi.php';
                $sqlmk = mysqli_query($con, "SELECT * FROM tbl_matkul");
                $i = 1;
                while ($rmk = mysqli_fetch_array($sqlmk)) {
                ?>
                  <tr>
                    <td><input type="checkbox" name="id_matkul[]" value="<?= "$rmk[id_matkul]"; ?>"></td>
                    <td><?= "$i"; ?></td>
                    <td><?= "$rmk[kd_matkul]"; ?></td>
                    <td><?= "$rmk[nm_matkul]"; ?></td>
                    <td><?= "$rmk[sks]"; ?></td>
                    <td>
                      <a href="index.php?page=form_datamatkul_edit&id=<?= "$rmk[id_matkul]"; ?>" class="btn btn-warning">Edit</a>
                      <a href="index.php?page=hapus_datamatkul&id=<?= "$rmk[id_matkul]"; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
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
                  <th>KODE</th>
                  <th>NAMA</th>
                  <th>SKS</th>
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