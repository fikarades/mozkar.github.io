<?php
include '../../koneksi.php';
if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
 }
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment; filename=Laporan Realisasi $bl $th.xls");
        header("pragma: no-cache");
        header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Realisasi Penyaluran BBM</title>
</head>
<body>
    <div class="container">
        
        <table cellspacing="0">
        <tr>
        <td></td>
        <td align="center" colspan="6"><h3 >LAPORAN REALISASI PENYALURAN BBM SPBU 84.976.03</h3></td>
        <td></td>
        </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        <tr>
            <td colspan="3">NO SPBU</td>
            <td colspan="5">: 84.976.03</td>
        </tr>
        <tr>
            <td colspan="3">ALAMAT</td>
            <td colspan="5">: Jln.Ali Moertopo - Dobo, Kabupaten Kepulauan Aru</td>
        </tr>
        <?php
   if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
    ?>
        <tr>
            <td colspan="3">BULAN/TAHUN</td>
            <td colspan="5">: <?php echo $bl;?> <?php echo $th ;?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3">SALD TO PARTY/SHIP TO PARTY</td>
            <td colspan="5">: ----</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><br>A. PREMIUM</td>
        </tr>
        </table>


        <table cellspacing="0" class="table" border="1" >
        <tr style="vertical_align:middle;text-align:center;">
            <td rowspan="2">NO</td>
            <td rowspan="2">NO TANGKI</td>
            <td rowspan="2">STOK AWAL BULAN <br> (LITER)</td>
            <td rowspan="2">PENERIMAAN DARI PT.PERTAMINA (PERSERO)<br>(LITER)</td>
            <td colspan="3">TITIPAN BBM</td>
            <td rowspan="2">STOK AKHIR BULAN <br> (LITER)</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>LANAL ARU</td>
            <td>POLRES ARU</td>
            <td>POL AIR POS BENJINA</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>1</td>
            <td>T2</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Premium' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
                    if ($pl == "0") {
                        $pl = '-';
                    }
                    else{
                        $pl=$pw * 1;
                    }
                     echo $pl;
           }?></td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $ppl= $pw /1000;
               if($ppl == '0'){
                $ppl = '-';
                }
                else{
                    $ppl = $pw / 1000;
                }
                echo $ppl;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               if($pw == '0'){
                $pw = '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td><?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?></td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Premium' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Akhir Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
           }?></td>
            
        </tr>

        
        </table>
<br><br>

<!-- solarrrrrrrrrrrrrrrrrrrrrr -->
        <table>
        <tr border="0" >
        <td colspan="2" style="font-weight: bold;">B. BIOSOLAR</td>
        </tr>
        </table>
        <table cellspacing="0" class="table" border="1" >
        
        <tr style="vertical_align:middle;text-align:center;">
            <td rowspan="2">NO</td>
            <td rowspan="2">NO TANGKI</td>
            <td rowspan="2">STOK AWAL BULAN <br> (LITER)</td>
            <td rowspan="2">PENERIMAAN DARI PT.PERTAMINA (PERSERO)<br>(LITER)</td>
            <td colspan="3">TITIPAN BBM</td>
            <td rowspan="2">STOK AKHIR BULAN <br> (LITER)</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>LANAL ARU</td>
            <td>POLRES ARU</td>
            <td>POL AIR POS BENJINA</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>1</td>
            <td>T1</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
                    if ($pl == "0") {
                        $pl = '-';
                    }
                    else{
                        $pl=$pw * 1;
                    }
                     echo $pl;
           }?></td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $ppl= $pw /1000;
               if($ppl == '0'){
                $ppl = '-';
                }
                else{
                    $ppl = $pw / 1000;
                }
                echo $ppl;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td><?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?></td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Akhir Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
           }?></td>
            
        </tr>

        
        </table>
    <br>
    <br>
    <!-- pertamax -->
        <table>
        <tr border="0" >
        <td colspan="2" style="font-weight: bold;">C. PERTAMAX</td>
        </tr>
        </table>
        <table cellspacing="0" class="table" border="1" >
        
        <tr style="vertical_align:middle;text-align:center;">
            <td rowspan="2">NO</td>
            <td rowspan="2">NO TANGKI</td>
            <td rowspan="2">STOK AWAL BULAN <br> (LITER)</td>
            <td rowspan="2">PENERIMAAN DARI PT.PERTAMINA (PERSERO)<br>(LITER)</td>
            <td colspan="3">TITIPAN BBM</td>
            <td rowspan="2">STOK AKHIR BULAN <br> (LITER)</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>LANAL ARU</td>
            <td>POLRES ARU</td>
            <td>POL AIR POS BENJINA</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>1</td>
            <td>T4</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
                    if ($pl == "0") {
                        $pl = '-';
                    }
                    else{
                        $pl=$pw * 1;
                    }
                     echo $pl;
           }?></td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`=' Pertamax' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $ppl= $pw /1000;
               if($ppl == '0'){
                $ppl = '-';
                }
                else{
                    $ppl = $pw / 1000;
                }
                echo $ppl;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td><?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?></td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Akhir Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
           }?></td>
            
        </tr>

        
        </table>
    <br>
    <br>


    <!-- pertamax -->

    <!-- Pertalite -->
    <table>
        <tr border="0" >
        <td colspan="2" style="font-weight: bold;">C. PERTALITE</td>
        </tr>
        </table>
        <table cellspacing="0" class="table" border="1" >
        
        <tr style="vertical_align:middle;text-align:center;">
            <td rowspan="2">NO</td>
            <td rowspan="2">NO TANGKI</td>
            <td rowspan="2">STOK AWAL BULAN <br> (LITER)</td>
            <td rowspan="2">PENERIMAAN DARI PT.PERTAMINA (PERSERO)<br>(LITER)</td>
            <td colspan="3">TITIPAN BBM</td>
            <td rowspan="2">STOK AKHIR BULAN <br> (LITER)</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>LANAL ARU</td>
            <td>POLRES ARU</td>
            <td>POL AIR POS BENJINA</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>1</td>
            <td>T4</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
                    if ($pl == "0") {
                        $pl = '-';
                    }
                    else{
                        $pl=$pw * 1;
                    }
                     echo $pl;
           }?></td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`=' Pertalite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $ppl= $pw /1000;
               if($ppl == '0'){
                $ppl = '-';
                }
                else{
                    $ppl = $pw / 1000;
                }
                echo $ppl;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td><?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?></td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Akhir Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
           }?></td>
            
        </tr>

        
        </table>
    <br>
    <br>

    <!-- Pertalite -->
    <!-- dexlite -->
    <table>
        <tr border="0" >
        <td colspan="2" style="font-weight: bold;">D. DEXLITE</td>
        </tr>
        </table>
        <table cellspacing="0" class="table" border="1" >
        
        <tr style="vertical_align:middle;text-align:center;">
            <td rowspan="2">NO</td>
            <td rowspan="2">NO TANGKI</td>
            <td rowspan="2">STOK AWAL BULAN <br> (LITER)</td>
            <td rowspan="2">PENERIMAAN DARI PT.PERTAMINA (PERSERO)<br>(LITER)</td>
            <td colspan="3">TITIPAN BBM</td>
            <td rowspan="2">STOK AKHIR BULAN <br> (LITER)</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>LANAL ARU</td>
            <td>POLRES ARU</td>
            <td>POL AIR POS BENJINA</td>
        </tr>
        <tr style="vertical_align:middle;text-align:center;">
            <td>1</td>
            <td>T5</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
                    if ($pl == "0") {
                        $pl = '-';
                    }
                    else{
                        $pl=$pw * 1;
                    }
                     echo $pl;
           }?></td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`=' Dexlite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $ppl= $pw /1000;
               if($ppl == '0'){
                $ppl = '-';
                }
                else{
                    $ppl = $pw / 1000;
                }
                echo $ppl;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td>
            <?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?>
            </td>
            <td><?php 
                
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
               if($angka_format == '0'){
                    $angka_format= '-';
                }
                else{
                    $angka_format=number_format($pw);
                }
                echo $angka_format;
                
                }?></td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Akhir Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
                    $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
           }?></td>
            
        </tr>

        
        </table>
    <br>
    <br>

    <!-- dexlite -->
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">Dobo, ....................</td>
            
        </tr>
        <tr>
            <td colspan="4">mengetahui,</td>
        </tr>
        <tr>
            <td colspan="4">Direktur utama</td>

        </tr>
        <tr>
            <td colspan="4">PT. Arafura Mitra Energi</td>
        </tr>
        <tr>
            <td><br><br><br><br></td>
        </tr>
        <tr>
            <td style="font-weight:bold;" colspan="4">Jamaludin Rasyid</td>
        </tr>
    </table>
    </div>
















</body>













<style>
.container{
            width:816px;
            height: auto;
            /* border:1px solid black; */

        }
        table tr td{
            padding: 2px 5px;
        }
        .table{
            width:1200px;
            height:auto;

        }
        .table{
            font-size:12pt;
        }
        
</style>
</html>