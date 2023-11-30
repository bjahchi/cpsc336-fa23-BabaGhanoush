<!-- Joshua Edwards -->
<!-- Andruw Serretti -->
<!-- Jahchi Burford -->
<!-- Julian Long -->

<html>
    <h1>Counter</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "baba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("connection failed: ". $conn->connect_error);
    }
    echo "Connection Successfully <br>";


    $sql = "SELECT * FROM People";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result -> fetch_assoc();

        echo "People Count: ".$row["PeopleCount"]."<br>";
    } else {
        echo "No result";
    }

    $conn->close();
    

    ?>
    
    <form>
    <button>ADD</button>
    <button>SUBTRACT</button>
    <button>RESET</button>
</html>

