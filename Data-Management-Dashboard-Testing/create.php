<!DOCTYPE html>
<html>
<head>
    <title>Create Column</title>
    <?php
     if (isset($_GET['table_name'])) {
        // Retrieve the table name from the URL parameter
        $tableName = urldecode($_GET['table_name']);
    }
    ?>
    
</head>
<body>
    <h2>Create a New Column</h2>
    <form action="create_column.php?table_name=<?php echo urldecode($tableName)?>" method="post">
        <label for="column_name">Column Name: (No Space)</label>
        <input type="text" id="column_name" name="column_name" required><br>

        <label for="data_type">Data Type:</label>
        <select id="data_type" name="data_type">
            <option value="INT">Whole Number (INT)</option>
            <option value="VARCHAR">Text (VARCHAR)</option>
            <option value="DATE">Date (DATE)</option>
            <option value="FLOAT">Decimal Number (FLOAT)</option>
            <option value="BOOLEAN">True/False (BOOLEAN)</option>
            <option value="ENUM">Enumeration (ENUM)</option>
            <option value="TEXT">Long Text (TEXT)</option>
            <option value="TIME">Time (TIME)</option>
            <!-- Add other data types as needed -->
        </select><br>

        <input type="submit" value="Create Column">
    </form>
</body>
</html>
