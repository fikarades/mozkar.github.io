<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stok.css">
</head>
<body>

<!-- bagian menu -->
<div class="nav">
    <div class="logo"><h1>SPBU 84.976.03</h1></div>
    <ul>
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
        <li><a href="http://localhost/SPBU">Beranda</a></li>
        <li><a href="http://localhost/SPBU/menu/penjualan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penjualan</a></li>
        <li><a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penerimaan</a></li>
        
    </ul>
</div>
<br>

<!-- akhir menu -->

<!-- dasar -->
<div class="dasar">
    <div class="header">
        <div class="headerpenju"><h2>Stok Tangki</h2></div>
        <div class="tgl">
            <form action="" method="POST">
                <table cellspacing="0" class="table">
                    <tr>
                                <?php

                                    $tahun=date('Y');
                                    $bulan=date('M');
                                    $hari=date('d');
                                ?>
                        <td><input type="button" value="<?php echo $hari; ?>" class="fm_tgl"></td>
                        <td><input type="button" value="<?php echo $bulan; ?>" class="fm_bln"></td>
                        <td><input type="button" value="<?php echo $tahun; ?>" class="fm_thn"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    











 <!-- bagian isi -->
    <div class="isi">
    <div class="premium">
        <table>
            <tr>
                <td><h2>Premium</h2></td>
            </tr>
            <?php
            include '../koneksi.php';
             $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='Premium'");
             while ($j=mysqli_fetch_array($tampil)) {
                $vol=$j['stok'];
                 ?>

            <tr>
                <td id="stoS">
                    <?php echo $vol ;?>
                </td>
            </tr>
            <tr>
                <td id="stoS">Ltr</td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="BioSolar">
        <table>
            <tr>
                <td><h2>Bio Solar</h2></td>
            </tr>
            <?php
            include '../koneksi.php';
             $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='Bio Solar'");
             while ($j=mysqli_fetch_array($tampil)) {
                $vol=$j['stok'];
                 ?>

            <tr>
                <td id="stoS">
                    <?php echo $vol ;?>
                </td>
            </tr>
            <tr>
                <td id="stoS">Ltr</td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <!-- Pertamax -->
    <div class="Pertamax">
        <table>
            <tr>
                <td><h2>Pertamax</h2></td>
            </tr>
            <?php
            include '../koneksi.php';
             $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='Pertamax'");
             while ($j=mysqli_fetch_array($tampil)) {
                $vol=$j['stok'];
                 ?>

            <tr>
                <td id="stoS">
                    <?php echo $vol ;?>
                </td>
            </tr>
            <tr>
                <td id="stoS">Ltr</td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="Dexlite">
        <table align="center">
            <tr>
                <td><h2>Dexlite</h2></td>
            </tr>
            <?php
            include '../koneksi.php';
             $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='Dexlite'");
             while ($j=mysqli_fetch_array($tampil)) {
                $vol=$j['stok'];
                 ?>

            <tr>
                <td id="stoS">
                    <?php echo $vol ;?>
                </td>
            </tr>
            <tr>
                <td id="stoS">Ltr</td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="Pertalite">
        <table align="center">
            <tr>
                <td><h2>Pertalite</h2></td>
            </tr>
            <?php
            include '../koneksi.php';
             $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='Pertalite'");
             while ($j=mysqli_fetch_array($tampil)) {
                $vol=$j['stok'];
                 ?>

            <tr>
                <td id="stoS">
                    <?php echo $vol ;?>
                </td>
            </tr>
            <tr>
                <td id="stoS">Ltr</td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    <!-- bagian isi -->
<br><br>
    <div class="stokawalakhir">
    <br><br>
    <form action="" method="POST" class="fdfd">
                <table cellspacing="0" class="tabe">
                    <tr>
                        <td>Cari : </td>
                        
                        <td>
                            <select name="fm_bl" id="fm_bln">
                            <option value="bln">Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                            </select>
                        </td>
                        <td>
                             <select name="fm_th" id="fm_thn">
                                <option value="thn">Tahun</option>
                                <?php
                                    $tahun=date('Y');
                                    for ($thn=2011 ; $thn <=$tahun ; $thn++)
                                    { 
                                    echo " <option value=$thn> $thn</option>";
                                    }
                                ?>
                            </select>
                        </td>
                        <td><input type="submit" name="simpan" value="->" class="tombol"></td>
                    </tr>
                </table>
            </form>    
            <br><br>
            <?php
                include '../koneksi.php';
                if (isset($_POST['simpan'])) {
                    $tg=($_POST['fm_tg']);
                    $bl=($_POST['fm_bl']);
                    $th=($_POST['fm_th']);
                    $no=1;
                    ?>
                            <script>    
                                document.location.href = 'http://localhost/SPBU/menu/stok.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>';
                            </script>
                            <?php } ?>
                            <?php
                    if(isset($_GET["bl"])){
                        $b= $_GET["bl"];
                        $t= $_GET["th"];
                    }
                    ?>

        <table border="1" class="tt" cellspacing="1">
            <tr style="font-weight: bold; font-size: 30px;" align="center" >
                <td colspan="4" >Stok Bulan <?php echo $b;?> <?php echo $t; ?></td>
            </tr>
            <!-- <tr style="font-family:monospace;">
                <td>Stok Awal Bulan (Liter)</td>
                <td>----------</td>
            </tr>
            <tr style="font-family:monospace;">
                <td>Stok Akhir Bulan (Liter)</td>
                <td>-----------</td>
            </tr> -->
            <tr align="center" style="font-weight: bold;">
                <td>Produk</td>

                <td>No Tangki</td>
                
                <td>Stok Awal Bulan</td>
                <td>Stok Akhir Bulan</td>

            </tr>
            <tr align="center">
                <td>Premium</td>
                <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];
                
                $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Premium' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                    $no=$j['No_Tangki'];
                    $sa=$j['jumlah_stok'];

                
                ?>
                <td>T<?php echo $no ;?></td>
                <td><?php echo $sa ;?></td>
                <?php } ?>
                <?php
                    $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Premium' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Akhir Bulan' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $no=$j['No_Tangki'];
                        $sa=$j['jumlah_stok'];
                ?>
                <td><?php echo $sa ;?></td>
                <?php } } ?>

            </tr>
            <tr align="center">
                <td>BioSolar</td>
                <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];
                
                $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Bio Solar' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                    $no=$j['No_Tangki'];
                    $sa=$j['jumlah_stok'];

                
                ?>
                <td>T<?php echo $no ;?></td>
                <td><?php echo $sa ;?></td>
                <?php } ?>
                <?php
                    $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Bio Solar' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Akhir Bulan' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $no=$j['No_Tangki'];
                        $sa=$j['jumlah_stok'];
                ?>
                <td><?php echo $sa ;?></td>
                <?php } } ?>

            </tr>
            <tr align="center">
                <td>Pertalite</td>
                <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];
                
                $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertalite' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                    $no=$j['No_Tangki'];
                    $sa=$j['jumlah_stok'];

                
                ?>
                <td>T<?php echo $no ;?></td>
                <td><?php echo $sa ;?></td>
                <?php } ?>
                <?php
                    $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertalite' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Akhir Bulan' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $no=$j['No_Tangki'];
                        $sa=$j['jumlah_stok'];
                ?>
                <td><?php echo $sa ;?></td>
                <?php } } ?>

            </tr>
            <tr align="center">
                <td>Pertamax</td>
                <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];
                
                $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertamax' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                    $no=$j['No_Tangki'];
                    $sa=$j['jumlah_stok'];

                
                ?>
                <td>T<?php echo $no ;?></td>
                <td><?php echo $sa ;?></td>
                <?php } ?>
                <?php
                    $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Pertamax' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Akhir Bulan' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $no=$j['No_Tangki'];
                        $sa=$j['jumlah_stok'];
                ?>
                <td><?php echo $sa ;?></td>
                <?php } } ?>
               

            </tr>

            <tr align="center">
                <td>Dexlite</td>
                <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];
                
                $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Dexlite' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Awal Bulan' ");
                while ($j=mysqli_fetch_array($tampil)) {
                    $no=$j['No_Tangki'];
                    $sa=$j['jumlah_stok'];

                
                ?>
                <td>T<?php echo $no ;?></td>
                <td><?php echo $sa ;?></td>
                <?php } ?>
                <?php
                    $tampil=mysqli_query($abc, "SELECT * FROM `stok_bulanan` WHERE `produk`='Dexlite' AND `bulan`='$br' AND `tahun`='$tr' AND `stok`='Stok Akhir Bulan' ");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $no=$j['No_Tangki'];
                        $sa=$j['jumlah_stok'];
                ?>
                <td><?php echo $sa ;?></td>
                <?php } } ?>
               

            </tr>

        </table>
        <br>
        <div class="inputt">
        <a href="#tambah_data">
            <button id="input">+ Input</button>
        </a>
    </div>
        <!--  -->
    </div>
</div>
<!-- dasar -->

<!-- tambah data -->
<div class="inputan" id="tambah_data">
    <br>
    <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];?>
    <a href="http://localhost/SPBU/menu/stok.php?bl=<?php echo $br;?>& th=<?php echo $tr;?>" class="close">X Close</a>    
           <?php } ?> <div class="forminput">
                    <br><br><form method="POST" class="form">
                        <table cellpadding="9" class="tengah">
                        <tr>
                            <td colspan="2">SILAHKAN INPUT DATA STOK AWAL DAN AKHIR BULAN
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                                <td>Produk</td>
                                <td>
                                    <select name="produk" class="Input">
                                        <option value="Premium">PREMIUM</option>
                                        <option value="Pertalite">PERTALITE</option>
                                        <option value="Pertamax">PERTAMAX</option>
                                        <option value="Dexlite">DEXLITE</option>
                                        <option value="Bio Solar">BIO SOLAR</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                        <td>Bulan </td>
                                        <td>
                            
                                            <select name="fm_bln" id="fm_bl"  style="height:30px; background-color:rgb(105, 128, 192) ;
                    border: 2px solid rgba(124, 237, 245, 0.808);">
                                                <option value="bln">Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>
                        
                                            <select name="fm_thn" id="fm_th"   style="height:30px; background-color:rgb(105, 128, 192) ;
                    border: 2px solid rgba(124, 237, 245, 0.808);">
                                                <option value="thn">Tahun</option>
                                                <?php
                                                    $tahun=date('Y');
                                                    for ($thn=2011 ; $thn <=$tahun ; $thn++)
                                                    { 
                                                    echo " <option value=$thn> $thn</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                            
                            <tr>
                                <td>Stok</td>
                                <td>
                                    <select name="sts" class="Input">
                                            <option value="Stok Awal Bulan">Stok Awal Bulan</option>
                                            <option value="Stok Akhir Bulan">Stok Akhir Bulan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Stok </td>
                                <td>
                                    <input type="text" name="akhir" class="Input" onkeyup="isi_otomatis()" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><br><input type="submit" name="nambah" value="Input" style="height:40px; width:100px;" class="button"></td>
                            </tr>
                        </table>
                    </form>     
                    <?php
                    include '../koneksi.php';
                                        if (isset($_POST['nambah'])) {
                                            $produk=($_POST['produk']);
                                            $pilihan=($_POST['sts']);
                                            $jmlstok=($_POST['akhir']);
                                            $bln=($_POST['fm_bln']);
                                            $thn=($_POST['fm_thn']);
                                            $tangki="";
                                            if ($produk == 'Premium') {
                                                $tangki = 2;
                                            }
                                            elseif ($produk == 'Pertalite') {
                                                $tangki = 3;
                                            }
                                            elseif ($produk == 'Pertamax') {
                                                $tangki = 4;
                                            }
                                            elseif ($produk == 'Dexlite') {
                                                $tangki = 5;
                                            }
                                            else{
                                                $tangki = 1;
                                            }
                                            

                                            mysqli_query($abc, "INSERT INTO `stok_bulanan`(`No_Tangki`, `produk`, `bulan`, `tahun`, `jumlah_stok`, `stok`) 
                                            VALUES ('$tangki','$produk','$bln', '$thn','$jmlstok', '$pilihan')");
                                            
                                        
                                            ?>
                                            <?php
                include '../koneksi.php';
                if(isset($_GET["bl"])){
                    $br= $_GET["bl"];
                    $tr= $_GET["th"];?>
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/menu/stok.php?bl=<?php echo $br;?>& th=<?php echo $tr;?>';
                                            </script>
                                            <?php 
                                         } }
                            ?>
                </div>

    </div>

    
</body>
</html>