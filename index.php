<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/style.css">
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
        <li><a href="http://localhost/SPBU/menu/penjualan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penjualan</a></li>
        <li><a href="http://localhost/SPBU/menu/Penerimaan.php?tg=<?php echo  $hari[date('d')];?>& bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Penerimaan</a></li>
        <li><a href="http://localhost/SPBU/menu/stok.php?bl=<?php echo $bulan[date('m')];?>& th=<?php echo $tahun;?>">Stok Tangki</a></li>
    </ul>
</div>
<br>

<!-- akhir menu -->

<!-- hal logo pertamina -->

<div class="compartemen">

    <div class="logpas">
        <div class="logpert"><img src="foto/pastipas.png" style="width:150px;"><h1 style="font-size:40px; color:red;text-shadow: 1px 1px 1px white ;">Pertamina</h1></div>
        <div class="pas"><img src="foto/pas.png" style="width:200px;"></div>
    </div>

    <div class="perus"><h1>PT. Arafura Mitra Energi</h1></div>

</div>


    
</body>
</html>