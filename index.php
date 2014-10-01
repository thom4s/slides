<?php

require "parser.php";
$dirlist = getFileList("img");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="superslides.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/jquery.superslides.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>


	<div id="slides">
	  	<ul class="slides-container">
		
			<?php foreach($dirlist as $file): ?>
				<?php if(!preg_match("/\.jpg$/", $file['name'])) continue; ?>

					<li>
						<img src="<?php echo $file['name']; ?>">
					</li>


			<?php endforeach; ?>

		</ul>
		<nav class="slides-navigation">
			<a href="#" class="next">Next</a>
		    <a href="#" class="prev">Previous</a>
		</nav>
	</div>

</body>
</html>

