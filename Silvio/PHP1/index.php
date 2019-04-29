<?php
<!DOCTYPE HTML>

<html>
<head>
	<title>Samoljubav</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Samoljubav - majice">
	<!-- description je onaj opis što se vidi ispod searcha u googlu -->
	<meta name="keywords" content="samoljubav, majice, brand, hoodie">
	<!-- keywords su tagovi koji pomažu SEO da obradi stranicu -->
	<meta name="author" content="Silvio Jukica">
	<!-- podaci o autoru -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- podaci o nacinu prikaza stranice -->
	<link rel="shortcut icon" type="image/x-icon" href="favian.ico">
	<!-- mala ikona koa se pojavljuje pokraj URLa u browseru, moze se namjestiti na lokalnu ikonu ili ovaj favian.ico sto je univerzalno mjesto -->

</head>
<body>
<header>
	<div class="sljbanner"></div>
	<nav>
		<ul>
		<li><a href="index.php?navigation=1">Home</a></li>
			<li><a href="index.php?navigation=2">O nama</a></li>
			<li><a href="index.php?navigation=3">Novosti</a></li>
			<li><a href="index.php?navigation=4">Kontakt</a></li>
			<li><a href="index.php?navigation=5">Galerija</a></li>
		</ul>
	</nav>
</header>
 <main>
 	
	if (isset($_GET['navigation'])) {
    $navigation = $_GET['navigation'];
    switch ($navigation) {
        
        case '2':
            include 'oNama.php';
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
        default:
            include 'home.php';
    }
}
 </main>
<footer>
	<p>Copyright &copy; 2019 SJ. <a href="https://github.com/sjukica/NTPWS/tree/master/Silvio"><img src="img/githubslika.svg" title="Github" alt="Github"></a></p>
</footer>
	

</body>
</html>


?>