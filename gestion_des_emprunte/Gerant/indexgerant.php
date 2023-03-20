<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gerant.css">
    <title>Document</title>
</head>
<body>
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
        <form action="#" method="post" class="form" id="form1">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" name="username" placeholder="Username" class="input" />
			<input type="password" name="password" placeholder="Password" class="input" />
            <button type="submit" name="submit" class="btn" id="signUp">Sign In</button>
		</form>
	</div>


	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--right">
				<button type="submit" name="submit" class="btn" id="signUp">Sign In</button>
			</div>
		</div>
	</div>
</div>
<script src="gerant.js"></script>

<?php
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$basededonné = 'gestion_des_emprunts';
			
			$connexion = new mysqli ($server, $username, $password, $basededonné );

            //   verify sign in using email

            session_start(); // start session
            
            if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $conn = mysqli_connect('localhost', 'root', '', 'gestion_des_emprunts');
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $username = mysqli_real_escape_string($conn, $username); 
            
            $sql = "SELECT * FROM gerant WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo $row['password'];
                if ($password == $row['password']) {
            	// successful sign-in
                $_SESSION['id_gerant'] = $row['id_gerant'];
                
                header('Location: gerant.php');
                exit;
                } else {
            	// password doesn't match
                $error = "Invalid password.";
                echo  $error;
                }
            } else {
            	// no row returned
                $error = "Invalid email.";
                echo  $error;
            
            }
            
            $conn->close();
            } 
            
            
            
            
    ?>






</body>
</html>