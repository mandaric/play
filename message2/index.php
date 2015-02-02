<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Text input/output</title>
</head>
<body>
<form action="save.php" method="post">
    <textarea name="message" id="area" cols="30" rows="10"></textarea><br />
    <input type="submit" name="Submit text"/><br />
</form>
<div>
    <?php
    $content = file_get_contents('savedtext.txt');

    echo nl2br($content);
    ?>
</div>
</body>
</html>