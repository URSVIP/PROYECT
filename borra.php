<?php error_reporting(0);
$numpreg=  $_POST['change'];
$usern=  $_GET['username'];
$userfor=  $_POST['usernamefor'];
//echo"$usern";
if ($numpreg){
	$file = fopen("$userfor/item.txt", "w+");
fwrite($file, "$numpreg" . PHP_EOL);
fclose($file);
}
	$borrars=  $_GET["id"];
	if ($borrars == "delete"){
		$file = fopen("$usern/item.txt", "w+");
fwrite($file, "" . PHP_EOL);
fclose($file);

		}
// $php2 = "$numpreg";
$urlorigne = $_SERVER['HTTP_REFERER'];
?>
<style type="text/css">
<!--
.colortext {
	color: #3C3;
}
-->
</style>

<br />
<span class="colortext">BORRADO EXITOSAMENTE</span>
<center><a href="<?php echo"$urlorigne";?>">VOLVER</a></center>