<?php	
		include 'connection.php';
		
		$name = $_REQUEST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$number = $_POST['mobno'];	

		$sql = "INSERT INTO `cjcommunity` ( `fullname`, `email`, `password`, `mobno` ) VALUES ( '$name', '$email', '$password', '$number' )";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>You have successfully registered with us!</h3>";
			echo("<button onclick=\"location.href='/index.html'\">Back to Home</button>");
			echo("<button onclick=\"location.href='/login/index.html'\">Login</button>");
 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<style>
				@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
				*{
					font-family: 'Comfortaa', cursive;
				}body{
    				overflow-y: hidden;
  					background-color: #eddcd9;
				}
				h3{
				    margin-left: 68px;
				    margin-top: 80px;
				    font-weight: lighter;  
				    color: #264143;
				    font-size: 40px;
				}
				button{		
					transition: 0.3s ease;
					margin-right: 20px;		
  					padding: 15px 30px;
  					border-radius: 40px;
  					border: 2px solid #de5499;
  					background-color: #eddcd9;
  					color: #264143;
  					cursor: pointer;
					position: relative;
					left: 600px;
				}
				button:hover{
					background-color: #de5499;
    				font-weight: bold;
    				color: #fff;
				}
			</style>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Successfull</title>
		</head>
		<body>
			
		</body>
		</html>