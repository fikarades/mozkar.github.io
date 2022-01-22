<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/daftar_pegawai.css">
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
    <table border="1" cellspacing="0" style="text-align:center;margin:auto;width: 300px;">
        <tr><td colspan="3">
            Stok Awal Tangki Pendam BBM sebelum penjualan dan penerimaan 
        </td></tr>
        <tr>
            <td >Produk</td>
            <td>stok</td>
            <td >Edit</td>
        </tr>
        <?php include '../koneksi.php'; $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` ");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['produk'];
        $sh=$j['stok'];
        $uang=number_format($sh);

        ?>
        <tr>
            <td><?php echo $sl;?></td>
            <td><?php echo $uang; echo "Liter";?></td>
            <td><a href="?produk=<?php echo $sl;?>& harga=<?php echo $sh;?>#ubah_data"><input type="submit" value="Ubah" class="ubah"></a></td>
        </tr>
        <?php } ?>
        
    </table>
    </div>
    <!-- bagian isi -->

    </div>
    <!-- dasar -->

    <div class="inputan" id="ubah_data">
    <br>
    <a href="http://localhost/SPBU/cetak/stok_volume.php" class="close">X Close</a>    
            <div class="forminput">
                    <form method="POST" class="form">
                        <table cellpadding="9" class="tengah">
                        <?php
   if(isset($_GET["produk"])){
  
    $produk=$_GET['produk'];
    $har=$_GET['harga'];
   }?>
                            <tr>
                                <td align="center">PRODUK BBM</td>
                            <tr>
                                <td align="center"><input type="text" value="<?php echo $produk;?>" name="Nama" class="Input"></td>
                            </tr>
                            <tr>
                                <td align="center">Volume BBM (Liter)</td>
                            <tr>
                                <td align="center"><input type="text" value="<?php echo $har;?>" name="Harga" class="Input"></td>
                            </tr>
                            <tr>
                                <td align="center"><br><input type="submit" name="nambah" value="Input" style="height:40px; width:100px;" class="button"></td>
                            </tr>
                        </table>
                    </form>     
                    <?php
                    include '../koneksi.php';
                                        if (isset($_POST['nambah'])) {
                                            $nama=($_POST['Nama']);
                                            $harga=($_POST['Harga']);
                                            mysqli_query($abc, "UPDATE `stok_tangki` SET `stok`='$harga' WHERE `Produk`='$nama' ");
                                           
                                            
                                            ?>
                                            
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            <?php
        $tahun=date('Y');
        $bulan=array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
            );
        $bulan[date('m')];
        $hari=array(
            '01' => '1',
            '02' => '2',
            '03' => '3',
            '04' => '4',
            '05' => '5',
            '06' => '6',
            '07' => '7',
            '08' => '8',
            '09' => '9',
            '10' => '10',
            '12' => '12',
            '13' => '13',
            '14' => '14',
            '15' => '15',
            '16' => '16',
            '17' => '17',
            '18' => '18',
            '19' => '19',
            '20' => '20',
            '21' => '21',
            '22' => '22',
            '23' => '23',
            '24' => '24',
            '25' => '25',
            '26' => '26',
            '27' => '27',
            '28' => '28',
            '29' => '29',
            '30' => '30',
            '31' => '31',
            
        );
        $hari[date('d')];
        ?>
                                            document.location.href = 'http://localhost/SPBU/menu/stok.php?bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>';
                                            </script>
                                            <?php 
                                        }
                            ?>
                </div>

    </div>
    <!-- akhir tambah data -->
                </div>

    </div>
    <!-- akhir tambah data -->
</body>
</html>