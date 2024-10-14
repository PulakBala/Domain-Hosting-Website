<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    
    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        // User exists, now check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect to home.php
            $_SESSION['user_id'] = $row['id'];
            header("Location: home.php");
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "No account found with this email!";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link rel="stylesheet" href="css/sign_login.css">
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		
		<div class="main-agileinfo">
			<div class="agileits-top">
            <form action="index.php" method="post">
    <input class="text email" type="email" name="email" placeholder="Email" required="">
    <input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
    
    <div class="wthree-text">
        <label class="anim">
            <input type="checkbox" class="checkbox" required="">
            <span>I Agree To The Terms & Conditions</span>
        </label>
        <div class="clear"> </div>
    </div>
    
    <input type="submit" value="LOGIN">
</form>
<p>Don't have an Account? <a href="signup.php"> SignUp Now!</a></p>
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>