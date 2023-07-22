<!DOCTYPE html>
<html>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from the form
    $ID ="";
    $ID = $_POST["ID"];



    // Create a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "table"; // Replace with your database name

    
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the delete query
    $sql = "DELETE FROM users WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    // Check if the delete was successful
    if ($stmt->affected_rows > 0) {
        
        header("Location: index.php");
        exit();
    } else {
        echo "No user entry found with the provided ID.";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>

<head>
    <br><br><br>
    <title>Delete User Entry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Delete User Entry</h2>
        <form action="delete.php" method="post">
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" class="form-control" id="ID" name="ID" required>
            </div>
            <button type="submit" class="btn btn-danger" href="rdbms/index.php">Delete</button>
            <a class='btn btn-outline-primary' href='/rdbms/index.php' role='button'>Cancel </a>
        </form>
    </div>
</body>
</html>
