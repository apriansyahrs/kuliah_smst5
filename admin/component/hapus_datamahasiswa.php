<?php
include '../koneksi.php';

mysqli_query($con, " DELETE FROM tbl_mahasiswa  WHERE id_mahasiswa = $_GET[id]") or die(mysqli_query($con));
echo
" <script>
   alert('Data Berhasil Dihapus!');
   document.location='index.php?page=datamahasiswa';
  </script> ;";