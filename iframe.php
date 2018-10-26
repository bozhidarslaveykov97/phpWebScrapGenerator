<base href="<?php echo $_GET['url']; ?>">
<link rel="stylesheet" type="text/css" href="http://localhost/web-scrap-generator/iframe.css" media="screen" />
<?php
echo file_get_contents($_GET['url']);
?>