<!DOCTYPE html>
<html>

<head>
    <title>List of members</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body style="margin: 50px;">
    <div class="container">
        <h1>Table Name: <?php echo $_GET['table_name'];
        
        ?></h1>
        <br><br>
        <?php $tableName = $_GET['table_name'];
        
       
         // Replace this with your actual table name variable

// Encode the table name as a URL parameter
$encodedTableName = urlencode($tableName);
?>

        <a class="btn btn-primary" href="edit.php?table_name=<?php echo $encodedTableName; ?>" role="button">Make A New Entry</a>
        <a class="btn btn-primary" href="create.php?table_name=<?php echo $encodedTableName; ?>" role="button">Add A New Heading</a>
        <a class="btn btn-primary" href="editdata.php?table_name=<?php echo $encodedTableName; ?>" role="button">Edit An Entry</a>
        
        <a class="btn btn-danger" href="delete.php?table_name=<?php echo $encodedTableName; ?>" role="button">Delete a Row</a><br> <br><br>
        <a class="btn btn-danger" href="delete_heading.php?table_name=<?php echo $encodedTableName; ?>" role="button">Delete a Heading</a><br> <br><br>
        
        
       
        <table class="table">
            <thead>
                <tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "mockwebsite";
                    $tableName = $_GET['table_name']; // Replace with your table name
                    $connection = new mysqli($servername, $username, $password, $database);
                    if ($connection->connect_error) {
                        die("Connection Failed:" . $connection->connect_error);
                    }
                    

                    // Retrieve the column names from the table
                    $sql = "SHOW COLUMNS FROM $tableName";
                    $result = $connection->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<th>" . $row['Field'] . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM $tableName";
                $result = $connection->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                ?>

            </tbody>

        </table>
    </div>
    
</body>


</html>
