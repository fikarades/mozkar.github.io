<?php
        include '../../koneksi.php'; 
        // header("Content-type:application/vnd.ms-excel");
        // header("Content-Disposition:attachment; filename=penjualan.xls");
        // header("pragma: no-cache");
        // header("Expires: 0");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lappenjubulan.css">
    <title>Penjualan</title>
    <style>

    </style>
</head>
<body>
    
    <div class="container">
        <?php
        if(isset($_GET["bl"])){
            $bl =$_GET["bl"];
            $th =$_GET["th"];
            $bul="";
            if($bl == "February"){
                $bul="Februari";
            }

        ?>
    <table cellspacing="0" class="table" >
    <tr style="border:0;">
                <td colspan="5" style="border:0; font-size:30px;" align="center">
                    Laporan Penjualan Bulan <?php echo $bul; echo " Tahun " ; echo $th; ?>
                    
                </td>
            </tr>
            
            
    <tr style="vertical_align:middle;text-align:center;">
            
            <td>Operator</td>
            <td>Tanggal</td>
            <td>Penjualan</td>
            <td>Pendapatan</td>
            <td>Setor</td>
        </tr>
        <?php
        
        $no = 1;
        $tampil=mysqli_query($abc, "SELECT * FROM `penjualan` WHERE `bulan`='$bl' AND `tahun`='$th' ");
        while ($j=mysqli_fetch_array($tampil)) {
            $n=$j['Operator'];
            $t=$j['tanggal'];
            $l=$j['liter'];
            $h=$j['hasil_penjualan'];
            $p=$j['produk'];
        ?>
        <tr style="vertical_align:middle;text-align:left;" class="tr">
            <td><?php echo $n; ?></td>
            <td><?php echo $t; ?></td>
            <td><?php echo $l; ?> L</td>
            <td>Rp. <?php echo $h; ?></td>
            <td>Rp.<?php echo $p; ?></td>
        </tr>
        <?php } } ?>
            <tr>
                <td style="border:0;" colspan="3" align="right"></td><td style="border:0;" align="right"><a href="http://localhost/SPBU/cetak/penjualan/penjubulexcel.php?bl=<?php echo $bl;?>& th=<?php echo $th;?>"><Input type="submit" class="excel" value="Excel"></a></td><td style="border:0;"><Button onclick="window.print();" class="print" >Print</Button><br></td>
            </tr>
    
        
    </table>
    </div>
    <style>

    </style>
</body>
</html>