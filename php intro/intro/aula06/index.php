<?php
echo "<table border = '1'><tbody>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0 ) {
        echo "<tr>";
        echo "<td>$i é par</td></tr>";
    }
}
echo "</tbody></table>";
?>