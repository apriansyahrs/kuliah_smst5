<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = mysqli_query($con, "INSERT INTO tbl_matkul (kd_matkul, nm_matkul, sks) VALUES ('$_POST[kd_matkul]', '$_POST[nm_matkul]', '$_POST[sks]') ") or die(mysqli_query($con));

  if (mysqli_affected_rows($con) > 0) {
    echo "  <script>
              alert('Data Berhasil Ditambah!');
              document.location='index.php?page=datamatkul';
            </script> ";
  } else {
    echo "  <script>
              alert('Data Gagal Ditambah!');
              document.location='index.php?page=datamatkul';
            </script> ";
  }
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
                  <input type="text" class="form-control" placeholder="Kode Matkul" name="kd_matkul" autofocus>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" class="form-control" placeholder="Nama Matkul" name="nm_matkul">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>SKS</label>
                  <select class="custom-select mr-sm-2" name="sks">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="form-actions">
              <div class="text-right">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-dark">Reset</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>