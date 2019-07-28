<?php
$img_dir = "images";
$images = scandir($img_dir);

$html = '';


foreach($images as $img) 	{ 
		if($img === '.' || $img === '..') {continue;} 		

			if (  (preg_match('/.jpeg/',$img))  ||  (preg_match('/.gif/',$img)) || (preg_match('/.tiff/',$img)) || (preg_match('/.png/',$img)) ) {				

			 $html .='<div class="mySlides"> 
					<img src="'.$img_dir.'/'.$img.'" ></div>' ; 
			} else { continue; }	
	} 



echo $html ;
?>
