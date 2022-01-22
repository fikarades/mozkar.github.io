<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='22' AND  `bulan`='Februari' AND `tahun`='2021'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 22) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='Februari' AND `tahun`='2021' AND `Shift` ='Pagi'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $n=$j['Teller_Akhir'];
                            ?><table border="1">
                            <tr>
                                <td><?php echo $n;?></td>
                            </tr>
                        </table>
                        <?php }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='21' AND `bulan`='Februari' AND `tahun`='2021'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 21) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='Februari' AND `tahun`='2021' AND `Shift` ='Pagi'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $n=$j['Teller_Akhir'];
                            ?><table border="1">
                            <tr>
                                <td><?php echo $n;?></td>
                            </tr>
                        </table>
                <?php
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='19' AND `bulan`='Februari' AND `tahun`='2021'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='Februari' AND `tahun`='2021' AND `Shift` ='Pagi'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $n=$j['Teller_Akhir'];
                                    ?><table border="1">
                                    <tr>
                                        <td><?php echo $n;?></td>
                                    </tr>
                                </table>
                        <?php
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
    }?>


</body>
</html>