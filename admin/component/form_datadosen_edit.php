<?php
include '../koneksi.php';

$sqld = mysqli_query($con, "SELECT * FROM tbl_dosen WHERE id_dosen = $_GET[id]");
$rd = mysqli_fetch_array($sqld);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = mysqli_query($con, "UPDATE tbl_dosen
                                SET 
                                nidn_dosen = '$_POST[nidn_dosen]',
                                nm_dosen = '$_POST[nm_dosen]',
                                alamat = '$_POST[alamat]',
                                gender =' $_POST[gender]'
                                WHERE id_dosen = '$_POST[id_dosen]' ") or die(mysqli_query($con));

  echo "  <script>
              alert('Data Berhasil Diedit!');
              document.location='index.php?page=datadosen';
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
                  <label>NIDN</label>
                  <input type="hidden" class="form-control" placeholder="NIDN" name="id_dosen" value="<?= "$rd[id_dosen]"; ?>">
                  <input type="text" class="form-control" placeholder="NIDN" name="nidn_dosen" value="<?= "$rd[nidn_dosen]"; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" class="form-control" placeholder="NAMA LENGKAP" name="nm_dosen" value="<?= "$rd[nm_dosen]"; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"><?= "$rd[alamat]"; ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom1" value="Laki-laki" name="gender" <?php if ($rd['gender'] == 'Laki-laki') echo 'checked="checked"'; ?>>
                      <label class="custom-control-label" for="custom1">Laki-laki</label>
                    </div>&nbsp;&nbsp;

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom2" value="Perempuan" name="gender" <?php if ($rd['gender'] == 'Perempuan') echo 'checked="checked"'; ?>>
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