<?php
function cloud_page()
{
?>

	<h1>Cloud Informatie & Pakketten...</h1>
	
	<div id = "i_content">
	
		<h2>Informatie</h2>
		<p>
			sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasadsdsads
		</p>
		
		<h2>Cloud Pakketten</h2>
		
		<ul class = "hostingp">
			<li> <!-- =============================================================== -->
				<div id = "hps">
				<button class = "pakket_button1" onclick = "c1_maand(2)">1 Maand</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Geel
						</div>
						<div class = "p_color_geel"></div>
						<div class = "p_content">
							10 GB Opslag
							
							<div class = "p_content_price" id = "bronze_prijs">
								€4,00<br>per maand
							</div>
						</div>
		
						
					</div>
				</div>
			</li> <!-- =============================================================== -->
			<li>
				<div id = "hps">
				<button class = "pakket_button2" onclick = "c1_jaar(2)">Per Jaar</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Oranje
						</div>
						<div class = "p_color_oranje"></div>
						<div class = "p_content">
							100 GB Opslag
							
				

							<div class = "p_content_price" id = "silver_prijs">
								€6,00<br>per maand
							</div>			
						</div>						
					</div>
				</div>
			</li>
			<li>
				<div id = "hps">
				<button class = "pakket_button3" onclick = "c5_jaar(2)">Per 5 Jaar</button>
					<div id = "pbutton_container">
						<div class = "p_type">
							Groen
						</div>
						<div class = "p_color_groen"></div>
						<div class = "p_content">
							1 TB Opslag
							
							<div class = "p_content_price" id = "goud_prijs">
								€10,00<br>per maand
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