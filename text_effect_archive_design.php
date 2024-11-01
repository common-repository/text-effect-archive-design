<?php
/*
Plugin Name: Text Effect Archive Design
Plugin URI: http://www.crawlermotori.com/text-effect-archive-design/
Description: Shortcode to make nice effect on text in our wordpress content; choosing templates.
Author: Danilo Franceschini      
Version: 1.1.1
Author URI: http://www.crawlermotori.com/
*/
function effectTAD_crawler($atts, $content = null) {
   extract(shortcode_atts(array(
      "tpl" => "1",
   ), $atts)); 
	if($tpl == '1'){
		wp_enqueue_style('template1',plugin_dir_url(__FILE__).'css/template1.css');
		include('templates/shadow_text.php');
	}elseif($tpl == '2'){
		wp_enqueue_style('template2',plugin_dir_url(__FILE__).'css/template2.css');
		include('templates/vintage_title.php');
	}elseif($tpl == '3'){
		wp_enqueue_style('template3',plugin_dir_url(__FILE__).'css/template3.css');
		include('templates/journal_title.php');
	}elseif($tpl == '5'){
		wp_enqueue_style('template5',plugin_dir_url(__FILE__).'css/template5.css');
		include('templates/rotate_text.php');
	}
    return $testo;
}

add_shortcode('effectTAD', 'effectTAD_crawler');

add_action('admin_menu', 'effectTAD_crawler_menu');

function effectTAD_crawler_menu() {
    add_options_page('Text Effect Archive Design', 'Text Effect Archive Design', 'administrator', 'text_effect_archive_design', 'opzioni_text_effect_archive_design');
}

function opzioni_text_effect_archive_design() {
	$pluginurl = plugin_dir_url(__FILE__).'admin/img/';
 ?>
    <div class="wrap">
		<h1>Text Effect Archive Design</h1>
		<h2>Template 1</h2>
		[effectTAD tpl='1' height='100px' color='#DC7A61' shadow='#d55e40' background='#F4DDA4']Some Text[/effectTAD]
		<p><img src="<?php echo $pluginurl.'template1.png'; ?>" alt="Template 1"></p>
		<h2>Template 2</h2>
		[effectTAD tpl='2' height='400px' padding_top='100px' pretext='Titolo Vintage']Some Text[/effectTAD]
		<p><img src="<?php echo $pluginurl.'template2.png'; ?>" alt="Template 2"></p>
		<h2>Template 3</h2>
		[effectTAD tpl='3' date_time='1986-07-30' date='July 30, 1986' ]Some Text[/effectTAD]
		<p><img src="<?php echo $pluginurl.'template3.png'; ?>" alt="Template 3"></p>
		<h2>Template 5</h2>
		[ effectTAD tpl='5' color='#B7B069' background='#eeeeee' border_color='#8E8640' background_image='url']Some Text[ / effectTAD ]
		<p><img src="<?php echo $pluginurl.'template5.gif'; ?>" alt="Template 5"></p>
		<h2>Template 6 - ONLY IN PRO VERSION</h2>
		<p><img src="<?php echo $pluginurl.'template6.gif'; ?>" alt="Template 6"></p>
		<h2>Template 7 - ONLY IN PRO VERSION</h2>
		<p><img src="<?php echo $pluginurl.'template7.png'; ?>" alt="Template 7"></p>
	</div>
<?php
}