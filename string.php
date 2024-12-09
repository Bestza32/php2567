<?php
$name = "Best";
?>

<h3>string functions </h3>
<div>Count: <?php echo strlen($name); ?></div>
<div>IndexOf: <?php echo strpos($name, 'o'); ?></div>
<div>Upper: <?php echo strtoupper($name); ?></div>
<div>Lower: <?php echo strtolower($name); ?></div>
<div>Replace: <?php echo str_replace("Best", "Boom", $name); ?></div>
<div>Substring: <?php echo substr($name, 0, 3); ?></div>



