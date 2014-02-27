<?php
function createTinyUrl($strURL) {
    $tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=" . $strURL);
    return $tinyurl;
}

echo(createTinyUrl('http://www.svnlabs.com/'));

?>