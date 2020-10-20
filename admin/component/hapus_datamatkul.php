<?php
include '../koneksi.php';

mysqli_query($con, " DELETE FROM tbl_matkul  WHERE id_matkul = $_GET[id]") or die(mysqli_query($con));
echo "  <script>
          alert('Data Berhasil Dihapus!');
          document.location='index.php?page=datamatkul';
        </script> ;";
header('location: index.php?page=datamatkuls');
