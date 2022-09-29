<!DOCTYPE html>
<html>
    <head>
        <title>TOKO JAYA</title>
        <style>
            body{
                margin: 20px;
            }
            img{
                width: 280px;
                height: 280px;
                border-radius: 10px;
            }
            li{
                margin-left: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h3>Berikut Detail dari Pesanan Anda</h3><br>
            </div>
            <div id="brg">
                <img src="baju.jpeg"><br><br>
                <?php
                    $nama = "Blouse Korean Style";
                    $kode = 304050;
                    $ukuran = "All Size";
                    $ld = 130;
                    $bs = 500;
                    $harga = 65000;
                    $ek = "JNE";

                    echo "----------------------------------------------------<br><br>";
                    echo "Nama Barang   : ".$nama."<br>";
                    echo "Kode Barang   : ".$kode."<br><br>";
                    echo "----------------------------------------------------<br><br>";
                    echo "Spesifikasi<br>";
                    echo "<li>Ukuran        : ".$ukuran."<br></li>";
                    echo "<li>Lingkar Dada  : ".$ld."cm<br></li>";
                    echo "<li>Berat Satuan  : ".$bs."gr<br></li>";
                    echo "<li>Harga         : Rp.".$harga.",-<br><br></li>";
                    echo "---------------------------------------------------<br><br>";
                    echo "Ekspedisi     : ".$ek."<br><br>";
                    echo "---------------------------------------------------<br><br>";
                ?>
            </div>
        </div>
    </body>
</html>