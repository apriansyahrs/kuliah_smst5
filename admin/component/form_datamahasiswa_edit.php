<?php
include '../koneksi.php';

$sqlmhs = mysqli_query($con, "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = $_GET[id]");
$rmhs = mysqli_fetch_array($sqlmhs);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = mysqli_query($con, "UPDATE tbl_mahasiswa
                                SET 
                                nim_mahasiswa = '$_POST[nim_mahasiswa]',
                                nm_mahasiswa = '$_POST[nm_mahasiswa]',
                                alamat = '$_POST[alamat]',
                                gender =' $_POST[gender]'
                                WHERE id_mahasiswa = '$_POST[id_mahasiswa]' ") or die(mysqli_query($con));

  echo "  <script>
              alert('Data Berhasil Diedit!');
              document.location='index.php?page=datamahasiswa';
            </script> ";
}
?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form</h4>
      </div>
      <div class="card-body">
        <form method="POST">
          <div class="form-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>nim</label>
                  <input type="hidden" class="form-control" placeholder="nim" name="id_mahasiswa" value="<?= "$rmhs[id_mahasiswa]"; ?>">
                  <input type="text" class="form-control" placeholder="nim" name="nim_mahasiswa" value="<?= "$rmhs[nim_mahasiswa]"; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" class="form-control" placeholder="NAMA LENGKAP" name="nm_mahasiswa" value="<?= "$rmhs[nm_mahasiswa]"; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"><?= "$rmhs[alamat]"; ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom1" value="Laki-laki" name="gender" <?php if ($rmhs['gender'] == 'Laki-laki') echo 'checked="checked"'; ?>>
                      <label class="custom-control-label" for="custom1">Laki-laki</label>
                    </div>&nbsp;&nbsp;

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom2" value="Perempuan" name="gender" <?php if ($rmhs['gender'] == 'Perempuan') echo 'checked="checked"'; ?>>
                      <label class="custom-control-label" for="custom2">Perempuan</label>
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <div class="form-actions">
              <div class="text-right">
                <button type="submit" class="btn btn-info">Update Data</button>
                <!-- <button type="reset" class="btn btn-dark">Reset</button> -->
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>