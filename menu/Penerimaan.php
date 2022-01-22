<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/penerimaan.css">
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
        <li><a href="http://localhost/SPBU/menu/penjualan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penjualan</a></li>
        <li><a href="http://localhost/SPBU/menu/stok.php?bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Stok Tangki</a></li>
    </ul>
</div>
<br>

<!-- akhir menu -->

<!-- dasar -->
<div class="dasar">
    <div class="header">
        <div class="headerpenju"><h2>Penerimaan</h2></div>
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
    
        <?php
        include '../koneksi.php';
        if (isset($_POST['simpan'])) {
            $tg=($_POST['fm_tg']);
            $bl=($_POST['fm_bl']);
            $th=($_POST['fm_th']);
            $no=1;
        
        ?>
                            <script>    
                                document.location.href = 'http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo $tg;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>';
                            </script>
                            <?php } ?>
            <?php
                if(isset($_GET["tg"])){
                    $tg = $_GET["tg"];
                    $bl = $_GET["bl"];
                    $th = $_GET["th"];

            $tampil=mysqli_query($abc, "SELECT * FROM `penerimaan` WHERE `tanggal`='$tg' AND `bulan`='$bl' AND `tahun`='$th' ");
            while ($j=mysqli_fetch_array($tampil)) {
                $n=$j['Nama Sopir'];
                $ja=$j['Jam'];
                $t=$j['tanggal'];
                $b=$j['bulan'];
                $th=$j['tahun'];
                $k=$j['Ketinggian'];
                $s=$j['suhu obs'];
                $d=$j['density'];
                $do=$j['density obs'];
                $v=$j['Volume'];
                $p=$j['produk'];
            
        ?>
        <div class="mobil">
                    <table>
                         <tr>
                            <td><input type="image" src="../foto/<?php echo $n;?>.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><?php echo $n;?> - <?php echo $p;?> - <?php echo $v;?> L</td>
                        </tr>
                        <tr>
                            <td><a href="http://localhost/SPBU/menu/Penerimaan.php?nama=<?php echo $n;?>& tgl=<?php echo $t;?>& bln=<?php echo $b;?>& thn=<?php echo $th;?>& jam=<?php echo $ja;?>#tambah_dat"><input type="submit" value="Selengkapnya" class="inpuut" style="cursor:pointer;"></a></td>
                        </tr>
                    </table>
        </div>
        <?php } } ?>
    </div>



    <!-- bagian isi -->
    <?php
                 if(isset($_GET["nama"])){
                 $nama = $_GET["nama"];
                 $tgl = $_GET["tgl"];
                 $bln = $_GET["bln"];
                 $thun = $_GET["thn"];
                 $jam = $_GET["jam"]; 
                
                     ?>
    <div class="inputan" id="tambah_dat">
    <br>
    <a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo $tgl;?>& bl=<?php echo $bln;?>& th=<?php echo $_GET['thn'] ;?>" class="close">X Close</a>    
            <div class="forminput">
                    <form method="POST" class="form">
                    <?php
        include '../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT * FROM `penerimaan` WHERE `tanggal`='$tgl' AND `bulan`='$bln' AND `tahun`='$thun' AND `Nama Sopir`='$nama' AND `Jam`='$jam' ");
            while ($j=mysqli_fetch_array($tampil)) {
                $n=$j['Nama Sopir'];
                $ja=$j['Jam'];
                $t=$j['tanggal'];
                $b=$j['bulan'];
                $th=$j['tahun'];
                $k=$j['Ketinggian'];
                $s=$j['suhu obs'];
                $d=$j['density'];
                $do=$j['density obs'];
                $v=$j['Volume'];
                $p=$j['produk'];
            
        ?>
                        <table cellpadding="10" class="tengah">
                            <tr>
                                <td>No Mobil</td>
                                <td><?php echo $n ; ?></td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td><?php echo $p ; ?></td>
                            </tr>
                            <tr>
                                <td>Jam</td>
                                <td><?php echo $ja ; ?> WIT</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><?php echo $t ; ?> <?php echo $b ; ?> <?php echo $th ; ?></td>
                            </tr>
                            <tr>
                                <td>Ketinggian volume</td>
                                <td><?php echo $k; ?> cm</td>
                            </tr>
                            <tr>
                                <td>Density Obs</td>
                                <td><?php echo $do ; ?></td>
                            </tr>
                            <tr>
                                <td>Suhu Obs</td>
                                <td><?php echo $s ; ?> <sup>o</sup>C</td>
                            </tr>
                            <tr>
                                <td>Density standard</td>
                                <td><?php echo $d ; ?></td>
                            </tr>
                            <tr>
                                <td>volume</td>
                                <td><?php echo $v ; ?> L</td>
                            </tr>
                        </table>
                        <?php }  ?>
                    </form>     

                </div>

    </div>

                     <?php } ?>

    <!-- batas bawah -->
      







<br>
    <!-- tambah data -->
    <div class="inputt">
    <a href="http://localhost/SPBU/cetak/">
            <button type="submit" id="cetak" style="background-color: rgba(54, 92, 219, 0.856);border-color: rgb(45, 114, 155);">Cetak</button>
        </a>
        <a href="#tambah_data">
            <button>+ Input</button>
        </a>
    </div>


    <div class="inputan" id="tambah_data">
    <br>
    
    <a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo $tg;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>" class="close">X Close</a>    
            <div id="forminput">
                    <form method="POST" id="form">
                        <table cellpadding="9" class="tengah">
                            <tr>
                                <td>No Mobil</td>
                                <td>:</td>
                                <td><input type="text" name="Nama" placeholder="contoh: B 9551 SFU" class="Input"></td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td>:</td>
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
                                <td>Penerimaan</td>
                                <td>:</td>
                                <td>
                                    <select name="milik" class="Input">
                                        <option value="pertamina">PT.PERTAMINA</option>
                                        <option value="tni">LANAL ARU</option>
                                        <option value="polri">POLRI</option>
                                        <option value="polair">POL AIR BENJINA</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jam</td>
                                <td>:</td>
                                <td><input type="time" name="time" class="Input"></td>
                            </tr>
                            <tr>
                                        <td>Tanggal </td>
                                        <td>:</td>
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
                                <td>Ketinggian Volume</td>
                                <td>:</td>
                                <td><input type="text" name="Ket" class="Input"></td>
                            </tr>
                            <tr>
                                <td>volume</td>
                                <td>:</td>
                                <td><input type="text" name="volume" class="Input"></td>
                            </tr>
                            <tr>
                                <td>Density Obs</td>
                                <td>:</td>
                                <td><input type="text" name="DO" class="Input"></td>
                            </tr>
                            <tr>
                                <td>Suhu</td>
                                <td>:</td>
                                <td><input type="text" name="suhu" class="Input"></td>
                            </tr>
                            <tr>
                                <td>Density standard</td>
                                <td>:</td>
                                <td><input type="text" name="DS" class="Input"></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center"><input type="submit" name="nambah" value="Input" style="height:40px; width:100px;" class="button"></td>
                            </tr>
                        </table>
                    </form>     
                    <?php
                    include '../koneksi.php';
                                        if (isset($_POST['nambah'])) {
                                            $nama=($_POST['Nama']);
                                            $produk=($_POST['produk']);

                                            $tgl=($_POST['fm_tgl']);
                                            $bln=($_POST['fm_bln']);
                                            $thn=($_POST['fm_thn']);

                                            $suhu=($_POST['suhu']);
                                            $DO=($_POST['DO']);
                                            $DS=($_POST['DS']);

                                            $keting=($_POST['Ket']);
                                            $jam=($_POST['time']);
                                            $volum=($_POST['volume']);
                                            $milik=($_POST['milik']);

                        

                                            mysqli_query($abc, "INSERT INTO `penerimaan`(`Nama Sopir`, `Jam`, `tanggal`, `bulan`, `tahun`,
                                             `Ketinggian`, `suhu obs`, `density`, `density obs`, `Volume`, `produk`, `milik`) 
                                            VALUES ('$nama', '$jam', '$tgl', '$bln', '$thn', 
                                            '$keting', '$suhu', '$DS', '$DO', '$volum', '$produk', '$milik')");
                                            
                                            $tampil=mysqli_query($abc, "SELECT * FROM `stok_tangki` WHERE `produk`='$produk'");
                                            while ($j=mysqli_fetch_array($tampil)) {
                                                $stok=$j['stok'];
                                                $pro=$j['produk'];
                                                $stokk=$stok + $volum;
                                            
                                            mysqli_query($abc, "UPDATE `stok_tangki` SET `stok`='$stokk' WHERE `produk`='$pro'");
                                            }
                                            ?>
                                            <script>
                                            alert('data berhasil di input!!!  Terimakasih ');
                                            document.location.href = 'http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo $tgl;?>& bl=<?php echo $bl;?>& th=<?php echo $th;?>';
                                            </script>
                                            <?php 
                                        }
                            ?>
                </div>

    </div>
    <!-- akhir tambah data -->




















</div>
<!-- dasar -->
</body>
</html>