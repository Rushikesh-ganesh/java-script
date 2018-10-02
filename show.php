<!DOCTYPE html>
<html>
<head>
	<title>show</title>
	<style>
		form {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
  }
header {
	        width: 30%;
	        margin: 50px auto 0px;
	        color: white;
	        background: #8e7013;
	        text-align: center;
	        border: 1px solid #B0C4DE;
	        border-bottom: none;
	    border-radius: 10px 10px 0px 0px;
	    padding: 20px;
	   }
	</style>
</head>
<body>
	<header>USERS DATA</header>

	<form>
	 <?php

    include_once("config.php");
    $id=$_GET['id'];
    $result=mysqli_query($mysqli,"SELECT * from users where $id=id");
   
   while($user_data = mysqli_fetch_array($result))
    {
     echo "<td>ID = ".$user_data['id']."</td><br>";
     echo "<td>NAME = ".$user_data['name']."</td><br>";
     echo "<td>MOBILE =".$user_data['mobile']."</td><br>";
     echo "<td>GENDER =".$user_data['gender']."</td><br>";
     echo "<td>COMMENT =".$user_data['comment']."</td><br>";
     }

     ?>
  </form>

</body>
</html>