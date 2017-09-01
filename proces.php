<?php //include"../dbconexlocal.php";

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}
$enlacex = generarCodigo(11);
// recibimos el formulario
$fecha = date("d-m-Y H:i");

$enlacex = generarCodigo(11);
$numpreg= str_replace("_", " ",  $_POST['numpreg']);
$pregunta= str_replace("_", " ", $_POST['pregunta']);
$optin1= str_replace("_", " ", $_POST['optin1']);
$optin2= str_replace("_", " ", $_POST['optin2']);
$optin3= str_replace("_", " ", $_POST['optin3']);
$optin4= str_replace("_", " ", $_POST['optin4']);

$rescorrecx= str_replace("_", " ", $_POST['correctora']);

$username= $_POST['nameuser'];



if("optin1" == $rescorrecx){	$rescorrec ="$optin1"; }else{echo"";}
if("optin2" == $rescorrecx){	$rescorrec ="$optin2"; }else{echo"";}
if("optin3" == $rescorrecx){	$rescorrec ="$optin3"; }else{echo"";}
if("optin4" == $rescorrecx){	$rescorrec ="$optin4"; }else{echo"";}




$justiqe= str_replace("_", " ", $_POST['justiqe']);

if($justiqe){
	$justiqex = "$justiqe";
	}
else { $justiqex = ".";  }
$urlorigne = $_SERVER['HTTP_REFERER'];
//echo"// $urlorigne ///";
/// aqui la plantilla
/// verificamos el CHECK BUTON
if($rescorrec){

 $php2 = '<item>'.$numpreg.'_'.$pregunta.'_'.$optin1.'_'.$optin2.'_'.$optin3.'_'.$optin4.'_'.$rescorrec.'_'.$justiqex.'</item>';

$file = fopen("$username/item.txt", "a");
fwrite($file, "$php2" . PHP_EOL);
fclose($file);

//list para bloguer

/*
 $php3 = "<table width='100%' border='0'>
  <tr>
    <td width='8%'>$numpreg</td>
    <td width='59'>$pregunta</td>
    <td width='33'></td>
  </tr>
</table>";

$file3 = fopen("item.txt", "a");
fwrite($file3, "$php3" . PHP_EOL);
fclose($file3);




$sqlInsertNot = mysql_query("INSERT INTO capciosapreg
                   ( numepre, pregunta, optin1, optin2, optin3, optin4, respcorrec, justification, fecharegistro, enlacex )
   VALUES ( '$numpreg', '$pregunta', '$optin1', '$optin2', '$optin3', '$optin4', '$rescorrec', '$justiqe', '$fecha', '$enlacex')",
                                     $db_link);
		
		$idxx = mysql_insert_id();
   if($idxx){
		echo"si";
		
		echo'<script type="text/javascript">
window.location="'.($urlorigne).'";
</script>';
			}
			
else{echo"error NO SE GUARDO EN BASE DE DATOS";}*/



}else{echo"<br>
<br>
ERROR (NO TIENE RESPUESTA CORRECTA)";}// fin verificar chesk

?>
<html>
<head>

<style type="text/css">
<!--
.colortxt {
	color: #3C3;
}
-->
</style>
</head>
<body><br>
<br>
<span class="colortxt">AGREGADO EXITOSAMENTE</span>
<center><a href="<?php echo"$urlorigne";?>">VOLVER</a></center>
</body>
</html>
