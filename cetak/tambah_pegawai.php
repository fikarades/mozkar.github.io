<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pegawai.css">
    <title>Document</title>
</head>
<body>
<!-- bagian menu -->
<div class="nav">
    <div class="logo"><h1>SPBU 84.976.03</h1></div>
    <ul>
    <li><a href="http://localhost/SPBU/cetak">Kembali</a></li>
        
    </ul>
</div>
<br>

<!-- akhir menu -->






    <!-- dasar -->
<div class="dasar">
 <!-- bagian isi -->
    <div class="isi">
    <?php
   if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
    $nama=$_GET['nama'];
   }?>

<table class="table1">
<tr>
        <td colspan="3">Penjualan BBM <?php echo $bl;echo " "; echo $th; ?></td>
        </tr>
        <tr>
        <td colspan="3">Nama Pegawai : <?php echo $nama;?></td>
        </tr>
</table>
<div>
<table border="1" cellspacing="0">
        
        <tr>
        <td colspan="3">A. Premium</td>
        </tr>
        <tr>
        <td>tanggal</td>
            <td>Liter</td>
            <td>Uang</td>
        </tr>
        <?php 
        include '../koneksi.php';
        $tampil=mysqli_query($abc, "SELECT `liter`,`hasil_penjualan`,`tanggal` FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Premium' AND `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
        $n=$j['liter'];
        $na=$j['hasil_penjualan'];
        $nan=$j['tanggal'];
        $lit=number_format($n,2);
        $uang=number_format($na,2);

        ?>
        <tr>
        <td><?php echo $nan;?></td>
            <td><?php echo $lit;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
        </tr>
        
        <?php } ?>
        <?php $tampil=mysqli_query($abc, "SELECT SUM(`liter`),SUM(`hasil_penjualan`) FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Premium' AND `bulan`='$bl' AND `tahun`='$th'");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['SUM(`liter`)'];
        $sh=$j['SUM(`hasil_penjualan`)'];
        $slit=number_format($sl,2);
        $shas=number_format($sh,2);

        ?>
        <tr>
        <td>Total</td>
            <td> 
            <?php echo $slit;?>
             </td>
             <td> 
            <?php echo "Rp."; echo $shas;?>
             </td>
        </tr>
        <?php } ?>
   </table>

   <table border="1" cellspacing="0">
        
        <tr>
        <td colspan="3">B. Pertamax</td>
        </tr>
        <tr>
        <td>tanggal</td>
            <td>Liter</td>
            <td>Uang</td>
        </tr>
        <?php 
        include '../koneksi.php';
        $tampil=mysqli_query($abc, "SELECT `liter`,`hasil_penjualan`,`tanggal` FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
        $n=$j['liter'];
        $na=$j['hasil_penjualan'];
        $nan=$j['tanggal'];
        $lit=number_format($n,2);
        $uang=number_format($na,2);

        ?>
        <tr>
        <td><?php echo $nan;?></td>
            <td><?php echo $lit;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
        </tr>
        
        <?php } ?>
        <?php $tampil=mysqli_query($abc, "SELECT SUM(`liter`),SUM(`hasil_penjualan`) FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th'");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['SUM(`liter`)'];
        $sh=$j['SUM(`hasil_penjualan`)'];
        $slit=number_format($sl,2);
        $shas=number_format($sh,2);

        ?>
        <tr>
        <td>Total</td>
            <td> 
            <?php echo $slit;?>
             </td>
             <td> 
            <?php echo "Rp."; echo $shas;?>
             </td>
        </tr>
        <?php } ?>
   </table>
</div>
   
<div>
<!-- Pertalite -->
<table border="1" cellspacing="0">
        
        <tr>
        <td colspan="3">C. Pertalite</td>
        </tr>
        <tr>
        <td>tanggal</td>
            <td>Liter</td>
            <td>Uang</td>
        </tr>
        <?php 
        include '../koneksi.php';
        $tampil=mysqli_query($abc, "SELECT `liter`,`hasil_penjualan`,`tanggal` FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
        $n=$j['liter'];
        $na=$j['hasil_penjualan'];
        $nan=$j['tanggal'];
        $lit=number_format($n,2);
        $uang=number_format($na,2);

        ?>
        <tr>
        <td><?php echo $nan;?></td>
            <td><?php echo $lit;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
        </tr>
        
        <?php } ?>
        <?php $tampil=mysqli_query($abc, "SELECT SUM(`liter`),SUM(`hasil_penjualan`) FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th'");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['SUM(`liter`)'];
        $sh=$j['SUM(`hasil_penjualan`)'];
        $slit=number_format($sl,2);
        $shas=number_format($sh,2);

        ?>
        <tr>
        <td>Total</td>
            <td> 
            <?php echo $slit;?>
             </td>
             <td> 
            <?php echo "Rp."; echo $shas;?>
             </td>
        </tr>
        <?php } ?>
   </table>


   <!-- Biosolar -->
   <table border="1" cellspacing="0">
        
        <tr>
        <td colspan="3">D. Biosolar</td>
        </tr>
        <tr>
        <td>tanggal</td>
            <td>Liter</td>
            <td>Uang</td>
        </tr>
        <?php 
        include '../koneksi.php';
        $tampil=mysqli_query($abc, "SELECT `liter`,`hasil_penjualan`,`tanggal` FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
        $n=$j['liter'];
        $na=$j['hasil_penjualan'];
        $nan=$j['tanggal'];
        $lit=number_format($n,2);
        $uang=number_format($na,2);

        ?>
        <tr>
        <td><?php echo $nan;?></td>
            <td><?php echo $lit;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
        </tr>
        
        <?php } ?>
        <?php $tampil=mysqli_query($abc, "SELECT SUM(`liter`),SUM(`hasil_penjualan`) FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th'");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['SUM(`liter`)'];
        $sh=$j['SUM(`hasil_penjualan`)'];
        $slit=number_format($sl,2);
        $shas=number_format($sh,2);

        ?>
        <tr>
        <td>Total</td>
            <td> 
            <?php echo $slit;?>
             </td>
             <td> 
            <?php echo "Rp."; echo $shas;?>
             </td>
        </tr>
        <?php } ?>
   </table>

</div>
   <div><!-- Dexlite -->
   <table border="1" cellspacing="0">
        
        <tr>
        <td colspan="3">E. Dexlite</td>
        </tr>
        <tr>
        <td>tanggal</td>
            <td>Liter</td>
            <td>Uang</td>
        </tr>
        <?php 
        include '../koneksi.php';
        $tampil=mysqli_query($abc, "SELECT `liter`,`hasil_penjualan`,`tanggal` FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
        $n=$j['liter'];
        $na=$j['hasil_penjualan'];
        $nan=$j['tanggal'];
        $lit=number_format($n,2);
        $uang=number_format($na,2);

        ?>
        <tr>
        <td><?php echo $nan;?></td>
            <td><?php echo $lit;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
        </tr>
        
        <?php } ?>
        <?php $tampil=mysqli_query($abc, "SELECT SUM(`liter`),SUM(`hasil_penjualan`) FROM `penjualan` WHERE `Operator`='$nama'  AND `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th'");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['SUM(`liter`)'];
        $sh=$j['SUM(`hasil_penjualan`)'];
        $slit=number_format($sl,2);
        $shas=number_format($sh,2);

        ?>
        <tr>
        <td>Total</td>
            <td> 
            <?php echo $slit;?>
             </td>
             <td> 
            <?php echo "Rp."; echo $shas;?>
             </td>
        </tr>
        <?php } ?>
   </table></div>
   
    </div>
    <!-- bagian isi -->

    </div>
    <!-- dasar -->
</body>
</html>