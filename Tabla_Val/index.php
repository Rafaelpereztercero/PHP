<style>
    table {

        border: solid;
    }

    table td {
        padding: 5px;
        border: solid;
    }

    table th {
        padding: 5px;
        border: solid;
    }
</style>
<?php
$output = "<table><tr><th>Contenido de \$var</th><th>isset(\$var)</th><th>empty(\$var)</th><th>bool(\$var)</th></tr>";
$var = [null, 0, true, false, "0","", "foo"];
for ($i = 0; $i < count($var); $i++) {
    $isset = "false";
    $empty = "false";
    $bool = "false";
    if (isset($var[$i]) != 0) {
        $isset = "true";
    }
    if (empty($var[$i]) != 0) {
        $empty = "true";
    }
    if (boolval($var[$i]) != 0) {
        $bool = "true";
    }
    $output = $output . "<tr><td>\$var = " . $var[$i] . "</td>" . "<td>" . $isset . "</td>" . "<td>" . $empty . "</td>" . "<td>" . $bool . "</td></tr>";


}

echo($output);
?>