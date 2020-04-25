<html>
<head>
<title>Data Kasus Covid19</title>
</head>
<body>
<form action="in.php" method="post">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
<td><h3>DATA PEMANTAUAN PASIEN VIRUS CORONA COVID-19 <br></h3><td>
</tr>


<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<tr>
<td>Nama Operator		:	</td>
<td><input type=”text” name="nama" width=”75" value=""/></td>
</tr>
<tr>
<td>NIM Mahasiswa		: </td>
<td><input type=”text” name="nim" width=”75" value="" /></td>
</tr>
<tr>
<td>Nama wilayah		: </td>
<td>
<select name="wilayah" >
<option value="">- Pilih wilayah -</option>
<option value="DKI jakarta">DKI JAKARTA</option>
<option value="jawa barat">JAWA BARAT</option>
<option value="banten">BANTEN</option>
<option value="jawa tengah">JAWA TENGAH</option>
</select></td>
</tr>
<tr>
<td>Jumlah Positif		: </td>
<td><input type=”text” name="jumlahpositif" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Di rawat		: </td>
<td><input type=”text” name="jumlahdirawat" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Sembuh		: </td>
<td><input type=”text” name="jumlahsembuh" width=”75" ></td>
</tr>
<tr>
<td>Jumlah Meninggal		: </td>
<td><input type=”text” name="jumlahmeninggal" width=”75" ></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<tr>
<td><input type="submit" value="kirim"> <input type="Reset"Name="Reset"Value="Batal"></td>
</tr>

</table>
</form>
</body>
</html>