<!-- Joshua Edwards -->
<!-- Andruw Serretti -->
<!-- Jahchi Burford -->
<!-- Julian Long -->

<html>
    <h1>Counter</h1>
    <?php
    
    include 'connection.php';


    $sql = "SELECT * FROM People";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result -> fetch_assoc();

        echo "People Count: ";
        $var = $row["PeopleCount"]."<br>";
        echo "<span style='font-size:100pt'>$var</span>";
    } else {
        echo "No result";
    }

    $conn->close();
    

    ?>
    
    <form method="post" action="add.php">
        <button type="submit" name="operation" value="add">ADD</button>
        <button type="submit" name="operation" value="subtract">SUBTRACT</button>
        <button type="submit" name="operation" value="reset">RESET</button>
    </form>
    
</html>

