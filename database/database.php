<html>

<head>
    <title> List of memebers </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body style="margin:50px";>
<div class="container">
    <h1> List of members: </h1>
    <br><br>
    <a class="btn btn-primary" href="/rdbms/create.php" role="button" >New member</a> 
    <a class="btn btn-primary" href="/rdbms/edit.php" role="button" >Edit a member</a> 
    <a class="btn btn-danger" href="/rdbms/delete.php" role="button" >Delete a member</a> <br> <br><br>
    
    <table class="table">
    <thead>
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Phone Number </th>
            <th> Address</th>
            <th> Date Added</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "table";
        $connection = new mysqli($servername, $username, $password, $database);
        if ($connection->connect_error){
            die("Connection Failed:" . $connection->connect_error);
        }
        $sql = "SELECT * FROM users";
        $result = $connection->query($sql);
        while($row = $result->fetch_assoc()){
            echo "
            <td>".$row["id"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Phone_Number"]."</td>
            <td>".$row["Address"]."</td>
            <td>".$row["Date Added"]."</td>
          
        </tr>"   ;
        }
        
        ?>
    </tbody>

    </table>
    </div>
    
</body>


</html>