<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/penjualan.css">
</head>
<body>
    <!-- bagian menu -->
<div class="nav">
    <div class="logo"><h1>SPBU 84.976.03</h1></div>
    <ul>
        <li><a href="http://localhost/SPBU/">Beranda</a></li>
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
        <li><a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penerimaan</a></li>
        <li><a href="http://localhost/SPBU/menu/stok.php?bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Stok Tangki</a></li>
    </ul>
</div>
<br>

<!-- akhir menu -->

<!-- dasar -->
<div class="dasar">
    <div class="header">
        <div class="headerpenju"><h2>Penjualan</h2></div>
        <div class="tgl">
            <form action="" method="POST">
                <table cellspacing="0" class="table">
                    <tr>
                        <td>Cari : </td>
                        <td>
                        <select name="fm_tg" class="fm_tgl"> 
                            <option value="tgl">Tanggal</option>
                                <?php
                                    for ($tgl=01 ; $tgl <=31 ; $tgl++)
                                    { 
                                    echo " <option value=$tgl> $tgl</option>";
                                    }
                                ?>
                            </select>
                        </td>
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
                        <td><input type="submit" name="simpan" value="Buka" class="tombol"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    
 <!-- bagian isi -->
    <div class="isi">
        <div class="pagi">
            <div class="pagiatas"><h2> Shift Pagi</h2></div>
            <!-- pagi bawah -->
            <div class="pagibawah">
            <?php
                include '../koneksi.php';
                if (isset($_POST['simpan'])) {
                    $tg=($_POST['fm_tg']);
                    $bl=($_POST['fm_bl']);
                    $th=($_POST['fm_th']);
                    $no=1;
                    ?>
                            <script>    
                                document.location.href = 'http://localhost/SPBU/menu/penjualan.php?tg=<?php echo $tg;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>';
                            </script>
                            <?php } ?>
                    <?php
                    if(isset($_GET["tg"])){
                        $tg = $_GET["tg"];
                        $bl = $_GET["bl"];
                        $th = $_GET["th"];
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tg' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Pagi'");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $n=$j['Operator'];
                        $s=$j['Shift'];
                        $t=$j['tanggal'];
                        $b=$j['bulan'];
                        $t=$j['tahun'];
                        $l=$j['liter'];
                        $h=$j['hasil_penjualan'];
                        $angka_format=number_format($h,2);
                        $p=$j['produk'];
                    
                ?>
                <!-- isi 1 -->
                <div class="isi1">
                        <table cellspacing="0">
                        <tr>
                            <td> <img src="../foto/<?php echo $n; ?>.png" alt="" style="width:200px;height:146px;"></td>
                        </tr>
                        <tr>
                            <td><?php echo $n; ?></td>
                        </tr><tr>
                            <td><?php echo $l; ?> Ltr <?php echo " - ";echo $p; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Rp."; echo $angka_format; ?></td>
                        </tr>
                        </table>
                    </div>
                    <!-- isi 1 -->
                <?php } } ?> 

            </div>
            <!-- akhir pagi bawah -->


        </div>
        <!-- akhir pagi -->
               <br>


        <!-- siang -->
        <div class="siang">
            <div class="siangatas" align="center"><h2> Shift Siang</h2></div>
            
            <!-- siang bawah -->
            <div class="siangbawah">
            <?php
                include '../koneksi.php';
                if (isset($_POST['simpan'])) {
                    $tg=($_POST['fm_tg']);
                    $bl=($_POST['fm_bl']);
                    $th=($_POST['fm_th']);
                    $no=1;
                    ?>
                            <script>    
                                document.location.href = 'http://localhost/SPBU/menu/penjualan.php?tg=<?php echo $tg;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>';
                            </script>
                            <?php } ?>
                    <?php
                    if(isset($_GET["tg"])){
                        $tg = $_GET["tg"];
                        $bl = $_GET["bl"];
                        $th = $_GET["th"];
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tg' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                    while ($j=mysqli_fetch_array($tampil)) {
                        $n=$j['Operator'];
                        $s=$j['Shift'];
                        $t=$j['tanggal'];
                        $b=$j['bulan'];
                        $t=$j['tahun'];
                        $l=$j['liter'];
                        $h=$j['hasil_penjualan'];
                        $p=$j['produk'];
                        $angka_format=number_format($h,2);
                    
                ?>
                        <!-- isi 1 -->
                            <div class="isi1">
                                <table cellspacing="0">
                                <tr>
                                    <td> <img src="../foto/<?php echo $n; ?>.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><?php echo $n; ?></td>
                                </tr><tr>
                                    <td><?php echo $l; ?> Ltr <?php echo " - ";echo $p; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo "Rp."; echo $angka_format; ?></td>
                                </tr>
                                </table>
                            </div>
                            <!-- akhir isi 1 -->
                            <?php } } ?>
            </div>
            <!-- akhir siang bawah -->
        </div>
        <!-- akhir siang  -->
    </div>
    <!-- bagian isi -->

    
    
    <!-- tambah data -->
    
    <div class="inputt">
        <a href="http://localhost/SPBU/cetak/">
            <button type="submit" id="cetak" style="background-color: rgba(54, 92, 219, 0.856);border-color: rgb(45, 114, 155);">Cetak</button>
        </a>
        <a href="#tambah_data">
            <button id="input">+ Input</button>
        </a>
    </div>
    <!-- dasar -->
</div>

    <div class="inputan" id="tambah_data">
    <br>
    <a href="http://localhost/SPBU/menu/penjualan.php?tg=<?php echo $tg;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>" class="close">X Close</a>    
            <div class="forminput">
                    <form method="POST" class="form">
                        <table cellpadding="9" class="tengah">
                            <tr>
                                <td>Nama Operator </td>
                                <!-- Nama petugas operator 
                                    kalau mau tambah operator, silahkan salin satu 
                                    baris option di bawah dan ganti nama operatornya.
                                     kalau mau hapus silahkan hapus baris yang ingin dihapus
                                -->
                                <!-- nama foto harus sesuai dengan valuenya... dan format foto harus .png -->
                                <!-- nama foto di value ="" -->
                                <!-- sedangkan nama di layar aplikasi itu yang warna putih -->
                                <td>
                                
                                    <select name="Nama" class="Input">
                                    <?php 
                                 $tampil=mysqli_query($abc, "SELECT * FROM `operator` ");
                                 while ($j=mysqli_fetch_array($tampil)) {
                                     $n=$j['Nama'];

                                     ?>
                                    <option value="<?php echo $n;?>"><?php echo $n;?></option>
                                    <!-- <option value="Wendy">WENDY</option>
                                    <option value="Etha">ETHA</option>
                                    <option value="Hapipa">HAPIPA</option>
                                    <option value="Melly">MELLY</option>
                                    <option value="Dendi">DENDI</option>
                                    <option value="Mey">MEY</option>
                                    <option value="Bone">BONE</option>   -->
                                 <?php } ?>  
                                    <select>
                                    </td>
                            </tr>
                            
                            <tr>
                                <td>Shift</td>
                                <td><select name="Shift" class="Input">
                                <option value="Pagi">PAGI</option>
                                <option value="Siang">SIANG</option>
                                </select></td>
                            </tr>
                            <tr>
                                        <td>Tanggal </td>
                                        <td>
                                        <select name="fm_tgl" class="fm_tg" style="height:30px; background-color:rgb(105, 128, 192) ;
                    border: 2px solid rgba(124, 237, 245, 0.808);"> 
                                            <option value="tgl">Tanggal</option>
                                                <?php
                                                    for ($tgl=01 ; $tgl <=31 ; $tgl++)
                                                    { 
                                                    echo " <option value=$tgl> $tgl</option>";
                                                    }
                                                ?>
                                            </select>
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
                                <td>Produk</td>
                                <td>
                                    <select name="produk" class="Input">
                                        <option  class="op" value="Premium" style="color:yellow; font-weight:bold; ">PREMIUM</option>
                                        <option class="op" value="Pertalite" style="color:lightblue; font-weight:bold;">PERTALITE</option>
                                        <option class="op" value="Pertamax" style="color:blue; font-weight:bold;">PERTAMAX</option>
                                        <option class="op" value="Dexlite" style="color:green; font-weight:bold;">DEXLITE</option>
                                        <option class="op" value="Bio Solar"style="color:black; font-weight:bold;">BIO SOLAR</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>No Nozel</td>
                                <td>
                                    <select name="nosel" class="Input">
                                        <option class="op" value="1" style="color:yellow; font-weight:bold; ">NOZEL A1 (Premium)</option>
                                        <option class="op" value="2" style="color:yellow; font-weight:bold; ">NOZEL A2 (Premium)</option>
                                        <option class="op" value="3" style="color:black; font-weight:bold; ">NOZEL B1 (Biosolar)</option>
                                        <option class="op" value="4" style="color:green; font-weight:bold; ">NOZEL B2 (Dexlite)</option>
                                        <option class="op" value="5" style="color:blue; font-weight:bold; ">NOZEL C1 (Pertamax)</option>
                                        <option class="op" value="6" style="color:lightblue; font-weight:bold; ">NOZEL C2 (Pertalite)</option>
                                        <option class="op" value="7" style="color:blue; font-weight:bold; " >NOZEL D1 (Pertamax)</option>
                                        <option class="op" value="8" style="color:lightblue; font-weight:bold; ">NOZEL D2 (Pertalite)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>

                                <td>Meteran Awal</td>
                                <td>
                                    <input type="text" name="awal" class="Input" onkeyup="isi_otomatis()" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Meteran Akhir</td>
                                <td>
                                    <input type="text" name="akhir" class="Input" onkeyup="isi_otomatis()" required>
                                    <?php $tampil=mysqli_query($abc, "SELECT * FROM `harga` WHERE `Produk`='Premium' ");
                                        while ($j=mysqli_fetch_array($tampil)) {
                                        $sh=$j['Harga'];
                                        ?>
                                    <input type="hidden" value="<?php echo $sh;?>" name="Premium">
                                        <?php } ?>
                                        <?php $tampil=mysqli_query($abc, "SELECT * FROM `harga` WHERE `Produk`='Pertalite' ");
                                        while ($j=mysqli_fetch_array($tampil)) {
                                        $sh=$j['Harga'];
                                        ?>
                                    <input type="hidden" value="<?php echo $sh;?>" name="Pertalite">
                                        <?php } ?>
                                        <?php $tampil=mysqli_query($abc, "SELECT * FROM `harga` WHERE `Produk`='Pertamax' ");
                                        while ($j=mysqli_fetch_array($tampil)) {
                                        $sh=$j['Harga'];
                                        ?>
                                    <input type="hidden" value="<?php echo $sh;?>" name="Pertamax">
                                        <?php } ?>
                                        <?php $tampil=mysqli_query($abc, "SELECT * FROM `harga` WHERE `Produk`='Dexlite' ");
                                        while ($j=mysqli_fetch_array($tampil)) {
                                        $sh=$j['Harga'];
                                        ?>
                                    <input type="hidden" value="<?php echo $sh;?>" name="Dexlite">
                                        <?php } ?>
                                        <?php $tampil=mysqli_query($abc, "SELECT * FROM `harga` WHERE `Produk`='Bio Solar' ");
                                        while ($j=mysqli_fetch_array($tampil)) {
                                        $sh=$j['Harga'];
                                        ?>
                                    <input type="hidden" value="<?php echo $sh;?>" name="BioSolar">
                                        <?php } ?>
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
                                            $nama=($_POST['Nama']);
                                            $Shift=($_POST['Shift']);
                                            $produk=($_POST['produk']);
                                            $tellerawal=($_POST['awal']);
                                            $tellerakhir=($_POST['akhir']);
                                            $tgl=($_POST['fm_tgl']);
                                            $bln=($_POST['fm_bln']);
                                            $thn=($_POST['fm_thn']);
                                            $nozel=($_POST['nosel']);
                                            $premium=($_POST['Premium']);
                                            $pertalite=($_POST['Pertalite']);
                                            $pertamax=($_POST['Pertamax']);
                                            $dexlite=($_POST['Dexlite']);
                                            $biosolar=($_POST['BioSolar']);
                                            $jumlahliter=$tellerakhir-$tellerawal;
                                            

                                            // daftar harga minyak.... 
                                            // silahkan ubah angka jika ada perubahan harganya..
                                            if ($produk == 'Premium') {
                                                // premium
                                                $harga = $premium;
                                            }
                                            elseif ($produk == 'Pertalite') {
                                                // pertalite
                                                $harga = $pertalite;
                                            }
                                            elseif ($produk == 'Pertamax') {
                                                // pertamax
                                                $harga = $pertamax;
                                            }
                                            elseif ($produk == 'Dexlite') {
                                                // dexlite
                                                $harga = $dexlite;
                                            }
                                            else{
                                                // solar
                                                $harga = $biosolar;
                                            }
                                            $uang=$jumlahliter*$harga;

                                            mysqli_query($abc, "INSERT INTO `penjualan`(`Operator`, `Shift`, `tanggal`, `bulan`, `tahun`, `liter`, `hasil_penjualan`, `produk`, `Teller_awal`, `Teller_Akhir`, `Nozel`) VALUES 
                                            ('$nama','$Shift','$tgl','$bln','$thn','$jumlahliter','$uang','$produk', '$tellerawal', '$tellerakhir', '$nozel')");
                                            
                                            $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='$produk'");
                                            while ($j=mysqli_fetch_array($tampil)) {
                                                $stok=$j['stok'];
                                                $pro=$j['produk'];
                                                $stokk=$stok - $jumlahliter;
                                            
                                            mysqli_query($abc, "UPDATE `stok_tangki` SET `stok`='$stokk' WHERE `produk`='$pro'");
                                            }
                                        
                                            ?>
                                            
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/menu/penjualan.php?tg=<?php echo $tgl;?>& bl=<?php echo $bln;?>& th=<?php echo $thn;?>';
                                            </script>
                                            <?php 
                                        }
                            ?>
                </div>

    </div>
    <!-- akhir tambah data -->
                    

</body>
</html>
<style>
.op{
    background-color: rgba(253, 148, 109);
    text-shadow:1px 1px 3px 3px black;
}
</style>