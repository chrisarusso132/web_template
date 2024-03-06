<!-- Web Template Project - Chapter 4 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body>
	<?php include("inc_header.html"); ?>

	<div style="width: 20%; text-align: center; float: left;">
		<?php include ("inc_buttonnav.html"); ?>
	</div>

	<?php
		if(isset($_GET["content"])) {
			// Now, check WHICH button was acutally clicked
			switch($_GET["content"]) {
			case "About Me":
				include("inc_about.html");
				break;
			case "Contact Us":
				include("inc_contact.html");
				break;
			default:
				include("inc_home.html");
				break;
			}
		} else { // end of SWITCH
			// We're here because NO button was clicked
			include("inc_home.html");
		} // End of IF/ELSE
	?>
	<hr>
	<?php include("inc_footer.php"); ?>
</body>
</html>