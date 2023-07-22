<!DOCTYPE html>
<html>
<head>
    <br><br><br>
  <title>Update User Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Update User Data</h2>
    <?php
    // Assuming you have already established a connection to the MySQL database
    // and have the necessary credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "table";
    $connection = new mysqli($servername, $username, $password, $database);
    
    // Retrieve the form data
    $ID = "";
    $Name = "";
    $Phone_Number = "";
    $Address = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ID = $_POST['ID'];
      $Name = $_POST['Name'];
      $Phone_Number = $_POST['Phone_Number'];
      $Address = $_POST['Address'];
    
      // Perform necessary validation or sanitization on the form data
    
      // Update the record in the database
      $sql = "UPDATE users SET Name = '$Name', Phone_Number = '$Phone_Number', Address = '$Address' WHERE ID = $ID";
    
      if (mysqli_query($connection, $sql)) {
        
        header("Location: index.php");
        exit(); // Make sure to exit the script after redirection
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
    }
    
    // Close the database connection
    mysqli_close($connection);
    ?>
    <form method="post" action="edit.php">
      <div class="form-group">
        <label for="id">User ID:</label>
        <input type="text" class="form-control" id="id" name="ID" placeholder="Enter ID of the user you want to edit" value="<?php echo $ID; ?>">
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="Name" placeholder="Enter Updated Name" value="<?php echo $Name; ?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" class="form-control" id="phone" name="Phone_Number" placeholder="Enter Updated Phone Number" value="<?php echo $Phone_Number; ?>">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="Address" placeholder="Enter Updated Address" value="<?php echo $Address; ?>" >
      </div>
      <button type="submit" class="btn btn-primary">Update Data</button>
      
    <a class='btn btn-outline-primary' href='/rdbms/index.php' role='button'>Cancel </a>
                    
    </form>
   
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
