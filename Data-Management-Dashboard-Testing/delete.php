<!DOCTYPE html>
<html>
<head>
    <title>Delete Row by ID</title>
</head>
<body>
    <h2>Delete Row by ID</h2>
    <?php
    if (isset($_GET['table_name'])) {
        $tableName = $_GET['table_name'];
        echo '<p>Table: ' . $tableName . '</p>';
    } else {
        echo '<p>Table name not provided in the URL.</p>';
        exit; // Exit the script if table name is missing
    }
    ?>

    <form method="get">
        <input type="hidden" name="table_name" value="<?php echo $tableName; ?>">
        <label for="id">Enter ID:</label>
        <input type="text" id="id" name="id">
        <input type="submit" value="Delete">
    </form>

    <?php
    // Connect to the database (Update with your database connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mockwebsite";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the row
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        // You should validate and sanitize the $id input to prevent SQL injection

        // Delete the row from the database
        $sql = "DELETE FROM $tableName WHERE id = $id";
        if ($conn->query($sql)) {
            echo "Row deleted successfully.";
            // Redirect to edit.php using ./ for relative path
            header("Location: ./enter_data.php?table_name=" . urlencode($tableName));
            exit; // It's a good practice to include an exit or die after the redirect to ensure the script stops executing further.
        } else {
            echo "Error deleting row: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
