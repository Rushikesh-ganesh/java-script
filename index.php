<?php



include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <style>
       

        h1,h2{
              text-align: center;
             }

    </style>

</head>

<body>
<h1>CRUD APPLICATION</h1>
<h2>Admin Panel</h2>


<center>
    <button><a href="add.php">Add New User</a></button><br><br>
       
        <table width='80%' border=1>
   
    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Gender</th>  <th>comment</th> <th>Action</th> 
    </tr>
    

    


    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td>".$user_data['gender']."</td>";
        echo "<td>".$user_data['comment']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]' >Delete</a>|<a href='show.php?id=$user_data[id]'>Show</a></td></tr>";        

    }

    ?>
    </table>

       

    </center>
</body>
</html>
 <!-- <a href='delete.php?id=$user_data[id]' >Delete</a>  -->