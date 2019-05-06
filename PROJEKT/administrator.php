<a href="index.php?navigation=1">HOME</a>
<br><hr><br>
<table style="border: 1px solid black; padding: 15px;">

						<tr>
							<td><strong>Email</strong></td>
							<td><strong>First Name</strong></td>
							<td><strong>Last Name</strong></td>
							<td><strong>Level</strong></td>
                            <td><strong>Delete</strong></td>
						</tr>
						
<?php
require 'db.php';
if (isset($_POST['seq'])) {
    if ($_POST['seq'] == "delete") {
        $sql = "DELETE FROM users WHERE _email ='" . $_POST['email'] . "'";
        mysqli_query($conn, $sql) or die('Error connecting to the database.');
    }
}
$sql = "SELECT * FROM users";
$result = mysqli_query($konekcija, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row['_email'] . '</td>';
    echo '<td>' . $row['_firstname'] . '</td>';
    echo '<td>' . $row['_lastname'] . '</td>';
    echo '<td>' . $row['_level'] . '</td>';
    echo '<td><form name="brisanje" method="POST" action="">
				<input type="hidden" name="seq" value="delete">
				<input type="hidden" name="email" value="' . $row['_email'] . '">
				<input type="submit" value="DELETE"></form></td>';
    echo '</tr>';
}
echo '</table>';
mysqli_close($konekcija);
						