<!DOCTYPE html>
<html>
<head>
    <title>Processed Form Data</title>
</head>
<body>
    <h2>Processed Form Data</h2>
    <?php
    // Process the form data here
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Connect to the database (Update with your database connection details)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mockwebsite";

      
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch the table name from the URL query
        if (isset($_GET['table_name'])) {
            $tableName = $_GET['table_name'];
            // Perform any necessary validation on the table name here

            // Remove the 'id' column from the $_POST data (since it will auto-increment)
            unset($_POST['id']);

            // Construct the INSERT INTO query dynamically
            $columns = implode(",", array_map(function ($columnName) {
                return "`$columnName`";
            }, array_keys($_POST)));
            $values = "'" . implode("','", $_POST) . "'";
            $sql = "INSERT INTO `$tableName` ($columns) VALUES ($values)";

            // Execute the query
            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully.";
                // Redirect the user to "enter_data.php" with the table name
                header("Location: enter_data.php?table_name=" . urlencode($tableName));
                exit; // It's a good practice to include an exit or die after the redirect to ensure the script stops executing further.
            } else {
                echo "Error inserting data: " . $conn->error;
            }
        } else {
            echo "Table name not provided in the URL.";
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Form not submitted.";
    }
    ?>
</body>
</html>