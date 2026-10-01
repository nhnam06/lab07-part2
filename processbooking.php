<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Tour Booking Confirmation">
	<meta name="keywords" content="PHP, Form, Booking">
	<meta name="author" content="Hoang Nam Nguyen">
	<title>Booking Confirmation</title>
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>
	<?php
		// Nếu không đến từ form thì quay về trang register
		if (isset($_POST["firstname"])) {
			$firstname = $_POST["firstname"];
		} else {
			header("location: register.html");
			exit();
		}

		if (isset($_POST["lastname"]))  { $lastname  = $_POST["lastname"]; }  else { $lastname = ""; }
		if (isset($_POST["age"]))       { $age       = $_POST["age"]; }       else { $age = ""; }
		if (isset($_POST["species"]))   { $species   = $_POST["species"]; }   else { $species = "Unknown"; }
		if (isset($_POST["food"]))      { $food      = $_POST["food"]; }      else { $food = "none"; }
		if (isset($_POST["bookday"]))   { $bookday   = $_POST["bookday"]; }   else { $bookday = ""; }
		if (isset($_POST["partysize"])) { $partysize = $_POST["partysize"]; } else { $partysize = ""; }

		// Checkbox chỉ được gửi khi được tick
		$tour = "";
		if (isset($_POST["accom"])) { $tour = $tour . "Accommodation, "; }
		if (isset($_POST["4day"]))  { $tour = $tour . "Four-day tour, "; }
		if (isset($_POST["10day"])) { $tour = $tour . "Ten-day tour, "; }
		if ($tour == "") { $tour = "No tour selected"; }

		echo "<p>Welcome $firstname $lastname!<br>"
			. "You are now booked on the $tour<br>"
			. "Species: $species<br>"
			. "Age: $age<br>"
			. "Meal preference: $food<br>"
			. "Date: $bookday<br>"
			. "Number of travellers: $partysize</p>";
	?>
</body>
</html>