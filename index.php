<?php

require "parser.php";
$dirlist = getFileList("img");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascrip" src="vendors/responsiveslides.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

<ul class="rslides">
	
<?php foreach($dirlist as $file): ?>
	<?php if(!preg_match("/\.jpg$/", $file['name'])) continue; ?>

		<li>
			<img src="<?php echo $file['name']; ?>">
		</li>

<?php endforeach; ?>


</ul>







</body>
</html>

