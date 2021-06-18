<?php
$output = shell_exec('cd /var/www/html && git pull origin master &> log');
echo "<pre>$output</pre>";
?>

