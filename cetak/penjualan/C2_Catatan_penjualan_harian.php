<?php include '../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Harian</title>
</head>
<body>
    <div class="container">
    <table>
        <tr>
            <td colspan="5" style="font-weight: bold;">C2. CATATAN PENJUALAN HARIAN</td>
        </tr>
    </table>
    
    <table border="1" cellspacing="0" class="table" align="center">
        <tr align="center">
            <td rowspan="2">PRODUK</td>
            <td colspan="15" style="font-weight: bold;">PENJUALAN DALAM (Kilo liter)</td>
            <td rowspan="2" style="font-weight: bold;">TOTAL</td>
        </tr>
        <tr align="center">
            <?php
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { 
                    echo "<td align='center'>$tgl</td>";   
                }              
                             ?>
        </tr>
        <tr align="center">
            <td>PREMIUM</td>
            <?php
            if(isset($_GET["bl"])){
                $bl =$_GET["bl"];
                $th =$_GET["th"];
            }

            
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { 
            $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' ");
            while ($j=mysqli_fetch_array($tampil)) {
            $p=$j['SUM(`liter`)'];
            $angka_format=number_format($p,3);
            $ppl = $angka_format;
            if($ppl == '0'){
                $ppl = '-';
            }
            else{
                
                $ppl = $angka_format;
            }
            ?>
            
            <td align="center"> <?php echo $ppl;?> </td>
            <?php } } ?>
            <td>
            <?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='premium' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '1' AND '15'  ");
                while ($j=mysqli_fetch_array($tampil)) {
               $p=$j['SUM(`liter`)'];
               $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
                    
                }?>
            </td>
        </tr>
        <tr align="center">
        <td>BIOSOLAR</td>
            <?php
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Bio Solar' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '1' AND '15'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>PERTAMAX</td>
            <?php
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertamax' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '1' AND '15'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>PERTALITE</td>
            <?php
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertalite' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '1' AND '15'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>DEXLITE</td>
            <?php
                $tanggal=15;
                for ($tgl=1 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Dexlite' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '1' AND '15'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
    </table>
<br>

    <!-- tanggal 16-31 -->
    <table border="1" cellspacing="0" class="table" >
        <tr align="center">
            <td rowspan="2">PRODUK</td>
            <td colspan="16"style="font-weight: bold;">PENJUALAN DALAM (Kilo liter)</td>
            <td rowspan="2"style="font-weight: bold;">TOTAL</td>
        </tr>
        <tr align="center">
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { 
                    echo "<td align='center'>$tgl</td>";   
                }              
                             ?>
        </tr>
        <tr align="center">
            <td>PREMIUM</td>
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='premium' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '16' AND '31'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>BIOSOLAR</td>
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Bio Solar' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '16' AND '31'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>PERTAMAX</td>
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertamax' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '16' AND '31'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>PERTALITE</td>
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertalite' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '16' AND '31'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr align="center">
        <td>DEXLITE</td>
            <?php
                $tanggal=31;
                for ($tgl=16 ; $tgl <=$tanggal ; $tgl++)
                { $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `tanggal`='$tgl' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                    $p=$j['SUM(`liter`)'];
                    $angka_format=number_format($p,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    ?>
                    
                    <td align="center"> <?php echo $ppl;?> </td>
                    <?php } } ?>
                    <td>
                    <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Dexlite' AND `tahun`='$th' AND `bulan`='$bl' AND `tanggal` BETWEEN '16' AND '31'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
    </table>
<br><br>
    <table>
        <tr>
            <td colspan="3" style="font-weight: bold;">D. TOTAL PENJUALAN BULANAN</td>
        </tr>
    </table>

    <table border="1" cellspacing="0">
        <tr>
            <td>TOTAL PENJUALAN BULANAN</td>
            <td>TOTAL</td>
        </tr>
        <tr>
            <td>PREMIUM</td>
            <td><?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Premium' AND `tahun`='$th' AND `bulan`='$bl' ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?></td>
        </tr>
        <tr>
            <td>BIOSOLAR</td>
            <td>
            <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Bio Solar' AND `tahun`='$th' AND `bulan`='$bl'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?>
            </td>
        </tr>
        <tr>
            <td>PERTAMAX</td>
            <td>
            <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertamax' AND `tahun`='$th' AND `bulan`='$bl'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?>
            </td>
        </tr>
        <tr>
            <td>PERTALITE</td>
            <td>
            <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Pertalite' AND `tahun`='$th' AND `bulan`='$bl'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?>
            </td>
        </tr>
        <tr>
            <td>DEXLITE</td>
            <td>
            <?php 
                        $tampil=mysqli_query($abc, "SELECT SUM(`liter`) FROM `penjualan` WHERE `produk`='Dexlite' AND `tahun`='$th' AND `bulan`='$bl'  ");
                        while ($j=mysqli_fetch_array($tampil)) {
                       $p=$j['SUM(`liter`)'];
                       $angka_format=number_format($p,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
                            
                        }?>
            </td>
        </tr>
    </table>
<br>
<br>
    <table>
        <tr>
            <td colspan="3" style="font-weight: bold;">E. STOK AKHIR BULAN (Tgl 31 Malam setelah penjualan)</td>
        </tr>
        <tr>
            <td>PREMIUM</td>
            <td>: <?php
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
           }?> liter</td>
        </tr>
        <tr>
            <td>BIOSOLAR</td>
            <td>: <?php
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
           }?> liter</td>
        </tr>
        <tr>
            <td>PERTAMAX</td>
            <td>: <?php
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
           }?> liter</td>
        </tr>
        <tr>
            <td>PERTALITE</td>
            <td>: <?php
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
           }?> liter</td>
        </tr>
        <tr>
            <td>DEXLITE</td>
            <td>: <?php
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
           }?> liter</td>
        </tr>
    </table>
<br><br>
    <!-- ttd -->
    <table>
    <tr align="center">
        <td></td>
            <td colspan="3">Mengetahui</td>
        </tr>
        
        <tr>
            <td><br><br><br><br></td>
        </tr>
        <tr align="center">
        <td></td>
            <td style="font-weight:bold;" colspan="2">Jamaludin Rasyid</td>
        </tr>
        <tr align="center">
        <td></td>
            <td colspan="2">Direktur Utama</td>
        </tr>
    </table>

    <table class="table">
    <tr>
                <td style="border:0;" colspan="3" align="right"></td><td style="border:0;" align="right"><a href="http://localhost/SPBU/cetak/penjualan/excelC2.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>"><Input type="submit" class="excel" value="Excel"></a></td><td style="border:0;"><Button onclick="window.print();" class="print" >Print</Button><br></td>
    </table>

    </div>
    <style>
        .container{
            width:816px;
            height: auto;
            /* border:1px solid black; */

        }
        table tr td{
            padding: 2px 3px;
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
    
</body>
</html>