<?php
    $url = 'https://cdn.jsdelivr.net/gh/mlxxs/photos/background/'.(string)rand(1,600).'.jpg';
    header('Content-Type: image/png');
	echo file_get_contents($url);
?>