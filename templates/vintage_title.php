<?php
/*
path: /templates/vintage_title.php
	Template 2 -> shadow text
		Valori che include:
		- height del div;
		- testo h3;
		- testo h1 (content);
		- formato del paragrafo (h1, h2, h3, p, ecc). -- NON ANCORA INSERITO --
		*/
extract(shortcode_atts(array(
	"height" => "300px",
	"padding_top" => "150px",
	"pretext" => "Vintage Title",
), $atts)); 
?>
<style>
section.vintage_title {
  height:<?php echo $height; ?>;
}
.vintage_title h3 {
  padding-top:<?php echo $padding_top; ?>;
}
</style>
<?php
$testo = '
<div class="vintage_title">
  <section class="vintage_title">
  <h3>'.$pretext.'</h3>
  <h1><span class="fontawesome-star star"></span> <span>'.$content.'</span>
<span class="fontawesome-star star"></span></h1>
</section>
</div>';