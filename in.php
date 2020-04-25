<html>
<head>
<title>hasil output</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">


<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$wilayah = $_POST['wilayah'];
$jp = $_POST['jumlahpositif'];
$jd = $_POST['jumlahdirawat'];
$js = $_POST['jumlahsembuh'];
$jm = $_POST['jumlahmeninggal'];
?>

<h2 align="center">Data Pemantauan COVID19 wilayah <?php echo "" . $wilayah; ?><br>
<?php echo date('l, d-m-Y  h:i:s a'); ?><br>
Nama Operator : 
<?php echo "" . $nama; 
?><br>
NIM :
<?php echo "" . $nim; 
?><br>
</h2>

<body>
<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<tr>
<td>Jumlah Positif </td>
<td>Jumlah Dirawat </td>
<td>Jumlah Sembuh  </td>
<td>Jumlah Meninggal</td>
</tr>
<tr>
<td><input type=”text” name="jumlahpositif" width=”75" value="<?php echo "" . $jp; ?>"/></td>
<td><input type=”text” name="jumlahdirawat" width=”75" value="<?php echo "" . $jd; ?>"/></td>
<td><input type=”text” name="jumlah sembuh" width=”75" value="<?php echo "" . $js; ?>"/></td>
<td><input type=”text” name="jumlahmeninggal" width=”75" value="<?php echo "" . $jm; ?>"/></td>
</tr>
</table>
</body>

</body
