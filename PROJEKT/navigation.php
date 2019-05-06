<div class="sljbanner"></div>
<nav>
	<ul>
		<li><a href="index.php?navigation=1">Home</a></li>
		<li><a href="index.php?navigation=2">O nama</a></li>
		<li><a href="index.php?navigation=3">Novosti</a></li>
		<li><a href="index.php?navigation=4">Kontakt</a></li>
		<li><a href="index.php?navigation=5">Galerija</a></li>
<?php 
if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] != 'true') {
    
    print '<li><a href="index.php?navigation=6">Login</a></li>
                <li><a href="index.php?navigation=7">Register</a></li>';
} else if ($_SESSION['user']['valid'] == 'true') {
    if ($_SESSION['user']['level'] == '1') {
        print '<li><a href="administrator.php">Administrator</a></li>';
    }
    print '<li><a href="logout.php">Logout</a></li>';
}

?>

	</ul>
</nav>