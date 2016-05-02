<?php
$date1 = "2016-04-03";
$date2 = "2016-04-04";

// memecah bagian-bagian dari tanggal $date1
$pecahTgl1 = explode("-", $date1);

// membaca bagian-bagian dari $date1
$tgl1 = $pecahTgl1[2];
$bln1 = $pecahTgl1[1];
$thn1 = $pecahTgl1[0];


//echo $tgl1; exit;
echo "<p>Tanggal yang merupakan hari minggu adalah:</p>";

// counter looping
$i = 0;

// counter untuk jumlah hari minggu
$sum = 0;

do
{
   // mengenerate tanggal berikutnya
   $tanggal = date("Y-m-d", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1));

   // cek jika harinya minggu, maka counter $sum bertambah satu, lalu tampilkan tanggalnya
   //$info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
   //if (date("w", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1)) == 0)
   //{
     $sum++;
     echo $tanggal."<br>";
 //  }

   // increment untuk counter looping
    $i++;
}
while ($tanggal != $date2);

// looping di atas akan terus dilakukan selama tanggal yang digenerate tidak sama dengan $date2.

// tampilkan jumlah hari Minggu
echo "<p>Jumlah hari minggu antara ".$date1." s/d ".$date2." adalah: ".$sum."</p>";

?>