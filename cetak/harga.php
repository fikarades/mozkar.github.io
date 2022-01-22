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
            DAFTAR Harga Produk BBM
        </td></tr>
        <tr>
            <td >Nama</td>
            <td>Harga</td>
            <td >Edit</td>
        </tr>
        <?php include '../koneksi.php'; $tampil=mysqli_query($abc, "SELECT * FROM `harga` ");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['Produk'];
        $sh=$j['Harga'];
        $uang=number_format($sh,2);

        ?>
        <tr>
            <td><?php echo $sl;?></td>
            <td><?php echo "Rp."; echo $uang;?></td>
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
    <a href="http://localhost/SPBU/cetak/harga.php" class="close">X Close</a>    
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
                                <td align="center">HARGA BBM</td>
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
                                            mysqli_query($abc, "UPDATE `harga` SET `Harga`='$harga' WHERE `Produk`='$nama' ");
                                           
                                            
                                            ?>
                                            
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/cetak/harga.php';
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