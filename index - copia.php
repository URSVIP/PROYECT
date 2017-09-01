<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>items</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #333;
}
-->
</style></head>

<body>

<form action="proces.php" method="post" target="_blank">
<table width="878" height="78" border="1">
  <tr>
    <td>Nunero pregunta</td>
    <td>
      <input name="numpreg"  type="text"  />
 
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style=" background-color:#F00; color:#CCC"><a href="borra.php" target="_blank">BORRAR TODO</a></td>
  </tr>
  <tr>
    <td width="108">PREGUNTA</td>
    <td width="540"> <input name="pregunta"  type="text" size="90"  /></td>
    <td width="26">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="144">&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 1</td>
    <td><input name="optin1"  type="text"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 2</td>
    <td><input name="optin2"  type="text"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>opcion 3</td>
    <td><input name="optin3"  type="text"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td>opcion 4</td>
    <td><input name="optin4"  type="text"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
       <tr>
    <td>Respuesta correcta</td>
    <td><input name="rescorrec"  type="text" size="90"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
       <tr>
    <td>Justifique la resp.</td>
    <td><input name="justiqe"  type="text" size="90"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<input name="" type="submit" value="ENVIAR" />
</form>
<a href="item.txt" target="_blank">item.txt</a><br /><br />
<br />



<form action="borra.php" method="post" target="_blank">

<textarea name="change" cols="90" rows="20"><?php 
$file = fopen("item.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file);
}
fclose($file);
?>
</textarea><br />

<input name="" type="submit" value="CAMBIAR" />
</form>


</body>
</html>