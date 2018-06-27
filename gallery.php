<?php
    
    $files = scandir('gallery');
    unset($files[0]);
    unset($files[1]);
    
    foreach($files as $file):
?>
<?if($file != 'thumbs'):?> 

    <?
	$regenerate = false;
	
	if(!file_exists('gallery/thumbs/'.$file) || $regenerate){
	    
	   // File and new size
	    $filename = 'gallery/'.$file;
	    $percent = 0.5;

	    // Get new sizes
	    list($width, $height) = getimagesize($filename);
	    $newwidth = $width*(116/$height);
	    $newheight = 116;

	    // Load
	    $thumb = imagecreatetruecolor($newwidth, $newheight);
	    $source = imagecreatefromjpeg($filename);

	    // Resize
	    imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	    // Output
	    imagejpeg($thumb,'gallery/thumbs/'.$file,80); 
	    
	}
	
    ?>


<li><a class="fancy" rel="gallery" href="gallery/<?=$file;?>" ><img src="gallery/thumbs/<?=$file;?>" /></a></li>

<?endif;?>
<? endforeach; ?>