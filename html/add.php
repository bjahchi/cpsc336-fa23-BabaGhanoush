<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['operation'])) {
    $operation = $_POST['operation'];

    $sql = "SELECT PeopleCount FROM People";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $peopleCount = $row['PeopleCount'];

        if ($operation === 'add') {
            $peopleCount++;
        } elseif ($operation === 'subtract' && $peopleCount > 0) {
            $peopleCount--;
        } elseif ($operation === 'reset') {
            $peopleCount = 0;
        }

        $updateSql = "UPDATE People SET PeopleCount = $peopleCount";
        $conn->query($updateSql);
    }

    header("Location: index.php");
    exit();
}
?>
