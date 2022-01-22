<?php

        // header("Content-type:application/vnd.ms-excel");
        // header("Content-Disposition:attachment; filename=penjualan.xls");
        // header("pragma: no-cache");
        // header("Expires: 0");
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan SPBU</title>
</head>
<body>
    <div class="container">
    <h4 align="center">LAPORAN BULANAN SPBU</h4>
    
    
    <table style="font-weight:bold;">
    <tr>
        <td>NO SPBU</td>
        <td>: 84.976.03</td>
        <td></td>
    </tr>
    <?php
   if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
    ?>
    <tr>

        <td>BULAN</td>
        <td>: <?php echo $bl; ?></td>
        <td></td>
    </tr>
    <tr>
        <td>TAHUN</td>
        <td>: <?php echo $th; ?></td>
        <td></td>
    </tr>

    <tr> 
        <td colspan="3"><br>A. STOK AWAL BULAN ( Tgl 1 pagi sebelum penjualan )</td>
    </tr>
    <tr> 
        <td>PREMIUM</td>
        <td>: <?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Premium' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
           echo $pw;
            }
            ?> Liter</td>
    </tr>
    <tr>
        <td>BIOSOLAR</td>
        <td>: <?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
           echo $pw;
            }
            ?>  Liter</td>
    </tr>
    <tr>
            <td>PERTAMAX</td>
            <td>: <?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
           echo $pw;
            }
            ?> Liter</td>
    </tr>
    <tr>
            <td>PERTALITE</td>
            <td>: <?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
           echo $pw;
            }
            ?> Liter</td>
    </tr>
    
    <tr>
        <td>DEXLITE</td>
        <td>: <?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                
                    $pw=$j['jumlah_stok'];
           echo $pw;
            }
            ?>  Liter</td>
    </tr>
    <tr>
    <td  colspan="3"> <br>B1. PENERIMAAN DARI PT. PERTAMINA (PERSERO) DALAM KL </td>
    </tr>
    </table>
    
   
    <table border="1" cellspacing="0" class="table">
        <tr align='center'>
            <td rowspan="2">PRODUK</td>
            <td colspan="31">TANGGAL PENERIMAAN</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
        <?php
                   $tanggal=31;
                   for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                   { 
                       echo "<td align='center'>$tgl</td>";   
                   }              
                                ?>
                                
                               
        </tr>
        <tr style="background-color:yellow;">
            <td>PREMIUM</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>
        <tr style="background-color:lightgray;">
            <td>BIOSOLAR</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>
        <!-- pertamax -->
        <tr style="background-color:blue;">
            <td>PERTAMAX</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>
        <!-- pertamax -->

        <!-- pertalite -->
        <tr style="background-color:lightblue;">
            <td>PERTALITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>


        <!-- pertalite -->
        
        <!-- dexlite -->
        <tr style="background-color: green;">
            <td>DEXLITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>

        <!-- dexlite -->
    </table>


<!-- tabel TNI -->
    <table style="font-weight:bold;" >
    <tr>
    <td  colspan="3"> <br>B2. PENERIMAAN DARI TNI DALAM LITER </td>
    </tr>
    </table>

    <table border="1" cellspacing="0" class="table">
        <tr align='center'>
            <td rowspan="2">PRODUK</td>
            <td colspan="31">TANGGAL PENERIMAAN</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
        <?php
                   $tanggal=31;
                   for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                   { 
                       echo "<td align='center'>$tgl</td>";   
                   }              
                                ?>
                                
                               
        </tr>
        <tr style="background-color:yellow;">
            <td>PREMIUM</td>
            <?php
           $tanggal=31;
           for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
           { 
           include '../../koneksi.php';
           $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='tni' ");
           while ($j=mysqli_fetch_array($tampil)) {
           $p=$j['SUM(`Volume`)'];
           $ppl= $p / 1000;
           if($ppl == '0'){
               $ppl = '-';
           }
           else{
               $ppl = $p;
           }
           ?>
           
           <td align="center"> <?php echo $ppl;?> </td>
           <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
                echo $angka_format;
                }?>
               
            </td>
        </tr>
        <tr style="background-color:lightgray;">
            <td>BIOSOLAR</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='tni' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>
        <!-- pertamax -->
        <tr style="background-color:blue;">
            <td>PERTAMAX</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='tni' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>
        <!-- pertamax -->

        <!-- pertalite -->
        <tr style="background-color:lightblue;">
            <td>PERTALITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='tni' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>


        <!-- pertalite -->
        
        <!-- dexlite -->
        <tr style="background-color: green;">
            <td>DEXLITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='tni' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='tni' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>

        <!-- dexlite -->
    </table>


    <!-- BAtas tabel TNI -->





<!-- tabel Polri -->

    <table style="font-weight:bold;" >
    <tr>
    <td  colspan="3"> <br>B2. PENERIMAAN DARI POLRI </td>
    </tr>
    </table>

    <table border="1" cellspacing="0" class="table">
        <tr align='center'>
            <td rowspan="2">PRODUK</td>
            <td colspan="31">TANGGAL PENERIMAAN</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
        <?php
                   $tanggal=31;
                   for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                   { 
                       echo "<td align='center'>$tgl</td>";   
                   }              
                                ?>
                                
                               
        </tr>
        <tr style="background-color:yellow;">
            <td>PREMIUM</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polri' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
                echo $angka_format;
                
                }?>
               
            </td>
        </tr>
        <tr style="background-color:lightgray;">
            <td>BIOSOLAR</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>
        <!-- pertamax -->
        <tr style="background-color:blue;">
            <td>PERTAMAX</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polri' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>
        <!-- pertamax -->

        <!-- pertalite -->
        <tr style="background-color:lightblue;">
            <td>PERTALITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='polri' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>


        <!-- pertalite -->
        
        <!-- dexlite -->
        <tr style="background-color: green;">
            <td>DEXLITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polri' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polri' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>

        <!-- dexlite -->
    </table>
    <?php }?> 
    <br>
    

    <!-- batas tabel Polri -->

<!-- tabel pol air -->
<table style="font-weight:bold;" >
    <tr>
    <td  colspan="3"> <br>B2. PENERIMAAN DARI POLAIR</td>
    </tr>
    </table>

    <table border="1" cellspacing="0" class="table">
        <tr align='center'>
            <td rowspan="2">PRODUK</td>
            <td colspan="31">TANGGAL PENERIMAAN</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
        <?php
                   $tanggal=31;
                   for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                   { 
                       echo "<td align='center'>$tgl</td>";   
                   }              
                                ?>
                                
                               
        </tr>
        <tr style="background-color:yellow;">
            <td>PREMIUM</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polair' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $angka_format=number_format($pw);
                echo $angka_format;
                
                }?>
               
            </td>
        </tr>
        <tr style="background-color:lightgray;">
            <td>BIOSOLAR</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='polair' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>
       <!-- pertamax -->
       <tr style="background-color:blue;">
            <td>PERTAMAX</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polair' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>
        <!-- pertamax -->

        <!-- pertalite -->
        <tr style="background-color:lightblue;">
            <td>PERTALITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='polair' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>

                <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>
               
            </td>
        </tr>


        <!-- pertalite -->
        
        <!-- dexlite -->
        <tr style="background-color: green;">
            <td>DEXLITE</td>
            <?php
            $tanggal=31;
            for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
            { 
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polair' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`Volume`)'];
            $ppl= $p / 1000;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                $ppl = $p / 1000;
            }?>
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='polair' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pww = $pw / 1000;
                echo $pww;
                }?>

            </td>
        </tr>

        <!-- dexlite -->
    </table>
    
    <br>

<!-- batas pol air -->

<table class="table">
    <tr>
                <td style="border:0;" colspan="3" align="right"></td><td style="border:0;" align="right"><a href="http://localhost/SPBU/cetak/penerimaan/excel_laporan_penerimaan.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>"><Input type="submit" class="excel" value="Excel"></a></td><td style="border:0;"><Button onclick="window.print();" class="print" >Print</Button><br></td>
    </table>




    <style>
        .container{
            width:816px;
            height: auto;
            /* border:1px solid black; */

        }
        table tr td{
            padding: 2px 5px;
        }
        p{
            font-size:12pt;
            font-weight: bold;
        }
        .table{
            width:1200px;
            height:auto;

        }
        .print{
    width: 70px;
    height: 40px;
    border-radius: 7px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px;
    background-color: rgba(134, 124, 124, 0.842);
    border: 1px inset grey;
    transition: .8s;
    cursor: pointer;
}
.excel{
    width: 70px;
    height: 40px;
    border-radius: 7px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px;
    background-color: rgba(142, 190, 79, 0.842);
    border: 1px inset rgb(117, 214, 79);
    transition: .8s;
    cursor: pointer;
}
.print:hover, .excel:hover{
    opacity: .7;
    box-shadow: 0px 3px 5px rgba(151, 146, 146, 0.781);
}

@media print{
    button{
        display: none;
    }
    a{
        display: none;
    }
}
    </style>
    </div>
    
    
</body>
</html>