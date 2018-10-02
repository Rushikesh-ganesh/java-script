<?php
$name_error ="";
$email_error="";
$mobile_error="";
  
  

 if(!empty($_POST['Submit']))
{
   $email=trim($_POST['email']);
   if(empty($email))
    {
	$email_error="email is empty.Please enter your email";
    }

    $mobile=trim($_POST['mobile']);
    if(empty($mobile))
    {
	  $mobile_error="mobile no is empty.Please enter your mobile no";
    }
  

   $name=trim($_POST['name']);
   if(empty($name))
   {
	 $name_error="Name is empty.Please enter your name";
   }
}



 


?>



<html>
<head>
	<title>Add Users</title>
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

  span{

  	color:red;
  }
  
</style>
</head>


<body>
  
	<header><h3>Registration form</h3></header>
	
	

	<form action="?" method="post" name="form1">
		
          <table width="25%" border="0">
			     <tr> 
				 <td>Name*</td>
				 <td><input type="text" name="name"><br> 
                 <span class="error"><?php echo $name_error ?></span>
				 </td>
			    </tr>
			
			     <tr>
				 <td>Email*</td>
				 <td><input type="text" name="email"><br>
				 	 <span class="error"><?php echo $email_error ?></span>
				 </td>
			     </tr>
			
			      <tr> 
				  <td>Mobile*</td>
				  <td><input type="text" name="mobile"><span class="error"><br>
				  	<span class="error"><?php echo $mobile_error ?></span>
				  </td>
				  
			      </tr>
 
		          <tr>
		     	  <td>Gender</td>
		     	  <td> <input type = "radio" name = "gender" value = "Female">Female
                  <input type = "radio" name = "gender" value = "Male" checked>Male
 					
              </td><br>
                  
			      </tr>
			
			      <tr>
			      <td>Comment</td>
			      <td><textarea name="comment" rows="5" cols="40"></textarea></td> 
			      </tr>

			     
			     


			      
			      <tr> 
				  <td></td>
				  <td><br><input type="submit" name="Submit" value="Add">
                  <button><a href="index.php">Go to Home</a></button>
				  </td>
			      </tr>
		</table>
       </form>




	</form>
	
	<?php
   


//    if(isset($_POST['Submit']))
//    {
   	
//    	$target_dir = "C:\xampp\htdocs\rushikesh\crud_v1\image";
//     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//     $uploadOk = 1;

//     $fileToUpload=$_POST['fileToUpload'];
//     $insert_path="INSERT INTO users VALUES('$fileToUpload')";

// mysql_query($inser_path);

// }

    // $target_dir = "C:\xampp\htdocs\rushikesh\crud_v1\image";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]);
    // $uploadOk = 1;
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
	    $email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$gender= $_POST['gender'];
		$comment=$_POST['comment'];
		
	
		include_once("config.php");
				
	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,gender,comment) VALUES('$name','$email','$mobile','$gender','$comment')");
		  echo "<center>User added successfully. <a href='index.php'>View Users</a></center>";
	    }
	?>
</body>
</html>
