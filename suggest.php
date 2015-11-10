<?php

include('global.php');

?>

<?php

$q = $_GET["name"];

$result = mysqli_query($connection,"select * FROM names WHERE firstname LIKE '%$q%' ") or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0)

	while ($row = mysqli_fetch_assoc($result)) {
		echo '<p onclick="buttonclick()" class="button">' . $row["firstname"] . " " . $row["lastname"] . '</p>' . "</br>";
	}

	else {
		echo "No user by that name found." . "</br>" . "Click <a href='names_list.php'>here</a> to view our entire database listing.";
	}

?>
