<?php
function contact_page()
{
?>

	<h1>Home...</h1>
	
	<div id = "articles">
	
		<div class = "links">
		<h2>Algemene informatie</h2>
	<p>Vul de onderstaande gegevens in om contact met ons op te nemen.</p>
	<div id = "waarschuwing" style = "color: red; font-size:20px;"></div>

	<form method="post" action="#" name="cforms">
	<table style = "padding-left:30px;">
		<tr>
			<td width = "200px">
				<strong>Voornaam:</strong>
			</td>
			<td>
				<input type="text" maxlength="50" class="form_bar" title="V_Naam" name="V_Naam"></input>
			</td>
		</tr>
		<tr>
			<td width = "200px">
				<strong>Achternaam:</strong>
			</td>
			<td>
				<input type="text" maxlength="50" class="form_bar" title="A_Naam" name="A_Naam"></input>
			</td>
		</tr>
		<tr>
			<td width = "200px">
				<strong>Tel. Nr:</strong>
			</td>
			<td>
				<input type="text" maxlength="10" class="form_bar" title="telnr" name="telnr"></input>
			</td>
		</tr>
		<tr>
			<td>
				<strong>E-Mail:</strong>
			</td>
			<td>
				<input type="text" maxlength="24" class="form_bar" title="EMail" name="EMail"></input>
			</td>
		</tr>
		<tr>
			<td>
				<strong>Bericht:</strong>
			</td>
			<td>
				<textarea maxlength="500" style="width: 500px; height: 250px; margin-top:10px; border: 1px solid grey;vertical-align:top;" title="Bericht" name="Bericht"></textarea>
			</td>
		</tr>
	</table>
	<input type="button" style="width: 150px; height: 35px; background-color: #272a30; border: 1px solid red; color: white; font-family: LP_FONT; font-size:16px;" onclick="check_forms()" title="Verstuur" value="Verstuur"></input>
	</form>
	<br>
	<br>
	Ook kunt u contact opnemen d.m.v. een bericht te sturen, of te klikken op de  &#233;&#233;n van de volgende e-mails: <a style="color: red; font-weight: bold;" href="mailto:w.beltman@alfa-college.nl">w.beltman@alfa-college.nl</a> | <a style="color: red; font-weight: bold;" href="mailto:ra.sieljes@alfa-college.nl">ra.sieljes@alfa-college.nl</a>
	<br>
	<strong>Telefoon:</strong> 06-12345678
	<br><br>
          
		</div>
	</div>

<?php
}