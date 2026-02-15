<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Bit-City</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome to Bit-City</h1>

<?php if(isset($_GET['registered'])) echo "Registration successful!"; ?>

<h2>Register</h2>
<form method="POST" action="register.php">
<input type="text" name="fullname" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<h2>Login</h2>
<form method="POST" action="login.php">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

</body>
</html>
