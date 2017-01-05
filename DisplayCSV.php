<?php

//Display CSV contents with PHP.

//Create the teble border in order to display cells for every record in csv file.
echo "<html><body><table border='1'>\n\n";

//opens the file.csv file to read the data
$file = fopen("file.csv", "r");

while (($line = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($line as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
        }
        echo "</tr>\n";
}

//closes the IO file operation
fclose($file);

echo "\n</table></body></html>";
?>