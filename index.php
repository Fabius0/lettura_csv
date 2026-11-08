<!DOCTYPE html>
<html>
<head>
    <title>lettura csv</title>
</head>
<body>

<?php
    $file = fopen("log.csv", "r");
    if(!$file){
        die("Errore nell'apertura del file");
    }
    echo "<table border='1'>";

    while(!feof($file)){
        $row = fgets($file);
        $colonne = explode(",", $row);

        echo "<tr>";
        for($i = 0; $i < count($colonne); $i++){
            echo "<td>$colonne[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($file);
?>

</body>
</html>