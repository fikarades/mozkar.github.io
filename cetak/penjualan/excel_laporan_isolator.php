<?php
include '../../koneksi.php';
if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
 }
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment; filename=C1. POSISI TOTALISATOR $bl $th.xls");
        header("pragma: no-cache");
        header("Expires: 0");

?>
<?php 
        error_reporting(0);
       
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C1. Posisi Isolator</title>
</head>
<body>
    <div class="container">
    
    <table>
            <tr>
                <td style="font-weight:bold;">C1. POSISI TOTALISATOR</td>
            </tr>
        </table>
        <table border="1" cellspacing="0" style="vertical_align:middle;text-align:center;" class="table">
        <tr style="font-weight:bold;">
            <td>POMPA</td>
            <td colspan="2" style="background-color:yellow;">PREMIUM</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
            <td>NOSEL</td>
            <td>A1</td>
            <td>A2</td>
        </tr>
        <?php
   if(isset($_GET["bl"])){
    $bl =$_GET["bl"];
    $th =$_GET["th"];
   }?>
        <tr>
            <td>AWAL BULAN</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='premium' AND `tanggal`='1' AND `Nozel`='1' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $p=$j['Teller_awal'];
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

            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='premium' AND `tanggal`='1' AND `Nozel`='2' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $r=$j['Teller_awal'];
           $angka_format=number_format($r,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;

            }?></td>


           
            <td>--</td>
        </tr>
        <tr>
            <td>AKHIR BULAN</td>


            <td>
            <?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND  `bulan`='$bl' AND `tahun`='$th' AND `Nozel`='1' AND `produk`='premium' ");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $n=$j['Teller_Akhir'];
                    $angka_format=number_format($n,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `bulan`='$bl' AND `tahun`='$th' AND `Nozel`='1' AND `produk`='premium'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang' AND `produk`='premium'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $n=$j['Teller_Akhir'];
                    $angka_format=number_format($n,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='29' AND `bulan`='$bl' AND `tahun`='$th' AND `Nozel`='1' AND `produk`='premium'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        if ($tll == 29) {
                            $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $n=$j['Teller_Akhir'];
                            $angka_format=number_format($n,3);
                                $ppl = $angka_format;
                                if($ppl == '0'){
                                    $ppl = '-';
                                }
                                else{
                                    
                                    $ppl = $angka_format;
                                }
                                echo $ppl;
                            }
                        }
                        else {
                            $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `bulan`='$bl' AND `tahun`='$th' AND `Nozel`='1' AND `produk`='premium'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tlll=$j['SUM(`tanggal`)']; 
                            $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tlll' AND `Nozel`='1' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                                        $n=$j['Teller_Akhir'];
                                        $angka_format=number_format($n,3);
                                            $ppl = $angka_format;
                                            if($ppl == '0'){  $ppl = '-'; }
                                            else{  $ppl = $angka_format;  }
                                            echo $ppl;
                                    }
                                }
                            
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
                
                </td>

            <td>
            <?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='2' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='2' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $re=$j['Teller_Akhir'];
                    $angka_format=number_format($re,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='2' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='2' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $re=$j['Teller_Akhir'];
                    $angka_format=number_format($re,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='2' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='premium'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='2' AND `produk`='premium' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $re=$j['Teller_Akhir'];
                            $angka_format=number_format($re,3);
                            $ppl = $angka_format;
                            if($ppl == '0'){
                                $ppl = '-';
                            }
                            else{
                                
                                $ppl = $angka_format;
                            }
                            echo $ppl;
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
            </td>
            
            <td>----</td>
        </tr>
        <tr>
            <td>PENJUALAN</td>
            <td><?php
            
            $pen = $n - $p;
            echo $pen;
            ?></td>
            <td><?php
            
            $jua = $re - $r;
            echo $jua;
            ?></td>

            <td><?php $tot= $pen + $jua ;
            echo $tot;   ?></td>
        </tr>
        </table>

        <br><br>
        <table border="1" cellspacing="0" style="vertical_align:middle;text-align:center;" class="table">
        <tr style="font-weight:bold;">
            <td>POMPA</td>
            <td style="background-color:lightgray;">BIOSOLAR</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
            <td>NOSEL</td>
            <td>B1</td>
            
        </tr>
        <tr>
            <td>AWAL BULAN</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Bio Solar' AND `tanggal`='1' AND `Nozel`='3' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $pe=$j['Teller_awal'];
           $angka_format=number_format($pe,3);
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
            <td></td>
            
        </tr>
        <tr>
            <td>AKHIR BULAN</td>
            <td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='3' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='3' AND `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $nn=$j['Teller_Akhir'];
                    $angka_format=number_format($nn,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='3' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='3' AND `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $nn=$j['Teller_Akhir'];
                    $angka_format=number_format($nn,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='3' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Bio Solar'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='3' AND `produk`='Bio Solar' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $nn=$j['Teller_Akhir'];
                            $angka_format=number_format($nn,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
    }?></td>
            <td></td>
            
        </tr>
        <tr>
            <td>PENJUALAN</td>
            <td><?php

                $jj = $nn - $pe;
                echo $jj
                ?></td>
            <td><?php echo $jj; ?></td>
            
        </tr>
        </table>
        <br><br>
        <table border="1" cellspacing="0" style="vertical_align:middle;text-align:center;" class="table">
        <tr style="font-weight:bold;">
            <td>POMPA</td>
            <td  colspan="2" style="background-color:blue;">PERTAMAX</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
            <td>NOSEL</td>
            <td>C1</td>
            <td>D1</td>
            
        </tr>
        <tr>
            <td>AWAL BULAN</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Pertamax' AND `tanggal`='1' AND `Nozel`='5' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $pee=$j['Teller_awal'];
           $angka_format=number_format($pee,3);
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
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Pertamax' AND `tanggal`='1' AND `Nozel`='7' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $peek=$j['Teller_awal'];
           $angka_format=number_format($peek,3);
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
            <td></td>
            
        </tr>
        <tr>
            <td>AKHIR BULAN</td>
            <td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='5' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='5' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $ne=$j['Teller_Akhir'];
                    $angka_format=number_format($ne,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='5' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='5' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $ne=$j['Teller_Akhir'];
                    $angka_format=number_format($ne,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='5' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='5' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $ne=$j['Teller_Akhir'];
                            $angka_format=number_format($ne,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
}?></td>


<td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='7' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='7' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $nek=$j['Teller_Akhir'];
                    $angka_format=number_format($nek,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='7' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='7' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $nek=$j['Teller_Akhir'];
                    $angka_format=number_format($nek,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='7' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertamax'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='7' AND `produk`='Pertamax' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $nek=$j['Teller_Akhir'];
                            $angka_format=number_format($nek,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
}?></td>
            <td></td>
            
        </tr>
        <tr>
            <td>PENJUALAN</td>
            <td><?php
             
                $jo = $ne - $pee;
                echo $jo;
                ?></td>
            <td><?php
            $jok = $nek - $peek;
            echo $jok;
            
            ?></td>
            <td>
            <?php $jokk = $jo + $jok;
            echo $jokk;
            ?>
            </td>
            
        </tr>
        </table>
<br><br>
<table border="1" cellspacing="0" style="vertical_align:middle;text-align:center;" class="table">
        <tr style="font-weight:bold;">
            <td>POMPA</td>
            <td style="background-color:green;">DEXLITE</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
            <td>NOSEL</td>
            <td>B2</td>
            
        </tr>
        <tr>
            <td>AWAL BULAN</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Dexlite' AND `tanggal`='1' AND `Nozel`='4' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $peeo=$j['Teller_awal'];
           $angka_format=number_format($peeo,3);
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
            <td></td>
            
        </tr>
        <tr>
            <td>AKHIR BULAN</td>
            <td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='4' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='4' AND `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neo=$j['Teller_Akhir'];
                    $angka_format=number_format($neo,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='4' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='4' AND `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neo=$j['Teller_Akhir'];
                    $angka_format=number_format($neo,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='4' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Dexlite'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='4' AND `produk`='Dexlite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $neo=$j['Teller_Akhir'];
                            $angka_format=number_format($neo,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
}?></td>
            <td></td>
            
        </tr>
        
        <tr>
            <td>PENJUALAN</td>
            <td><?php
             
                $joj = $neo - $peeo;
                echo $joj;
                ?></td>
            <td><?php echo $joj; ?></td>
            
        </tr>
        </table>


        <br><br>
<table border="1" cellspacing="0" style="vertical_align:middle;text-align:center;" class="table">
        <tr style="font-weight:bold;">
            <td>POMPA</td>
            <td colspan="2" style="background-color:lightblue;">PERTALITE</td>
            <td rowspan="2">TOTAL</td>
        </tr>
        <tr>
            <td>NOSEL</td>
            <td>C2</td>
            <td>D2</td>
            
        </tr>
        <tr>
            <td>AWAL BULAN</td>
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Pertalite' AND `tanggal`='1' AND `Nozel`='6' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $peeoo=$j['Teller_awal'];
           $angka_format=number_format($peeoo,3);
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
            <td><?php
            include '../../koneksi.php';
            $tampil=mysqli_query($abc, "SELECT `Teller_awal` FROM `penjualan` WHERE `Shift`='Pagi' AND `produk`='Pertalite' AND `tanggal`='1' AND `Nozel`='8' AND `tahun`='$th' AND `bulan`='$bl' ");
            while ($j=mysqli_fetch_array($tampil)) {
           $peeook=$j['Teller_awal'];
           $angka_format=number_format($peeook,3);
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
            <td></td>
            
        </tr>
        <tr>
            <td>AKHIR BULAN</td>
            <td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='6' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='6' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neoo=$j['Teller_Akhir'];
                    $angka_format=number_format($neoo,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='6' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='6' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neoo=$j['Teller_Akhir'];
                    $angka_format=number_format($neoo,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='6' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='6' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $neoo=$j['Teller_Akhir'];
                            $angka_format=number_format($neoo,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
}?></td>

<td><?php
    include '../../koneksi.php';
    $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='31' AND `Nozel`='8' AND  `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
    while ($j=mysqli_fetch_array($tampil)) {
            $t=$j['SUM(`tanggal`)'];
        //    if
            if ($t == 31) {
                $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$t' AND `Nozel`='8' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neook=$j['Teller_Akhir'];
                    $angka_format=number_format($neook,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl; }
            }
            // batas if
            else {
                
                $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='30' AND `Nozel`='8' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
                while ($j=mysqli_fetch_array($tampil)) {
                $tl=$j['SUM(`tanggal`)'];
                // if baru
                if ($tl == 30) {
                    $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tl' AND `Nozel`='8' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                while ($j=mysqli_fetch_array($tampil)) {
                    $neook=$j['Teller_Akhir'];
                    $angka_format=number_format($neook,3);
                    $ppl = $angka_format;
                    if($ppl == '0'){
                        $ppl = '-';
                    }
                    else{
                        
                        $ppl = $angka_format;
                    }
                    echo $ppl;
    }
                   
                }
                // batas if baru
                
                    // else
                    else {
                        $tampil=mysqli_query($abc, "SELECT SUM(`tanggal`) FROM `penjualan` WHERE `tanggal`='28' AND `Nozel`='8' AND `bulan`='$bl' AND `tahun`='$th' AND `produk`='Pertalite'");
                        while ($j=mysqli_fetch_array($tampil)) {
                        $tll=$j['SUM(`tanggal`)']; 
                        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `tanggal`='$tll' AND `Nozel`='8' AND `produk`='Pertalite' AND `bulan`='$bl' AND `tahun`='$th' AND `Shift` ='Siang'");
                        while ($j=mysqli_fetch_array($tampil)) {
                            $neook=$j['Teller_Akhir'];
                            $angka_format=number_format($neook,3);
                $ppl = $angka_format;
                if($ppl == '0'){
                    $ppl = '-';
                }
                else{
                    
                    $ppl = $angka_format;
                }
                echo $ppl;
            }
                    
                        }
                        // tampil
                    }
                    // else bawah
                            
        }
        // while
            
    }
    //batas else
        
}?></td>
            <td></td>
            
        </tr>
        
        <tr>
            <td>PENJUALAN</td>
            <td><?php
             
                $jojo = $neoo - $peeoo;
                echo $jojo;
                ?></td>
            <td><?php  $jojoo = $neook - $peeook;
            echo $jojoo; ?></td>
            <td><?php $jojok = $jojo + $jojoo;
            echo $jojok; ?></td>
            
        </tr>
        </table>
<br><br>
    </div>
</body>
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
            width:900px;
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
</html>