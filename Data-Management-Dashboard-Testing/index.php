<!DOCTYPE html>
<html>

<head>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>Create New Table</h1>
    <form method="post">
        <label for="table_name">Table Name(NO SPACE OR SPECIAL CHARACTERS):</label>
        <input type="text" name="table_name" id="table_name" required>
        <br>
        <label for="row_titles">Row Titles(COMMA-SEPARATED AND NO SPACE):</label>
        <input type="text" name="row_titles" id="row_titles" required>
        <br>
        <button type="submit">Create Table</button>
    </form>

    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Make A New Table</h1>
                    </div>
                    <div class="divide-y divide-gray-200">

                        <form action="post">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input type="text" name="table_name" id="table_name" required
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                        placeholder="Email address" />
                                    <label for="table_name"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Table
                                        Name</label>
                                </div>
                                <div class="relative">
                                    <input type="text" name="row_titles" id="row_titles" required
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                        placeholder="Password" />
                                    <label for="row_titles"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Row
                                        Title</label>
                                </div>
                                <div class="relative">
                                    <button class="bg-blue-500 text-white rounded-md px-2 py-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

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