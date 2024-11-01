<?php
/*
path: /templates/journal_title.php
	Template 3 -> Journal Title
		Valori che include:
		- date_time 1891-07-14
		- date;
		- testo h1 (content);
		- formato del paragrafo (h1, h2, h3, p, ecc). -- NON ANCORA INSERITO --
		*/
extract(shortcode_atts(array(
	"date_time" => "1891-07-14",
	"date" => "July 14, 1891",
	"pretext" => "Vintage Title",
), $atts));
$testo = '
  <header class="post-header">
    <h1 class="title">'.$content.'</h1>
    <time class="date" datetime="'.$datetime.'">'.$date.'</time>
  </header>';
