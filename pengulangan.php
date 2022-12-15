<!doctype html>
<html>
<head>
<title>Membuat tabel Array</title>
</head>
<body>
<table
align="center"
border="solid,1px"
width="400px"
>
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Email</th>
<th>Nilai</th>
<th>Status</th>
</tr>
<?php
$data=array('Yuni'=>array('1','20200040146','Yuni','TI','yuni@gmail.com','90','Lulus'),
'Rizky'=>array('2','12133455565','Rizky','TI','rizky@gmail.com','60','Tidak'),
'Silvi'=>array('3','20200040147','Silvi','TI','gilang@gmail.com','80','Lulus')
);
echo "<tr>";
foreach($data['Yuni'] as $nama) {
echo "<td align=center>$nama</td>";
}
echo "</tr>";
echo "<tr>";
foreach($data['Rizky'] as $nama) {
echo "<td align=center>$nama</td>";
}
echo "</tr>";
echo "<tr>";
foreach($data['Silvi'] as $nama) {
echo "<td align=center>$nama</td>";
}
echo "</tr>";
echo "<tr>";

?>
</table>
</body>
</html>