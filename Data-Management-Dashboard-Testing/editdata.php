<!DOCTYPE html>
<html>
<head>
    <title>Edit Row by ID</title>
</head>
<body>
    <h2>Edit Row by ID</h2>
    <?php
    if (isset($_GET['table_name'])) {
        $tableName = $_GET['table_name'];
        echo '<p>Table: ' . $tableName . '</p>';
    }
    ?>

    <form method="get">
        <input type="hidden" name="table_name" value="<?php echo $tableName; ?>">
        <label for="id">Enter ID:</label>
        <input type="text" id="id" name="id">
        <input type="submit" value="Retrieve">
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

    // Retrieve and display the editable form
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        // You should validate and sanitize the $id input to prevent SQL injection

        // Retrieve the row from the database
        $sql = "SELECT * FROM $tableName WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Get column names and their data types
            $columnNames = array_keys($row);
            $columnTypes = array();

            // Fetch column types from the table
            $columnQuery = "SHOW COLUMNS FROM $tableName";
            $columnResult = $conn->query($columnQuery);

            while ($columnRow = $columnResult->fetch_assoc()) {
                $columnTypes[$columnRow['Field']] = $columnRow['Type'];
            }

            echo '<h3>Edit Row Details:</h3>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            foreach ($row as $column => $value) {
                if ($column !== 'id') {
                    // Get the non-technical data type description
                    preg_match('/([a-zA-Z]+)/', $columnTypes[$column], $matches);
                    $dataType = strtolower($matches[1]);
                    $dataTypeDescriptions = array(
                        "int" => "Whole Number",
                        "varchar" => "Text",
                        "date" => "Date",
                        "float" => "Decimal Number",
                        "boolean" => "True/False",
                        "enum" => "Enumeration",
                        "text" => "Long Text",
                        "time" => "Time"
                        // Add other data types as needed
                    );
                    $nonTechnicalDataType = isset($dataTypeDescriptions[$dataType]) ? $dataTypeDescriptions[$dataType] : "Unknown";

                    echo '<label for="' . $column . '">' . $column . ' (' . $nonTechnicalDataType . '):</label>';
                    echo '<input type="text" id="' . $column . '" name="' . $column . '" value="' . $value . '"><br>';
                }
            }
            echo '<input type="submit" value="Save">';
            echo '</form>';
        } else {
            echo 'No row found for the given ID.';
        }
    }

    // Process the form submission
    // Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $updateQuery = "UPDATE $tableName SET ";
    $updates = array();

    foreach ($_POST as $column => $value) {
        if ($column !== 'id') {
            $updates[] = "`$column` = '$value'";
        }
    }

    $updateQuery .= implode(", ", $updates);
    $updateQuery .= " WHERE id = " . $id;

    if ($conn->query($updateQuery)) {
        echo "Row updated successfully.";
        // Redirect to enter_data.php using ./ for relative path
        header("Location: ./enter_data.php?table_name=" . urlencode($tableName));
        exit; // It's a good practice to include an exit or die after the redirect to ensure the script stops executing further.
    } else {
        echo "Error updating row: " . $conn->error;
    }
}


    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
