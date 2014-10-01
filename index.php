<?php

require "parser.php";

$dirlist = getFileList("img");

// output file list as HTML table 
echo "<table border=\"1\">\n"; echo "<thead>\n"; 
echo "<tr><th></th><th>Name</th><th>Type</th><th>Size</th><th>Last Modified</th></tr>\n"; 
echo "</thead>\n"; 
echo "<tbody>\n";

foreach($dirlist as $file) { 
	if(!preg_match("/\.jpg$/", $file['name'])) continue; 
	echo "<tr>\n"; 
	echo "<td><img src=\"{$file['name']}\" width=\"64\"></td>\n"; 
	echo "<td>{$file['name']}</td>\n"; echo "<td>{$file['type']}</td>\n"; 
	echo "<td>{$file['size']}</td>\n"; 
	echo "<td>",date('r', $file['lastmod']),"</td>\n"; 
	echo "</tr>\n"; 
} 
echo "</tbody>\n";
echo "</table>\n\n";


?>
