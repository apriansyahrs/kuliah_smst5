<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = mysqli_query($con, "INSERT INTO tbl_mahasiswa (nim_mahasiswa, nm_mahasiswa, alamat, gender) VALUES ('$_POST[nim_mahasiswa]', '$_POST[nm_mahasiswa]', '$_POST[alamat]', '$_POST[gender]') ") or die(mysqli_query($con));

  if (mysqli_affected_rows($con) > 0) {
    echo "  <script>
              alert('Data Berhasil Ditambah!');
              document.location='index.php?page=datamahasiswa';
            </script> ";
  } else {
    echo "  <script>
              alert('Data Gagal Ditambah!');
              document.location='index.php?page=datamahasiswa';
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
                  <label>NIDN</label>
                  <input type="text" class="form-control" placeholder="NIM" name="nim_mahasiswa" autofocus>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" class="form-control" placeholder="NAMA LENGKAP" name="nm_mahasiswa">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Almat..." name="alamat"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom1" value="Laki-laki" name="gender">
                      <label class="custom-control-label" for="custom1">Laki-laki</label>
                    </div>&nbsp;&nbsp;

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="custom2" value="Perempuan" name="gender">
                      <label class="custom-control-label" for="custom2">Perempuan</label>
                    </div>

                  </div>
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