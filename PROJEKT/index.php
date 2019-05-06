<?php require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Samoljubav</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="description" content="Samoljubav - majice">
<meta name="keywords" content="samoljubav, majice, brand, hoodie">
<meta name="author" content="Silvio Jukica">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="favian.ico">
</head>

<body>

	<header>
<?php include 'navigation.php';?>
</header>

	<main>
<?php
if (isset($_GET['navigation'])) {
    $navigation = $_GET['navigation'];
    switch ($navigation) {
        case '1':
            include 'home.php';
            break;
        case '2':
            include 'nama.php';
            break;
        case '3':
            include 'novosti.php';
            break;
        case '4':
            include 'kontakt.php';
            break;
        case '5': 
            include 'galerija.php';
            break;
        case '6':
            include 'login.php';
            break;
        case '7':
            include 'registration.php';
            break;
        default:
            include 'home.php';
            break;
    }
}
?>
</main>

	<footer>
<?php include 'footer.php'; ?>
</footer>

</body>

</html>