<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menucetak.css">
    <title>Document</title>
</head>
<body>
<!-- bagian menu -->
<div class="nav">
    <div class="logo"><h1>SPBU 84.976.03</h1></div>
    <ul>
    <li><a href="http://localhost/SPBU">Beranda</a></li>
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
        $hari=date('d');
        ?>
        <li><a href="http://localhost/SPBU/menu/penjualan.php?tg=<?php echo $hari;?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penjualan</a></li>
        <li><a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo $hari;?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penerimaan</a></li>
        
    </ul>
</div>
<br>

<!-- akhir menu -->






    <!-- dasar -->
<div class="dasar">
 <!-- bagian isi -->
    <div class="isi">
        <div class="laporan">
            <div class="judullaporan">
                <h3>Laporan Realisasi Penyaluran</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
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
                        <td align="left">
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
                        <td>
                        <input type="submit" name="simpan" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        
        <?php
            if (isset($_POST['simpan'])) {
                $bln=($_POST['fm_bl']);
                $thn=($_POST['fm_th']);
                $produk=($_POST['produk']);
                echo $bln;
                echo $thn;
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/penerimaan/laporan_realisasi_penyaluran.php?bl=<?php echo $bln;?>& th=<?php echo $thn;?>';
        </script>
        <?php } ?>

        <!-- yang ke -2 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>Laporan Penyaluran Bulanan SPBU</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                        <td>
                        <select name="fm_b" id="fm_bln">
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
                        <td align="left">
                        <select name="fm_t" id="fm_thn">
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
                        <td>
                        <input type="submit" name="simpa" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
            <?php
            if (isset($_POST['simpa'])) {
                $bl=($_POST['fm_b']);
                $th=($_POST['fm_t']);
                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/penerimaan/laporan_penerimaan.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>';
        </script>
        <?php } ?>
        </div>

        <!-- yang ke 3 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>Laporan Bulanan SPBU Jaya Pura</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                        
                        <td>
                        <select name="fm_bb" id="fm_bln">
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
                        <td align="left">
                        <select name="fm_" id="fm_thn">
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
                        <td>
                        <input type="submit" name="simp" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
            <?php
            if (isset($_POST['simp'])) {
                ;
                $bl=($_POST['fm_bb']);
                $th=($_POST['fm_']);

                
        ?> 
        <script>
            document.location.href ='http://localhost/SPBU/cetak/penerimaan/Laporan_Jaya_pura.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>';
        </script>
        <?php } ?>
        </div>
        <!-- yang ke 4 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>C2. Catatan Penjualan Harian</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                    <td>
                        <select name="fm_bba" id="fm_bln">
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
                        <td align="left">
                        <select name="fll" id="fm_thn">
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
                        <td>
                        <input type="submit" name="sim" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <?php
            if (isset($_POST['sim'])) {
                $bl=($_POST['fm_bba']);
                $th=($_POST['fll']);

                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/penjualan/C2_Catatan_penjualan_harian.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>';
        </script>
        <?php } ?>


        <!-- yang ke 5 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>C1. POSISI ISOLATOR</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                    <td>
                        <select name="fm_bba" id="fm_bln">
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
                        <td align="left">
                        <select name="fll" id="fm_thn">
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
                        <td>
                        <input type="submit" name="sin" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <?php
            if (isset($_POST['sin'])) {
                $bl=($_POST['fm_bba']);
                $th=($_POST['fll']);

                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/penjualan/laporan_posisi_isolator.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>';
        </script>
        <?php } ?>

        <!-- batas yang ke 5 -->



        <!-- yang ke 6 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>Cek Penjualan Operator Nozel</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                    <td>
                    <select name="Nama" id="fm_bln">
                                    <?php 
                                    include '../koneksi.php';
                                 $tampil=mysqli_query($abc, "SELECT * FROM `operator` ");
                                 while ($j=mysqli_fetch_array($tampil)) {
                                     $n=$j['Nama'];

                                     ?>
                                    <option value="<?php echo $n;?>"><?php echo $n;?></option>
                                    
                                 <?php } ?>  
                                    <select>
                    </td>
                    <td>
                        <select name="fm_bba" id="fm_bln">
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
                        <td align="left">
                        <select name="fll" id="fm_thn">
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
                        <td>
                        <input type="submit" name="siin" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <?php
            if (isset($_POST['siin'])) {
                $bl=($_POST['fm_bba']);
                $th=($_POST['fll']);
                $nama=($_POST['Nama']);

                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/tambah_pegawai.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>& nama=<?php echo $nama;?>';
        </script>
        <?php } ?>

        <!-- batas yang ke 6 -->
        <div class="laporan">
            <div class="judullaporan">
                <h3>Operator Nozel</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                    
                        <td>
                        <input type="submit" name="siiin" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <?php
            if (isset($_POST['siiin'])) {
                $bl=($_POST['fm_bba']);
                $th=($_POST['fll']);
                $nama=($_POST['Nama']);

                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/data_pegawai.php';
        </script>
        <?php } ?>

        <div class="laporan">
            <div class="judullaporan">
                <h3>Daftar Harga Produk BBM</h3>
            </div>    
            <form action="" method="post">
                <table cellspacing="0">
                    <tr>
                    
                        <td>
                        <input type="submit" name="siiian" value="Tampilkan" class="tombol"></td>
                    </tr>
                    
                </table>
            </form>
        </div>
        <?php
            if (isset($_POST['siiian'])) {

                
        ?> 
        <script>
            document.location.href = 'http://localhost/SPBU/cetak/harga.php';
        </script>
        <?php } ?>
    </div>
    <!-- bagian isi -->

    </div>
    <!-- dasar -->
</body>
</html>