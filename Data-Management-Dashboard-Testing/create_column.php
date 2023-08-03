
    <?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $columnName = $_POST['column_name'];
    $dataType = $_POST['data_type'];
    if (isset($_GET['table_name'])) {
        // Retrieve the table name from the URL parameter
        $tableName = urldecode($_GET['table_name']);
    }
    // Perform any necessary validation on the input data here

    // Connect to the database (Update with your database connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mockwebsite";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the input data to prevent SQL injection
    $columnName = $conn->real_escape_string($columnName);
    $dataType = $conn->real_escape_string($dataType);

    // Construct the ALTER TABLE query to add the new column
    $sql = "ALTER TABLE $tableName ADD $columnName $dataType";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New column created successfully.";
        // Redirect the user to another page after the query execution
        header("Location: enter_data.php?table_name=$tableName");
        exit; // It's a good practice to include an exit or die after the redirect to ensure the script stops executing further.
    } else {
        echo "Error creating new column: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

