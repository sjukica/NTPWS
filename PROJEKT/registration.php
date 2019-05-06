<div class="form">
    <form action="register.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your first name" required>
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Your last name" required>
        <label for="email">Email</label>
        <input type="email" placeholder="Enter Email Address" name="email" required>
        <label for="type">Country</label>
        <select id="country" name="country">
        <?php
require 'db.php';        
$query = "SELECT * FROM countries";
$result = mysqli_query($konekcija, $query);
while ($row = mysqli_fetch_array($result)) {
    print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
}
?>
        </select>
        <label for="city">City:</label>
	    <input type="text" id="city" name="city" required>
        <label for="address">Address:</label>
	    <input type="text" id="address" name="address" required>
        <label for="date">Date of birth:</label>
        <input type="text" name="date" id="date" alt="date" class="IP_calendar" title="d/m/Y" placeholder="Date...">
        <label for="password">Password:</label>
	    <input type="password" id="password" name="password" required>
        <input type="submit" value="Submit">
    </form>
</div>