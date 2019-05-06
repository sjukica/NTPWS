<?php
require 'db.php';
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $query  = "SELECT * FROM users WHERE email= $email";
    $result = @mysqli_query($konekcija, $query);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($row['email'] == '') {
       
        $query  = "INSERT INTO users (firstname, lastname, email, password, country)";
        $query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $password . "', '" . $_POST['country'] . "')";
        $result = @mysqli_query($konekcija, $query);
        
        # ucfirst() â€” Make a string's first character uppercase
        # strtolower() - Make a string lowercase
        echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for registration </p>
			<hr>';
    }
    
         
        echo "Registracija je uspješno provedena.";
        header("refresh:5;url=index.php");
    } else {
        mysqli_close($konekcija);
        echo "Korisnik s navedeom email adresom vec postoji.";
        header("refresh:5;url=index.php?navigation=7");
    }
    

