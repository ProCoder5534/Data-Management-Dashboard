<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "table";

$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$Phone_Number= "";
$Address = "";


$errorMessage = "";
$successMessage="";
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $Phone_Number = $_POST["Phone_Number"];
    $Address = $_POST["Address"];

    do {
        if ( empty($name) || empty($Phone_Number) || empty($Address)) {
            $errorMessage = "All the feilds are required.";
            echo "";
            break;
        }
        // add new client to database 

        $sql = "INSERT INTO `users` (name, Phone_Number, Address) VALUES ('$name', '$Phone_Number', '$Address')";

                "VALUES ('$name', '$Phone_Number', '$Address')";
        $result = $connection->query($sql);

        if(!$result) {
            $errorMessage = "Invalid query:" . $connection->error;
            break;
        }

        $name = "";
        $Phone_Number = "";
        $Address = "";
        
        $successMessage ="New member has been added!";

        header("location: /rdbms/index.php");
        exit;
       
    } while (false);
}
?>
<html>
    <head> <title>Add a new member </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>

        <div class="container my-5">
            <h1> Add a new member </h1>
            <?php
            if (!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong> 
                 
                    </button>
                </div>
                ";
            }
            ?>
            
            <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Name </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Phone Number (Dont Use an existing one & +91 only (No need to write country code))</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="Phone_Number" value="<?php echo $Phone_Number; ?>">

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Address" value="<?php echo $Address; ?>">
                    </div>
                </div>
                   
                <?php
                if ( !empty($successMessage)) {
                    echo "
                    <div class='alert alert-success' role='alert'>
                        $successMessage
                    </div>";
                }
                ?>
                
                 
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-3 d-grid'>
                        <button type='submit' class='btn btn-primary'>Submit </button>
                    </div>
                    <div class='col-sm-3 d-grid'>
                        <a class='btn btn-outline-primary' href='/rdbms/index.php' role='button'>Cancel </a>
                    </div>
            </form>
        </div>
    </body>
</html>