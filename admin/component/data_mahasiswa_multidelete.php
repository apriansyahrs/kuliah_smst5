<?php

include '../koneksi.php';
if (isset($_POST["id_mahasiswa"])) {
  foreach ($_POST["id_mahasiswa"] as $id_mahasiswa) {
    $del = $con->prepare("DELETE FROM tbl_mahasiswa WHERE id_mahasiswa=?");
    $del->bind_param("i", $id_mahasiswa);
    $del->execute();
  }
}
echo
  "  <script>
          alert('Data Berhasil Dihapus!');
          document.location='index.php?page=datamahasiswa';
        </script> ;";
