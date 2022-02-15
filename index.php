
<?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Include file which makes the
    // Database Connection.
    include 'db.php';
    
    $username = $_POST["username"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email=$_POST['email'];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
        
    $check1=mysqli_query($conn,"select username from users where username='$username'");
    $checkrows1=mysqli_num_rows($check1);

   if($checkrows1>0) {
      echo "<script>alert('username already exist.')</script>";
      echo "<script>window.open('index.php','_self')</script>";
      exit();
   }
   $check2=mysqli_query($conn,"select phone from users where phone='$phone'");
    $checkrows2=mysqli_num_rows($check2);

   if($checkrows2>0) {
      echo "<script>alert('phone already exist.')</script>";
      echo "<script>window.open('index.php','_self')</script>";
      exit();
   }

   $check3=mysqli_query($conn,"select uemail from users where uemail='$email'");
    $checkrows3=mysqli_num_rows($check3);

   if($checkrows3>0) {
      echo "<script>alert('Email already exist.')</script>";
      echo "<script>window.open('index.php','_self')</script>";
      exit();
   }
   if($password==$cpassword){
	   $sql="insert into `users`(username,name,phone,uemail,password,cpassword) values ('$username','$name','$phone','$email','$password','$cpassword') ";


	   $result = mysqli_query($conn, $sql);
	   if($result){
		echo "<script>alert('Sign Up Successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	   exit();
	   }

	   

	  
   }
   else{
	echo "<script>alert('Password did not match')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	exit();
   }

   
  }
   
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM WEB </title>
    <link href="amstyle.css" rel="stylesheet">
    
    <!-- add icon link -->
     <link rel = "icon" href = "icon/icon-am-blue.ico" type = "image/x-icon">

     <!-- Bootstrap CSS -->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous">
               
	
	
</head>
<body>

<div class="container my-4 ">
	
	<h1 class="text-center">Signup Here</h1>
	<form action="index.php" method="post">
	
		<div class="form-group">
			<label for="username">Choose Your Username</label>
		<input type="text" class="form-control" id="username"
			name="username" aria-describedby="emailHelp">	
		</div>

		<div class="form-group">
			<label for="name">Name</label>
		<input type="text" class="form-control" id="name"
			name="name" aria-describedby="emailHelp">	
		</div>

		<div class="form-group">
			<label for="phone">Phone</label>
		<input type="text" class="form-control" id="phone"
			name="phone" aria-describedby="emailHelp">	
		</div>

		<div class="form-group">
			<label for="email">Email</label>
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp">	
		</div>
	
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control"
			id="password" name="password">
		</div>
	
		<div class="form-group">
			<label for="cpassword">Confirm Password</label>
			<input type="password" class="form-control"
				id="cpassword" name="cpassword">
	
			<small id="emailHelp" class="form-text text-muted">
			Make sure to type the same password
			</small>
		</div>	
	
		<button type="submit" class="btn btn-primary">
		SignUp
		</button>
	</form>
</div>
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>
	
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous">
</script>


 <script src="amjs.js"></script>   
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  
</body>
</html>