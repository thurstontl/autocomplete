<!doctype html>
<html>
<head>
	<title>Autocomplete Stuff</title>

	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <script src="js/modernizr.js"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script type="text/javascript">

	$("document").ready(function() {
		
		$("#find_user").on("keyup", function() {

			var min_length = 0;
			var name = $("#find_user").val();

			if (name.length == min_length) {
				$("#result").html("");
				return;
			}
			else {

				$.get ("suggest.php", {name:name}, function(data) {
					$("#result").html(data)
				});
			}

		
		});
	});

	</script>

	<script type="text/javascript">

	$(document).ready(function() {

    	$(".button").click(function buttonclick() {

        	$("#result").append(" <b>Added Text</b>.");
    	});
	});

	</script>


</head>

<body>