<?php 

if (!is_dir("images")) mkdir("images");

	foreach (scandir("images") as $item) {
		if (!in_array($item, array(".",".."))) {
			# code...
		unlink("images/" . $item);
		}
	}

echo "OK!";
 ?>