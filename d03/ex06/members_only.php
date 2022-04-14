<?php

if $_SERVER('PHP_AUTH_USER') == 'zaz' && $_SERVER('PHP_AUTH_PW') == 'Ilovemylittleponey')
{
	$encoded_image = base64_encode(file_get_contents("../img/42.png"));
	echo("<html><body>\nHello Zaz<br/>\n<img src='data:image/png;base64,");
    echo($encoded_image);
    echo("'>\n</body></html>\n");
}
{
	echo("<html><body>That area is accessible for members only");
    echo("</body></html>\n");
}

?>