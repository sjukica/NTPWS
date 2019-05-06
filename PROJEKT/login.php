<div class="form">
<form action="" method="POST">
<label for="email">Email</label>
	<input type="email"b id="email" placeholder="Enter Email Address" name="email" required>
<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>
	<input type="submit" value="Submit">
</form>
</div>

<?php
if (isset($_POST['email'])) {
    require 'db.php';    
    $email = $_POST['email'];
    
    $query  = "SELECT * FROM `users` WHERE `_email` = '$email'";
   
    $result = @mysqli_query($konekcija, $query);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if (password_verify($_POST['password'], $row['password'])) {
        #password_verify https://secure.php.net/manual/en/function.password-verify.php
        $_SESSION['user']['valid'] = 'true';
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['firstname'] = $row['firstname'];
        $_SESSION['user']['lastname'] = $row['lastname'];
        $_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
        # Redirect to admin website
        header("Location: index.php?menu=7");
    
        } else {
            echo "Wrong password";
        }
    }

