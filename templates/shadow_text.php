<?php
/*
path: /templates/shadow_text.php
	Template 1 -> shadow text
		Valori che include:
		- height del div;
		- colore del testo;
		- shadow;
		- background
		- formato del paragrafo (h1, h2, h3, p, ecc). -- NON ANCORA INSERITO --
		*/
extract(shortcode_atts(array(
	"height" => "300px",
	"color" => "#DC7A61",
	"shadow" => "#d55e40",
	"background" => "#F4DDA4",
), $atts)); 
$text_shadow = 'color: #DC7A61; text-shadow: 0 1px 0 #d55e40, 0 2px 0 #d55e40, 0 3px 0 #d55e40, 0 4px 0 #d55e40, 0 5px 0 #d55e40, 0 6px 0 #d55e40, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);';
$text_shadow = str_replace('#DC7A61',$color,$text_shadow);
$text_shadow = str_replace('#d55e40',$shadow,$text_shadow);
?>
<style>
	#shadow_text {
		background: <?php echo $background; ?>;
		height:<?php echo $height; ?>;
	}
	#shadow_text h1{
		<?php echo $text_shadow; ?>;
	}
</style>
<?php
$testo = '<div id="shadow_text"><h1>';
$testo .= $content;
$testo .= '</h1><div class="shadow"></div></div>';