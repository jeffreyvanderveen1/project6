<!DOCTYPE html>

<?php

// Connection naar database
///$con = mysqli_connect("localhost", "root", "", "colicss");

include ('pages/home.php');
include ('pages/hosting.php');
include ('pages/cloud.php');

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
	<li><a href="?page=hosting">Hosting</a></li>
	<li><a href="?page=cloud">Cloud</a></li>
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
		home_page();
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
			case "hosting":
			{
				hosting_page();
				break;
			}
			case "cloud":
			{
				cloud_page();
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
//mysqli_close($con);
?>

<script>

c1_maand();

function c1_maand(page)
{
	
	var txt_change;
	var prijs;
	
	(page == 1) ? prijs = "10,95" : prijs = "10,00";
	
	txt_change = document.getElementById("goud_prijs");
	txt_change.innerHTML = "€" + prijs + "<br>Per Maand";
	
	(page == 1) ? prijs = "7,95" : prijs = "6,00";
	
	txt_change = document.getElementById("silver_prijs");
	txt_change.innerHTML = "€" + prijs + "<br>Per Maand";
	
	(page == 1) ? prijs = "5,95" : prijs = "4,00";
	
	txt_change = document.getElementById("bronze_prijs");
	txt_change.innerHTML = "€" + prijs + "<br>Per Maand";
	
	var knop = document.getElementsByClassName("pakket_button1")[0];
	
	knop.style.backgroundColor = "#272a30";
	knop.style.color = "lightgrey";
	
	knop = document.getElementsByClassName("pakket_button2")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
	
	knop = document.getElementsByClassName("pakket_button3")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
}

function c1_jaar(page)
{
	var txt_change;
	var prijs;
	
	(page == 1) ? prijs = (10.95 * 12) : prijs = (10 * 12);
	
	var prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("goud_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per jaar";
	
	(page == 1) ? prijs = (7.95 * 12) : prijs = (6 * 12);
	prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("silver_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per jaar";
	
	(page == 1) ? prijs = (5.95 * 12) : prijs = (4 * 12);
	prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("bronze_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per jaar";
	
	var knop = document.getElementsByClassName("pakket_button1")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
	
	knop = document.getElementsByClassName("pakket_button2")[0];
	
	knop.style.backgroundColor = "#272a30";
	knop.style.color = "lightgrey";
	
	knop = document.getElementsByClassName("pakket_button3")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
}

function c5_jaar(page)
{
	var txt_change;
	var prijs;
	
	(page == 1) ? prijs = (10.95 * 12) * 5 : prijs = (10 * 12) * 5;
	var prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("goud_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per 5 jaar";
	
	(page == 1) ? prijs = (7.95 * 12) * 5 : prijs = (6 * 12) * 5;
	prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("silver_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per 5 jaar";
	
	(page == 1) ? prijs = (5.95 * 12) * 5 : prijs = (4 * 12) * 5;
	prijs2 = prijs.toFixed(2).replace(".", ",");
	
	txt_change = document.getElementById("bronze_prijs");
	txt_change.innerHTML = "€" + prijs2 + "<br>per 5 jaar";
	
	var knop = document.getElementsByClassName("pakket_button1")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
	
	knop = document.getElementsByClassName("pakket_button2")[0];
	
	knop.style.backgroundColor = "#0f51bc";
	knop.style.color = "white";
	
	knop = document.getElementsByClassName("pakket_button3")[0];
	
	knop.style.backgroundColor = "#272a30";
	knop.style.color = "lightgrey";
}

</script>