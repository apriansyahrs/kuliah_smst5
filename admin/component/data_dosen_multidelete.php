<?php

include '../koneksi.php';
if (isset($_POST["id_dosen"])) {
  foreach ($_POST["id_dosen"] as $id_dosen) {
    $del = $con->prepare("DELETE FROM tbl_dosen WHERE id_dosen=?");
    $del->bind_param("i", $id_dosen);
    $del->execute();
  }
}
echo
  "  <script>
          alert('Data Berhasil Dihapus!');
          document.location='index.php?page=datadosen';
        </script> ;";
