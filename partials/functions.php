<?php
// le variabili eserne non si vedono dentro la funzione
// dobbiamo passarle come argomento, quindi
// $conn passato come parametro è un valore segnaposto, potrei anche
 // chiamarlo $connection o in un altro modo
    function getAll($conn,$table){
        $sql = "SELECT * FROM $table";
        $result = $conn -> query($sql);
        if ($result && $result->num_rows > 0) {
            $results = [];
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        } elseif ($results) {
            $results = [];
        } else {
            $results = false;
        }
        $conn->close();
        return $results;
    }
// -------------------
// Gli argomenti passati nella parentesi tonde sono segnaposto
    function removeId($conn, $table, $id, $basepath){
        $sql = "DELETE FROM $table WHERE id = ?";
        $stmt =  $conn ->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt-> execute();
        if ($stmt && $stmt->affected_rows>0) {
            header("Location: $basepath/index.php?id=$id");
        } else {
            echo "non hai cancellato";
        }
        $stmt->close();
        $conn->close();
    }

// --------------
    function getId($conn,$table,$id){
        $sql = "SELECT * FROM $table WHERE id = $id";
        $result = $conn -> query($sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } elseif ($result) {
            $row = "";
        } else {
            $row = false;
        }
        $conn->close();
        return $row;
    }
 ?>
