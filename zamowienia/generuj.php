<?php

$list = scandir('.');
$i = 1;

foreach($list AS $file) {

	if(preg_match('/\.htm$/', $file) && !preg_match('/^([0-9]+)\.htm$/',$file)) {
		$txt = file_get_contents($file);
		$txt = str_replace('<div class=WordSection1>','<div class=WordSection1><table width=100% border=0><tr><td align=left><img src=left.jpg width=250 /></td><td align=center><img src=center.jpg width=250></td><td align=right><img src=right.jpg width=250></td></tr></table>',$txt);
		
		file_put_contents($i++.'.htm',$txt);
		//var_dump($doc);
	}


}

$t = '<html><head><title>Index</title></head><body><ul>';

for($j = 1; $j < $i; $j++) {

	$t .= '<li><a href='.$j.'.htm>Zapytanie ofertowe '.$j.'</a></li>';

}

$t .= '</ul>';

file_put_contents('archiwum.html',$t);