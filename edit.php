<?php
include_once("config.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$comment=$_POST['comment'];	
	
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile',gender='$gender',comment='$comment' WHERE id=$id");
	
	
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
	$gender=$user_data['gender'];
	$comment=$user_data['comment'];
}
?>





<html>
<head>	
	<title>Edit User Data</title>
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

<body><a href="index.php"><button>home</button></a>

	<header>UPDATE FORM</header>
	<form name="update_user" method="post" action="edit.php">
	    <table border="0">
			    
			    <tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			    </tr>
			
			    <tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			    </tr>
			    
			    <tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			    </tr>

			    <tr>
		     	<td>Gender</td>
		   <td> <input type = "radio" name = "gender" value =<?php echo ($gender=='Female')?'Female':'Female';?>>Female
                <input type = "radio" name = "gender" value =<?php echo ($gender=='Male')?'Male':'Male';?> >Male</td>
			    </tr>

			     <tr>
			     <td>Comment</td>
                 <td><textarea name="comment" rows="5" cols="40" value= <?php echo $comment;?> ></textarea></td>
			     </tr>
			
			    <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			    </tr>
		</table>
	</form>
</body>
</html>

