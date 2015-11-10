<?php
include("header.php");
include("global.php");
?>

<div id="page_container">

	<div class="row">
		<div class="large-12-centered columns">
			<h1 id="headline">Auto Complete (Livesearch) Box</h1>
		</div>
	</div>

	<div class="row">
		<div class="large-12-centered columns">
			<form>
				<label><h3>Find User</h3>
			    	<input type="text" placeholder="Type Name Here" id="find_user" autocomplete="off" />
			    </label>
			</form>
		</div>
	</div>

	<div id="content" class="row">
		<div class="large-12-centered columns">
			<table>
				<thead>
					<tr>
						<th width="800">Results</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><p id="result"></p></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>

</html>