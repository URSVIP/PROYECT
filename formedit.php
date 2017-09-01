<?php include"../dbconexlocal.php"; ?>
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
<?php
$sqlQueryNotxx2 = mysql_query("SELECT numepre, pregunta, optin1, optin2, optin3, optin4, respcorrec, justification, fecharegistro, enlacex  FROM capciosapreg   ORDER BY capciosapreg.id   ASC   ", $db_link)
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
	
		$enlacex  = "$rowNot2[enlacex]";

	 echo'
	 
	 
	<form action="edit-proces.php" method="post" target="_parent">
<table width="878" height="78" border="1">
  <tr>
    <td>Nunero pregunta</td>
    <td>
  
      <input name="numpreg"  type="text" value="'.($numeprex2).'"  /><br />

	  <input name="codipost"  type="hidden" value="'.($enlacex).'"  />
 
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td width="119">PREGUNTA</td>
    <td width="540"> <input name="pregunta"  type="text" value="'.($pregunta).'" size="90"  /></td>
    <td width="40">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="106">&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 1</td>
    <td><input name="optin1"  type="text" value="'.($optin1).'"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>opcion 2</td>
    <td><input name="optin2"  type="text" value="'.($optin2).'"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>opcion 3</td>
    <td><input name="optin3"  type="text" value="'.($optin3).'"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td>opcion 4</td>
    <td><input name="optin4"  type="text" value="'.($optin4).'"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
       <tr>
  
  </tr>
  <tr>
    <td>Respuesta</td>
    <td><input name="respcorrec"  type="text" value="'.($respcorrec).'"   /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
       <tr>
    <td>Justifique la resp.</td>
    <td><input name="justification"  type="text" value="'.($justification).'" size="90"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<input name="" type="submit" value="ENVIAR" />
</form>

<br /> <br /> 

';
	 }
	 
	


?>



<br /> 
	 








</body>
</html>