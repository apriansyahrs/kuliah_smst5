<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-primary">
        <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Profile
          Mahasiswa</h4>
      </div>
      <div class="card-body">

        <a href="index.php?page=form_datamahasiswa" class="btn btn-primary">Tambah</a>
        <p></p>

      </div>

      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered no-wrap">
          <thead>
            <tr>
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
                <td><?= "$i"; ?></td>
                <td><?= "$rmhs[nim_mahasiswa]"; ?></td>
                <td><?= "$rmhs[nm_mahasiswa]"; ?></td>
                <td><?= "$rmhs[alamat]"; ?></td>
                <td><?= "$rmhs[gender]"; ?></td>
                <td>
                  <a href="#" class="btn btn-info">Detail</a>
                </td>
              </tr>
            <?php
              $i++;
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
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
    </div>
  </div>
</div>
</div>
<!-- order table -->