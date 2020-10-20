<?php
include '../koneksi.php';

$sqlmk = mysqli_query($con, "SELECT * FROM tbl_matkul WHERE id_matkul = $_GET[id]");
$rmk = mysqli_fetch_array($sqlmk);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = mysqli_query($con, "UPDATE tbl_matkul
                                SET 
                                kd_matkul = '$_POST[kd_matkul]',
                                nm_matkul = '$_POST[nm_matkul]',
                                sks = '$_POST[sks]'
                                WHERE id_matkul = '$_POST[id_matkul]' ") or die(mysqli_query($con));

  echo "  <script>
              alert('Data Berhasil Diedit!');
              document.location='index.php?page=datamatkul';
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
                  <label>KODE</label>
                  <input type="hidden" class="form-control" placeholder="Kode Matkul" name="id_matkul" value="<?= "$rmk[id_matkul]"; ?>">
                  <input type="text" class="form-control" placeholder="Kode Matkul" name="kd_matkul" value="<?= "$rmk[kd_matkul]"; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" class="form-control" placeholder="Nama Matkul" name="nm_matkul" value="<?= "$rmk[nm_matkul]"; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>SKS</label>
                  <select class="custom-select mr-sm-2" name="sks">
                    <!-- <option selected>Choose...</option> -->
                    <option value="1" <?php if ($rmk['sks'] == '1') echo 'selected'; ?>>One</option>
                    <option value="2" <?php if ($rmk['sks'] == '2') echo 'selected'; ?>>Two</option>
                    <option value="3" <?php if ($rmk['sks'] == '3') echo 'selected'; ?>>Three</option>
                    <option value="4" <?php if ($rmk['sks'] == '4') echo 'selected'; ?>>Four</option>
                    <option value="5" <?php if ($rmk['sks'] == '5') echo 'selected'; ?>>Five</option>
                  </select>
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