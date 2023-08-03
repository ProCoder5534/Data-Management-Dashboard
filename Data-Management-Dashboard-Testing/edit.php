<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Form</title>
</head>
<body>
    <h2>Dynamic Form</h2>
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

    // Fetch the table name from the URL query
    if (isset($_GET['table_name'])) {
        $tableName = $_GET['table_name'];
        // Perform any necessary validation on the table name here

        // Mapping database data types to non-technical descriptions
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

        // Fetch column names and data types from the table
        $sql = "SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$dbname' AND TABLE_NAME='$tableName'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<form action="process_form.php?table_name=' . urlencode($tableName) . '" method="post">';
            while ($row = $result->fetch_assoc()) {
                $columnName = $row["COLUMN_NAME"];
                // Skip the 'id' column
                if ($columnName === 'id') {
                    continue;
                }
                $dataType = $row["DATA_TYPE"];
                $nonTechnicalDataType = isset($dataTypeDescriptions[strtolower($dataType)]) ? $dataTypeDescriptions[strtolower($dataType)] : "Unknown";
                echo '<label for="' . $columnName . '">' . $columnName . ' (' . $nonTechnicalDataType . '):</label>';
                echo '<input type="text" id="' . $columnName . '" name="' . $columnName . '"><br>';
            }
            echo '<input type="submit" value="Submit">';
            echo '</form>';
        } else {
            echo "No columns found in the table.";
        }
    } else {
        echo "Table name not provided in the URL.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>