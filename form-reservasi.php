<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: TUGAS PWI</title>
</head>
<body>
<h1 align="center">Reservasi Rindu Jogja</h1>
<div style="position: absolute;left:40%">
<form method="post">
<table cellpadding=2 cellspacing=0>
 <tr>
  <td width=100>Tanggal 1</td><td width=100><input type="date" size="8" name="date1" /></td>
 </tr>
 <tr>
  <td>Tanggal 2</td><td><input type="date" size="8" name="date2" /></td>
  <td> &nbsp </td>
 </tr>
 <tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="HITUNG" />
 <a href="form-reservasi.php"> <input type="button" value="Kembali ke Menu Utama"> </a></td>
  <td> </br> </td>
 </tr>
 <tr>
  <td colspan="2">
   <?php
    if (isset($_POST['submit'])){
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $tanggal_check_in=$_POST['date1'];
    $tanggal_check_out=$_POST['date2'];
    $selisih = ((abs(strtotime ($date1) - strtotime ($date2)))/(60*60*24));
    $harga_perhari=535000;

    $biaya_sewa=$selisih * $harga_perhari;
    /*$grand_total        = 0.05 * $biaya_sewa;

    echo $grand_total; exit;*/


    if($selisih < 7){
      $diskon="0 %";
      $grand_total =$biaya_sewa;
    }if($selisih >=7 && $selisih < 14){
      $diskon="5 %";
      $total_diskon        = (5/100)*$biaya_sewa;
      $grand_total=$biaya_sewa - $total_diskon;
    }if($selisih >=14 && $selisih < 21){
      $diskon="10 %";
      $total_diskon        = (10/100)*$biaya_sewa;
       $grand_total=$biaya_sewa - $total_diskon;
    }if($selisih >= 21 && $selisih < 28){
      $diskon="15 %";
      $total_diskon        = (15/100)*$biaya_sewa;
       $grand_total=$biaya_sewa - $total_diskon;
    }if($selisih >= 21 && $selisih < 28){
      $diskon="20 %";
      $total_diskon        = (20/100)*$biaya_sewa;
      $grand_total=$biaya_sewa - $total_diskon;
    }
   // $hargadisc   = number_format(($p['harga']-$disc),0,",",".");
    echo "Tanggal Check-in :".$tanggal_check_in."<br>";
    echo "Tanggal Check-out  :".$tanggal_check_out."<br>";
    echo "Jumlah Hari  :".$selisih."<br>";
    echo "<hr>";
    echo "Biaya Sewa Homestay : Rp. ".number_format($biaya_sewa,0,",",".")."<br>";
    echo "Harga sewa per hari : Rp. ".number_format($harga_perhari,0,",",".")."<br>";
    echo "Diskon      :".$diskon."<br>";
    echo "Jumlah hari     : ".$selisih."<br>"; 
    echo "Grand Total   : Rp.".number_format($grand_total,0,",",".")."<br>";
  // echo "Lama selisih 2 tanggal antara tanggal ".$date1." dan ".$date2." adalah ".$selisih." hari";
   }
   ?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>