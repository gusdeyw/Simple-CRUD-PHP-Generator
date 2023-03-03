<?php
$myfile = fopen("engine.php", "w") or die("Unable to open file!");
$txt = "<?php echo 'TestFile'; ?>";
fwrite($myfile, $txt);
fclose($myfile);
echo "Success";
?>