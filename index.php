<!DOCTYPE html>
<html>
	<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>table</title>
	</head>
	<body>








	</body>





	<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";

    echo "<tr style='font-weight: bold;'>";
        echo "<td >X</td> \n";
        for ($col=1; $col <= 10; $col++) {
            echo "<td>$col</td> \n";
        }
    echo "</tr>";

    for ($row=1; $row <= 10; $row++) { 
        echo "<tr> \n";

        echo "<td style='font-weight: bold;'>$row</td>";

        for ($col=1; $col <= 10; $col++) {
            $p = $col * $row; 
            echo "<td>$p</td> \n";
        }

        echo "</tr>";
    }
echo "</table>";
?>