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
            DAFTAR OPERATOR NOZEL
        </td></tr>
        <tr>
            <td >Nama</td>
            <td colspan="2" >Edit</td>
        </tr>
        <?php include '../koneksi.php'; $tampil=mysqli_query($abc, "SELECT * FROM `operator` ");
        while ($j=mysqli_fetch_array($tampil)) {
        $sl=$j['Nama'];
        ?>
        <tr>
            <td><?php echo $sl;?></td>
            <td><a href="http://localhost/SPBU/cetak/hapus.php?nama=<?php echo $sl;?>"><input type="submit" class="hapus" value="Hapus"></a></td>
            <td><a href="?nama=<?php echo $sl;?>#ubah_data"><input type="submit" value="Ubah" class="ubah"></a></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3"><a href="#tambah_data"><input type="submit" value="Tambah Operator" class="tambah"></a></td>
        </tr>
    </table>
    </div>
    <!-- bagian isi -->

    </div>
    <!-- dasar -->

    <div class="inputan" id="tambah_data">
    <br>
    <a href="http://localhost/SPBU/cetak/data_pegawai.php" class="close">X Close</a>    
            <div class="forminput">
                    <form method="POST" class="form">
                        <table cellpadding="9" class="tengah">
                            <tr>
                                <td align="center">Nama Operator </td>
                            <tr>
                                <td align="center"><input type="text" name="Nama" class="Input"></td>
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
                                           
                                            mysqli_query($abc, "INSERT INTO `operator`(`Nama`) VALUES 
                                            ('$nama')");
                                            
                                            ?>
                                            
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/cetak/data_pegawai.php';
                                            </script>
                                            <?php 
                                        }
                            ?>
                </div>

    </div>
    <!-- akhir tambah data -->
    <div class="inputan" id="ubah_data">
    <br>
    <a href="http://localhost/SPBU/cetak/data_pegawai.php" class="close">X Close</a>    
            <div class="forminput">
                    <form method="POST" class="form">
                        <table cellpadding="9" class="tengah">
                            <tr>
                                <td align="center">Nama Operator </td>
                            <tr>
                            <?php
   if(isset($_GET["nama"])){
  
    $nama=$_GET['nama'];
   }?>
                                <td align="center"><input type="text"  value="<?php echo $nama ;?>" name="Nama" class="Input"></td>
                            </tr>
                            <tr>
                                <td align="center"><br><input type="submit" name="namba" value="Ubah" style="height:40px; width:100px;" class="button"></td>
                            </tr>
                        </table>
                    </form>     
                    <?php
                    include '../koneksi.php';
                                        if (isset($_POST['namba'])) {
                                            $nam=($_POST['Nama']);
                                           
                                            mysqli_query($abc, "UPDATE `operator` SET `Nama`='$nam' WHERE `Nama`='$nama' ");
                                            
                                            ?>
                                            
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/cetak/data_pegawai.php';
                                            </script>
                                            <?php 
                                        }
                            ?>
                </div>

    </div>
    <!-- akhir tambah data -->
</body>
</html>