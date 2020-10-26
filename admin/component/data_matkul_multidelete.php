<?php

include '../koneksi.php';
if (isset($_POST["id_matkul"])) {
  foreach ($_POST["id_matkul"] as $id_matkul) {
    $del = $con->prepare("DELETE FROM tbl_matkul WHERE id_matkul=?");
    $del->bind_param("i", $id_matkul);
    $del->execute();
  }
}
echo
  "  <script>
          alert('Data Berhasil Dihapus!');
          document.location='index.php?page=datamatkul';
        </script> ;";
