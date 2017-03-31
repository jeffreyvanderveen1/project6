<!DOCTYPE html>

<?php

// Connection naar database
$con = mysqli_connect("localhost", "root", "", "colicss");

include ('pages/home.php');
include ('pages/info.php');

?>

<html>

<head>
	
	<META content="text/html; charset=utf-8" http-equiv"Content-Type" />

	<link href="style.css" rel="stylesheet" type="text/css" /> 
	
	<title>Colicss</title>

</head>

<body>

<div id = "header_c">

<div id = "header">

<img src="images/logo.png" title="Colicss Logo" alt = "Colicss Logo">

</div>

<ul class = "nav">
	<li><a href="?page=home">Home</a></li>
	<li><a href="?page=informatie">Hosting / Informatie</a></li>
	<li><a href="?page=contact">Contact</a></li>
	 <div class="dropdown">
		  <button class="dropbtn">Social Media</button>
		  <div class="dropdown-content">
			<a href = "http://www.instagram.com" target = "_blank"><img src = "images/instagram.png" width = "30px" height = "30px"></img> Instagram</a>
			<a href = "http://www.twitter.com" target = "_blank"><img src = "images/twitter.png" width = "30px" height = "30px"></img> Twitter</a>
			<a href = "http://www.facebook.com" target = "_blank"><img src = "images/facebook.png" width = "30px" height = "30px"></img> Facebook</a>
			<a href = "http://www.linkedin.com" target = "_blank"><img src = "images/ln.png" width = "30px" height = "30px"></img> LinkedIn</a>
		  </div>
	</div>
</ul>
</div>

<div style = "margin-bottom: 180px;"> </div>

<div id = "content">
	<?php

	if(!isset($_GET['page']))
	{
		$page = "Home...";
	}
	else
	{
		switch($_GET['page'])
		{
			case "home":
			{
				home_page();
				break;
			}
			case "informatie":
			{
				info_page();
				break;
			}
			case "contact":
			{
				break;
			}
			default:
			{
				echo "Oops, deze pagina kon niet gevonden worden.";
				//echo $_GET['page'];
			}
		}
	}
	?>
</div>

<div id = "footer">

footer

</body>
</html>

</div>

</body>
	
</html>

<?php
mysqli_close($con);
?>