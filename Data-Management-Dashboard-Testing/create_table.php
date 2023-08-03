<!DOCTYPE html>
<html>

<body>
    <h1>Create New Table</h1>
    <form method="post">
        <label for="table_name">Table Name: (NO SPACE OR SPECAIL CHARACTERS)</label>
        <input type="text" name="table_name" id="table_name" required>
        <br>
        <label for="row_titles">Row Titles (comma-separated):</label>
        <input type="text" name="row_titles" id="row_titles" required>
        <br>
        <button type="submit">Create Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mockwebsite";
        $tableName = $_POST["table_name"];
        $rowTitles = $_POST["row_titles"];

        // Explode the comma-separated row titles into an array
        $rowTitlesArray = array_map('trim', explode(',', $rowTitles));
        $escapedRowTitles = array_map(function ($title) {
            return "`" . str_replace("`", "``", $title) . "` VARCHAR(255) NOT NULL";
        }, $rowTitlesArray);

        // Combine row titles into a single string
        $rowTitlesSql = implode(', ', $escapedRowTitles);

        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "CREATE TABLE $tableName (
            id INT NOT NULL AUTO_INCREMENT,
            $rowTitlesSql,
            PRIMARY KEY (id)
        );";

        // Execute the query
        $result = mysqli_query($connection, $sql);

        // Check if the query was successful
        if ($result) {
            echo "The table '$tableName' was created successfully!";
            // Redirect to another page after successful table creation
            header("Location: enter_data.php?table_name=$tableName");
            exit(); // Make sure to exit after the header() to prevent further code execution
        } else {
            echo "The table could not be created: " . mysqli_error($connection);
        }

        // Close the connection
        mysqli_close($connection);
    }
    ?>
</body>

</html>