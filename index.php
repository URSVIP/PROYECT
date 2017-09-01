<?php //include"../dbconexlocal.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>items</title>
<?php include"../styleinde.css";?>
</head>

<body>
<?php /*
$sqlQueryNotxx = mysql_query("SELECT numepre, pregunta, fecharegistro, enlacex FROM capciosapreg   ORDER BY capciosapreg.id   ASC    ", $db_link)
                            or die($sqlQueryNotxx);

while($rowNot = mysql_fetch_array($sqlQueryNotxx)){
	 $numeprex = "$rowNot[numepre]";

	 
	 }
	 
	 $numepre = $numeprex + 1; */
	 
	 //RUTA USER
	 $directorio = $_SERVER['PHP_SELF']; //ruta actual

$directorioa= str_replace("daniel0837365/", "", $directorio); // se cambio curso/ por daniel0837365/
$directorioas= str_replace("/index.php", "", $directorioa);


	 
?>
<form action="../proces.php" method="post" target="_parent">
<table width="878" height="78" border="0"   class="tabelstyle">
  <tr>
    <td>Nunero pregunta</td>
    <td>
    <?php 
	$file = "item.txt";
$lines = explode("</item>", file_get_contents($file));
$cantidad = count($lines);

$total = $cantidad ;

	?>
      <input name="numpreg"  type="text" value="<?php echo"$total";?>"  class="campstyle" />
 
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style=" background-color:#F00; color:#CCC"><a href="../borra.php?id=delete&username=<?php  echo"$directorioas";?>" style="color:#FFF; text-decoration:none;"  >BORRAR TODO</a></td>
  </tr>
  <tr>
    <td width="91">PREGUNTA</td>
    <td width="579"> <input name="pregunta"  type="text" size="90"  class="campstyle"  /></td>
    <td width="39">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="106">&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 1</td>
    <td><input name="optin1"  type="text" value=""  class="campstyle"  />
      <input name="correctora" type="radio" value="optin1" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 2</td>
    <td><input name="optin2"  type="text" value=""  class="campstyle"    />
      <input name="correctora" type="radio" value="optin2" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>opcion 3</td>
    <td><input name="optin3"  type="text" value="" class="campstyle"   />
      <input name="correctora" type="radio" value="optin3" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td>opcion 4</td>
    <td><input name="optin4"  type="text" value=""  class="campstyle"  />
      <input name="correctora" type="radio" value="optin4" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
       <tr>
  
  </tr>
       <tr>
    <td>Justifique la resp.</td>
    <td><input name="justiqe"  type="text" value="" size="90"  class="campstyle"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
     <tr>
    <td>&nbsp;</td>
    <td><input name="nameuser" type="hidden" value="<?php echo "$directorioas"; ?>" />    
      <input name="" type="submit" value="ENVIAR"  class="buttonstyle"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>

</form>
<a href="item.txt" target="_blank" style="display:none;">item.txt</a><br /><br />

<form action="../borra.php" method="post" >
  <textarea name="change" cols="90" rows="20"><?php $file = fopen("item.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file);
}
fclose($file);
?><item><?php echo"$total";?>_fin_nul_nul_nul_nul_nul_nul</item><?php /*
$sqlQueryNotxx2 = mysql_query("SELECT numepre, pregunta, optin1, optin2, optin3, optin4, respcorrec, justification, fecharegistro, enlacex  FROM capciosapreg   ORDER BY capciosapreg.id   ASC    ", $db_link)
                            or die($sqlQueryNotxx2);

while($rowNot2 = mysql_fetch_array($sqlQueryNotxx2)){
	 $numeprex2 = "$rowNot2[numepre]";
	  $pregunta = "$rowNot2[pregunta]";
	   $optin1= "$rowNot2[optin1]";
	    $optin2 = "$rowNot2[optin2]";
		 $optin3 = "$rowNot2[optin3]";
		   $optin4 = "$rowNot2[optin4]";
	$respcorrec = "$rowNot2[respcorrec]";
	$justification = "$rowNot2[justification]";

	 echo'<item>'.($numeprex2).'_'.($pregunta).'_'.($optin1).'_'.($optin2).'_'.($optin3).'_'.($optin4).'_'.($respcorrec).'_'.($justification).'</item>
';
	 }
	 
	
*/
?></textarea>
  <br />
<input name="usernamefor" type="hidden" value="<?php echo "$directorioas"; ?>"  />
<input name="" type="submit" value="CAMBIAR" class="buttonstyle" />
</form>


</body>
</html>