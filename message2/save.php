<?php

if (isset($_POST['message']))
{
    $filename = 'savedtext.txt';

    $content = file_get_contents($filename);

    $content .= "\n" . $_POST['message'];

    file_put_contents($filename, $content);
}

header('Location: index.php');