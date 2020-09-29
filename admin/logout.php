<?php
session_start();
$_SESSION['namaadmin'] = '';
unset($_SESSION['namaadmin']);
session_unset();
session_destroy();
echo "  <script>
            alert('Berhasil Logout')
            document.location='../';
        </script> ";
?>

