<!DOCTYPE html>
<head><title>Omar MD5 Cracker</title></head>
<body>
<h1>Omar MD5 Cracker</h1>
<p>This application takes an MD5 hash of a four-digit PIN and checks all 10,000 possible four-digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // Loop through all possible four-digit PINs
    for ($i = 0; $i <= 9999; $i++) {
        // Format the PIN to be exactly four digits with leading zeros
        $pin = str_pad($i, 4, '0', STR_PAD_LEFT);

        // Compute the MD5 hash of the PIN
        $check = hash('md5', $pin);

        // Check if the computed hash matches the provided hash
        if ( $check == $md5 ) {
            $goodtext = $pin;
            break; // Exit the loop if a match is found
        }

        // Debug output to show the first 15 attempts
        static $show = 15;
        if ( $show > 0 ) {
            print "$check $pin\n";
            $show = $show - 1;
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post - $time_pre;
    print "\n";
}
?>
</pre>
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="makecode.php">MD5 Encoder</a></li>
<li><a href="md5.php">MD5 Code Maker</a></li>
<li><a href="https://github.com/csev/wa4e/tree/master/code/crack" target="_blank">Source code for A two-character lower case string cracking password App</a></li>
<li><a href="https://github.com/csev/wa4e/tree/master/code/crack" target="_blank">Source code for this application (A four-digit PIN)</a></li>
</ul>
</body>
</html>