<?php
    
    $files = scandir('slides');
    unset($files[0]);
    unset($files[1]);
    
    foreach($files as $file):
?>
    <li><img src="slides/<?=$file;?>"></li>
<? endforeach; ?>