<p style="font-size: 24px;">A</p>
<?php
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";

for ($i = 4; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 4; $i <= 9; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 4; $j <= 9; $j++) {
        $product = $i * $j;
        $style = ($product < 40) ? " style='background-color: lightgreen;'" : "";
        echo "<td$style>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
<p style="font-size: 24px;">B</p>
<?php
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";


for ($i = 4; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";


for ($i = 4; $i <= 9; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 4; $j <= 9; $j++) {
        $product = $i * $j;
        $style = ($product > 75) ? " style='background-color: red; font-weight: bold;'" : "";
        echo "<td$style>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
<p style="font-size: 24px;">C</p>
<?php
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";


for ($i = 4; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";


for ($i = 4; $i <= 9; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 4; $j <= 9; $j++) {
        $product = $i * $j;
        $style = ($product % 2 == 0) ? " style='background-color: gray;'" : "";
        echo "<td$style>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>