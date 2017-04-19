<?php
function home_page()
{
?>

	<h1>Home...</h1>
	
	<div id = "slide_container">
		<img class = "slide_foto" src = "images/pic1.jpg"></img>
		<img class = "slide_foto" src = "images/pic2.jpg"></img>
		<img class = "slide_foto" src = "images/pic3.jpg"></img>
		<img class = "slide_foto" src = "images/pic4.jpg"></img>
		<div id = "slidetxt">Wij bieden de snelste snelheden...</div>
		<div id = "laadbar"></div>
	</div>

	<div id = "articles">
	
		<div class = "links">
		<h2>Algemene informatie</h2>
			Colicss is een bedrijf gevestigd in Slagharen dat Cloud en normale hosting aanbied.<br/>Navigeer door op de bovenstaande knoppen te klikken.
		</div>
		
		<div class = "rechts">
		<a class="twitter-timeline"  href="https://twitter.com/hashtag/colicss" data-widget-id="847021687837208576">Tweets over #colicss</a>
        <script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
          
		</div>
	</div>

<?php
}