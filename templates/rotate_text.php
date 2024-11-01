<?php
/*
path: /templates/rotate_text.php
	Template 5 -> shadow text
		Valori che include:
		- colore del testo;
		- background
		- border color
		*/
extract(shortcode_atts(array(
	"color" => "#B7B069",
	"background" => "#eeeeee",
	"background_image" => "text_effect_archive_design/img/01.png",
	"border_color" => "#8E8640",
), $atts)); 
$pluginurl = plugin_dir_url();
if($background_image == 'text_effect_archive_design/img/01.png'){
	$background_image = $pluginurl.$background_image;
}else{
	$background_image = $background_image;
}
?>
<style>
.convey {
  background: url('<?php echo $background_image; ?>') #444;
}
.con-text {
  color: <?php echo $color;?>;
  background: <?php echo $background;?>;
  border-top: 3px solid <?php echo $border_color;?>;
  border-bottom: 0.01em solid <?php echo $border_color;?>;
}
</style>
<?php
$testo = '
 <div class="total-wrap">
<div class="rot-wrap">
  <div class="objec"></div>
  <div class="objec"></div>
  <div class="objec"></div>
  <div class="objec"></div>
  <div class="clear"></div>
</div>

<div class="con-wrap">
  <div class="con">
    <div class="convey"></div>
    <div class="con-text">
      <p data-content="'.$content.'">'.$content.'</p>
    </div>
  </div>
</div>
</div>';