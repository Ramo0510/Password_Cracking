<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $text = $_GET['encode'];
    if ( strlen($text) != 4 || !ctype_digit($text) ) {
        $md5 = "Input must be exactly four digits";
    } else {
        $md5 = hash('md5', $text);
    }
}
?>
<!DOCTYPE html>
<head><title>Charles Severance MD5</title></head>
<body>
<h1>MD5 Maker</h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>