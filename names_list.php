<?php

include ("global.php");
include ("header.php");

?>


<div id="page_container">
	<div class="row">
		<h2>All Users</h2>
	</div></br>

	<div class="row">
		<?php

		$rows_per_page = 5;
		$current_page = intval($_GET["page"]);

		$result = mysqli_query($connection,"select * from names");
		$total_rows = mysqli_num_rows($result);
		$total_pages = ceil($total_rows / $rows_per_page);

		if ($current_page < 1)
			$current_page = 1;

		if ($current_page > $total_pages)
			$current_page = $total_pages;

		$offset = ($current_page - 1) * $rows_per_page;

		$result = mysqli_query($connection,"select * from names order by firstname ASC LIMIT $rows_per_page OFFSET $offset") or die(mysqli_error($connection));

		echo "<table><thead><th><h4>Firstname</h4></th><th><h4>Lastname</h4></th></thead>";

		while ($row = mysqli_fetch_assoc($result)) {

			echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td></tr>";

			
			}

		echo "</table>";

		if ($current_page > 1) {
				$previous_page = $current_page - 1;
				echo "<a href='car_list.php?page=" . $previous_page . "'>Previous</a>" . "&nbsp&nbsp";
			}

			echo "Page $current_page of $total_pages" . "&nbsp&nbsp|&nbsp&nbsp";

		if ($current_page < $total_pages) {
				$next_page = $current_page + 1;
				echo "<a href='car_list.php?page=" . $next_page . "'>Next</a>" . "<br><br>";
			}

		?>

	</div></br>

	<div class="row">
		<a href="index.php"><h3>Autocomplete Form</h3></a>

	</div>
</div>


