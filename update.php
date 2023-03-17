<?php 
	include "connection.php";
	$id=$_REQUEST['id'];
    $sql="SELECT * FROM `query` WHERE `id`='$id'";
    $result=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($result);
?>
<html>  
	<head>  
		<meta name="viewport" content="width=device-width, initial-scale=1">  
	<style>  
	body
	{  
        font-family: Calibri, Helvetica, sans-serif;  
		background-color: pink;  
	}  
	.container 
	{  
		padding: 50px;  
		background-color: lightblue;  
	}  
    input[type=text], input[type=password], textarea 
	{  
		width: 100%;  
		padding: 15px;  
		margin: 5px 0 22px 0;  
		display: inline-block;  
		border: none;  
		background: #f1f1f1;  
	}  
	input[type=text]:focus, input[type=password]:focus 
	{  
		background-color: orange;  
		outline: none;  
	}  
	div 
	{  
        padding: 10px 0;  
    }  
	hr 
	{  
		border: 1px solid #f1f1f1;  
		margin-bottom: 25px;  
	}  
	.registerbtn 
	{  
		background-color: #4CAF50;  
		color: white;  
		padding: 16px 20px;  
		margin: 8px 0;  
		border: none;  
		cursor: pointer;  
		width: 100%;  
		opacity: 0.9;  
	}  
	.registerbtn:hover 
	{  
		opacity: 1;  
	}  
	</style>  
	</head>  
	<body>  
	<form method="POST" action="updateaction.php?id=<?php echo $id; ?>">  
		<div class="container">  
			<center>  
			<h1> 
				<u>Student Registeration Form</u>
			</h1> 
			</center>  
			<hr>  
			<label> 
				<b>Firstname:</b> 
			</label>   
				<input type="text" name="fnm" placeholder= "" value="<?php echo $data['fnm']; ?>" size="15" required />  
			<label> 
				<b>Middlename: </b>
			</label>   
				<input type="text" name="mnm" placeholder="" value="<?php echo $data['mnm']; ?>" size="15" required />   
			<label> 
				<b>Lastname: </b>
			</label>    
				<input type="text" name="lnm" placeholder="" value="<?php echo $data['lnm']; ?>" size="15"required />   
		<div>  
			<label>   
			<b>Course :  </b>
			</label>   
			<select name="course">  
				<option value="Course">Course</option>  
				<option value="BCA">BCA</option>  
				<option value="BBA">BBA</option>  
				<option value="B.Tech">B.Tech</option>  
				<option value="MBA">MBA</option>  
				<option value="MCA">MCA</option>  
				<option value="M.Tech">M.Tech</option>  
			</select>  
		</div>  
		<div>  
			<label>   
			<b>Gender :</b>  
			</label><br>  
			<input type="radio" value="Male" name="rd" checked > Male   
			<input type="radio" value="Female" name="rd"> Female   
			<input type="radio" value="Other" name="rd"> Other  
		</div>  
		<label>   
			<b>Phone :  </b>
		</label>  
			<input type="text" name="phone" placeholder="Phone no." size="10"/ required>   
				<b>Current Address : </b> 
			<textarea cols="80" rows="5" placeholder="Current Address" value="address" name="adr" required>  
			</textarea>  
			<label for="email">
				<b>Email:</b>
			</label>  
			<input type="text" placeholder="" value="<?php echo $data['email']; ?>" name="email" required>  
			<label for="psw">
				<b>Password:</b>
			</label>  
			<input type="password" placeholder="" value="<?php echo $data['pwd']; ?>" name="pwd" required>  
			<label for="psw-repeat">
				<b>Re-type Password:</b>
			</label>  
			<input type="password" placeholder="" value="<?php echo $data['pwdrpt']; ?>" name="pwdrpt" required>  
			<button type="submit" class="registerbtn">
				<b>Register</b>
			</button>    
		</form>  
	</body>  
</html>  