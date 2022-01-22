<?php
include '../../koneksi.php';
// if(isset($_GET["bl"])){
//     $bl =$_GET["bl"];
//     $th =$_GET["th"];
//  }
//         header("Content-type:application/vnd.ms-excel");
//         header("Content-Disposition:attachment; filename=Laporan Realisasi $bl $th.xls");
//         header("pragma: no-cache");
//         header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
<table>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
    <td colspan="5" align="center"><h3>LAPORAN BULANAN SPBU</h3></td>
</tr>
<tr>
    <td colspan="3">NO SPBU</td>
    <td colspan="2">: 84.976.03</td>
</tr>
<tr>
    <td colspan="3">NAMA PEMILIK</td>
    <td colspan="2">: JAMALUDIN RASYID</td>
</tr>
<tr>
    <td colspan="3">ALAMAT</td>
    <td colspan="2">: JL. KAPITAN MALONGI</td>
</tr>
<?php
   if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
    ?>
        <tr>
            <td colspan="3">BULAN/TAHUN</td>
            <td colspan="2">: <?php echo $bl;?> <?php echo $th ;?></td>
        </tr>
        <?php } ?>
<tr>
    <td colspan="3">SOLD TO PARTY / SHIP TO PARTY </td>
    <td colspan="2">: ------</td>
</tr>
<tr>
    <td style="font-weight: bold;" colspan="2"><br>A. PREMIUM</td>
</tr>
    
</table>

<!-- Tabel Premium -->
<table cellspacing="0" border="1" style="vertical_align:middle;text-align:center;" class="table">
    <tr>
        <td>NO</td>
        <td>No. Tangki</td>
        <td>Stok Awal Bulan <br> (Liter)</td>
        <td>Penerimaan dari <br> PT Pertamina (persero) <br>(Liter)</td>
        <td>Stok Akhir Bulan <br>(Liter)</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
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
           }?>
           </td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
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
    <tr>
        <td>2</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>4</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="2">TOTAL</td>
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
        <td ><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
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


<br>

<!-- Tabel Bio Solar -->
<table>
<tr>
    <td colspan="2" style="font-weight: bold;" >B. BIOSOLAR</td>
</tr>
</table>

<table cellspacing="0" border="1" style="vertical_align:middle;text-align:center;" class="table">
    <tr>
        <td>NO</td>
        <td>No. Tangki</td>
        <td>Stok Awal Bulan <br> (Liter)</td>
        <td>Penerimaan dari <br> PT Pertamina (persero) <br>(Liter)</td>
        <td>Stok Akhir Bulan <br>(Liter)</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>
        <?php
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
        }
            ?>
        </td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
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
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>4</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="2">TOTAL</td>
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
        }
            ?></td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
                }?></td>
        <td> <?php
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
<!-- TABEL PRODUK LAIN -->
<table>
<tr>
    <td colspan="2" style="font-weight: bold;" >C.PERTAMAX </td>
<!--     
     PRODUK LAIN (PREMIUM NON SUBSIDI, SOLAR NON SUBSIDI, <br> 
    PERTAMAX PLUS, PERTAMAX DAN PERTAMINA DEX) -->
</tr>
</table>

<table cellspacing="0" border="1" style="vertical_align:middle;text-align:center;" class="table">
    <tr>
        <td>NO</td>
        <td>No. Tangki</td>
        <td>Stok Awal Bulan <br> (Liter)</td>
        <td>Penerimaan dari <br> PT Pertamina (persero) <br>(Liter)</td>
        <td>Stok Akhir Bulan <br>(Liter)</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>
        <?php
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
                    }
            ?>
        </td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
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
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>4</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="2">TOTAL</td>
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
                    }
        
        
        ?></td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
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


<!-- batas pertamax -->

<!-- pertalite -->
<table>
<tr>
    <td colspan="2" style="font-weight: bold;" >D. PERTALITE</td>
</tr>
</table>

<table cellspacing="0" border="1" style="vertical_align:middle;text-align:center;" class="table">
    <tr>
        <td>NO</td>
        <td>No. Tangki</td>
        <td>Stok Awal Bulan <br> (Liter)</td>
        <td>Penerimaan dari <br> PT Pertamina (persero) <br>(Liter)</td>
        <td>Stok Akhir Bulan <br>(Liter)</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>
        <?php
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
                }
            ?>
        </td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
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
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>4</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="2">TOTAL</td>
        <td> <?php
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
                }
            ?></td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
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
<!-- batas pertalite -->
<br><br>
<!-- Dexlite -->
<table>
<tr>
    <td colspan="2" style="font-weight: bold;" >E. DEXLITE</td>
</tr>
</table>

<table cellspacing="0" border="1" style="vertical_align:middle;text-align:center;" class="table">
    <tr>
        <td>NO</td>
        <td>No. Tangki</td>
        <td>Stok Awal Bulan <br> (Liter)</td>
        <td>Penerimaan dari <br> PT Pertamina (persero) <br>(Liter)</td>
        <td>Stok Akhir Bulan <br>(Liter)</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>
        <?php
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
                }
            ?>
        </td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
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
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>4</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr style="font-weight: bold;">
        <td colspan="2">TOTAL</td>
        <td> <?php
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
                }
            ?></td>
        <td><?php 
                $tampil=mysqli_query($abc, "SELECT SUM(`Volume`) FROM `penerimaan` WHERE `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite' AND `milik`='pertamina' ");
                while ($j=mysqli_fetch_array($tampil)) {
               $pw=$j['SUM(`Volume`)'];
               $pl=$pw * 1 ;
               if ($pl == "0") {
                   $pl = '-';
               }
               else{
                   $pl=$pw * 1;
               }
                echo $pl;
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
<!-- batas pertalite -->
<!-- tanda tangan -->
<br>
    <br>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td colspan="3">Dobo, ....................</td>
            
        </tr>
        <tr>
        <td></td>
            <td colspan="3">mengetahui,</td>
        </tr>
        
        <tr>
            <td><br><br><br><br></td>
        </tr>
        <tr>
        <td></td>
            <td style="font-weight:bold;" colspan="3">Jamaludin Rasyid</td>
        </tr>
        <tr>
        <td></td>
            <td colspan="3">Direktur Utama</td>
        </tr>
    </table>
    <table class="table">
    <tr>
                <td style="border:0;" colspan="3" align="right"></td><td style="border:0;" align="right">
                <a href="http://localhost/SPBU/cetak/penerimaan/excel_laporan_jaya_pura.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>"><Input type="submit" class="excel" value="Excel"></a></td><td style="border:0;"><Button onclick="window.print();" class="print" >Print</Button><br></td>
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
            width:900px;
            height:auto;

        }
        .table{
            font-size:12pt;
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
</html>