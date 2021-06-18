<?php
$output = shell_exec('cd /var/www/html && git pull &> log');
echo "<pre>$output</pre>";
?>

