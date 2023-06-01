<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "jour08";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM étudiants");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $all_rows = $stmt->fetchAll();

    if(count($all_rows) > 0) {
        echo "<table>\n";
        echo "<thead>\n";
        echo "<tr>\n";

        // output data of each column header
        $column_headers = array_keys($all_rows[0]);

        foreach($column_headers as $header) {
            echo "<th>$header</th>";
        }

        echo "</tr>\n";
        echo "</thead>\n";
        echo "<tbody>\n";

        // output data of each row
        foreach($all_rows as $row) {
            echo "<tr>\n";
            foreach($row as $column) {
                echo "<td>$column</td>";
            }
            echo "</tr>\n";
        }

        echo "</tbody>\n";
        echo "</table>\n";
    } else {
        echo "0 results";
    }
}
catch(PDOException $e) {
    echo "Connection failed: " + $e->getMessage();
}
?>
