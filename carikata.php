<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>
<div id="content">
<p align="center">&nbsp;</p>
<form method="post" action="">
<table width="187" height="80" border="0" align="center">
  <tr>
    <td><b>PENCARIAN KATA DASAR</b></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>"></td>
  </tr>
  <tr>
    <td colspan="2"><input class="btnForm" type="submit" name="submit" value="Cari"/></td>
  </tr>
</table>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
</form>
</div>
</body>
</html>