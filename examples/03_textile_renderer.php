<?php      

/* $Id$ */      

/* No hardoced URL's in examples. Just copy the folder to server. */  
$url = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['SCRIPT_URI']);

?>
<html>
<head>
<title>jQuery editable plugin test</title>
<script src="jquery.js" type="text/javascript"></script>
<script src="../editable.js" type="text/javascript"></script>
</head>
<html>
<h1 class="editable" id="header_1"><?php print file_get_contents($url . 'load.php?id=header_1') ?></h1>
<h2 class="editable" id="header_2"><?php print file_get_contents($url . 'load.php?id=header_2') ?></h2>
<h3 class="editable" id="header_3"><?php print file_get_contents($url . 'load.php?id=header_3') ?></h3>
<div class="editable_textarea" id="paragraph_1">
<?php print file_get_contents($url . 'load.php?id=paragraph_1') ?>
</div>
<div class="editable_textile" id="paragraph_2">
<?php print file_get_contents($url . 'load.php?id=paragraph_2&renderer=textile') ?>
</div>

<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
    $(".editable").editable("<?php print $url ?>save.php", { 
        indicator : "<img src='img/indicator.gif'>"
    });
    $(".editable_textarea").editable("<?php print $url ?>save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : "textarea",
        rows      : 5,
        cols      : 80
    });
    $(".editable_textile").editable("<?php print $url ?>save.php?renderer=textile", { 
        indicator : "<img src='img/indicator.gif'>",
        postload  : "<?php print $url ?>load.php",
        type      : "textarea",
        rows      : 10,
        cols      : 80
    });
});
// ]]>
</script>
</html>

