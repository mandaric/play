<?php

$filename = 'savedtext.txt';

$content = file_get_contents($filename);

if (isset($_POST['message']))
{
    $content .= "\n" . $_POST['message'];

    file_put_contents($filename, $content);
}
else
{
    $message = null;
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Text input/output</title>
</head>
<body>
<form action="index.php" method="post">
    <textarea name="message" id="area" cols="30" rows="10"></textarea><br />
    <input type="submit" name="Submit text"/><br />
</form>
<div>
    <?php echo nl2br($content); ?>
</div>
</body>
</html>