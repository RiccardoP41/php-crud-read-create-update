<?php
    include __DIR__ .'/../database.php';
    $sql = "SELECT id, room_number, floor FROM `stanze`";
    $result = $conn -> query($sql);
    if ($result && $result->num_rows > 0) {
        $results = [];
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } elseif ($results) {
        echo "0 risultati";
    } else {
        echo "query error";
    }
    $conn->close();

 ?>
