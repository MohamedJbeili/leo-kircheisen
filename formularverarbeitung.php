<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Rückmeldung von PHP</title>
</head>

<body>
<p>HALLO. Das kommt bei mir an!</p>
<?php
if(isset($_GET))
{
echo "<h1>GET-Parameter</h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Parametername</th>";
echo "<th>Wert</th>";   
echo "</tr>";
foreach($_GET as $key => $value)
{
   echo "<tr>";
   echo "<td>$key</td>";
   echo "<td>$value</td>";   
   echo "</tr>";	
}
echo "</table>";
}
if(isset($_POST))
{
	
	echo "<h1>POST-Parameter</h1>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Parametername</th>";
	echo "<th>Wert</th>";   
	echo "</tr>";
	foreach($_POST as $key => $value)
	{
	   echo "<tr>";
	   echo "<td>$key</td>";
	   echo "<td>$value</td>";   
	   echo "</tr>";	
	}
	echo "</table>";
}
?>
</body>
</html>