
<?php

$numero = $_GET["$numero"];
echo "<table>";
echo "<tr><th>tabla del $numero</th></tr>";

for ($i=1; $i <=10 ; $i++) { 
	echo "<tr>";
	echo "<td>$numero x $i</td>";
	echo "<td>". $numero * $i . "</td>";
	echo "</tr>";

}
echo "</table>";

?>

