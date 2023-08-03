<!DOCTYPE html>
<html>
<head>
    <title>Delete Column and Subsequent Columns</title>
</head>
<body>
    <h2>Delete Column and Subsequent Columns</h2>
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
        <label for="column">Select Column to Delete:</label>
        <select name="column">
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

            // Retrieve column names from the table schema excluding ID column
            $sql = "SHOW COLUMNS FROM $tableName";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $column = $row['Field'];
                    if ($column !== 'id') {
                        echo '<option value="' . $column . '">' . $column . '</option>';
                    }
                }
            }

            // Close the database connection
            $conn->close();
            ?>
        </select>
        <input type="submit" value="Delete Column and Subsequent Columns">
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

    // Delete column and subsequent columns
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['column'])) {
        $columnToDelete = $_GET['column'];
        // You should validate and sanitize the $columnToDelete input to prevent SQL injection

        // Generate ALTER TABLE statement to remove the column
        $alterSql = "ALTER TABLE $tableName DROP COLUMN $columnToDelete";
        if ($conn->query($alterSql)) {
            echo "Column $columnToDelete deleted successfully.<br>";
            // Redirect to the specified URL
            header("Location: ./enter_data.php?table_name=$tableName");
            exit; // Exit the script after the redirect
        } else {
            echo "Error deleting column $columnToDelete: " . $conn->error . "<br>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
