<?php
	// 'https://en.wikipedia.org/wiki/Mars'
	$content = file_get_contents($_GET['https://en.wikipedia.org/wiki/Mars']);
	$content = str_ireplace('<head>', '<head><base href="'.$_GET['https://en.wikipedia.org/wiki/Mars'].'" target="_blank">', $content);
	//echo '123';
	echo $content;
?>