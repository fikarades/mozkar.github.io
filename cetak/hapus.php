<?php
include '../koneksi.php';
$id = $_GET["nama"];

$hapus = mysqli_query($abc, "DELETE FROM  `operator` WHERE `Nama` = '$id'");

if ($hapus) {
    ?>   
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'http://localhost/SPBU/cetak/data_pegawai.php';
    </script>  
    <?php
}

?>