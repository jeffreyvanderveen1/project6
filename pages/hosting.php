<?php
function hosting_page()
{
?>

	<h1>Hosting Informatie & Pakketten...</h1>
	
	<div id = "i_content">
	
		<h2>Informatie</h2>
		<p>
			sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasadsdsads
		</p>
		
		<h2>Hosting Pakketten</h2>
		
		<ul class = "hostingp">
			<li> <!-- =============================================================== -->
				<div id = "hps">
				<button class = "pakket_button1" onclick = "c1_maand(1)">1 Maand</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Bronze
						</div>
						<div class = "p_color_bronze"></div>
						<div class = "p_content">
							10 GB HDD<br />
							512 MB RAM<br />
							1 CORE<br />
							100 GB DATA
							
							<div class = "p_content_price" id = "bronze_prijs">
								€5,95<br>per maand
							</div>
						</div>
		
						
					</div>
				</div>
			</li> <!-- =============================================================== -->
			<li>
				<div id = "hps">
					<button class = "pakket_button2" onclick = "c1_jaar(1)">Per Jaar</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Silver
						</div>
						<div class = "p_color_silver"></div>
						<div class = "p_content">
							20 GB HDD<br />
							1048 MB RAM<br />
							2 CORES<br />
							200 GB DATA
							
				

						<div class = "p_content_price" id = "silver_prijs">
							€7,95<br>per maand
						</div>			
						</div>						
					</div>
				</div>
			</li>
			<li>
				<div id = "hps">
				<button class = "pakket_button3" onclick = "c5_jaar(1)">Per 5 Jaar</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Goud
						</div>
						<div class = "p_color_gold"></div>
						<div class = "p_content">
							50 GB HDD<br />
							2048 MB RAM<br />
							4 CORES<br />
							UNLIMITED DATA
							
							<div class = "p_content_price" id = "goud_prijs">
								€10,95<br>per maand
							</div>
						</div>

					</div>
				</div>
			</li>
		</ul>
	</div>	
	
<?php
}
?>