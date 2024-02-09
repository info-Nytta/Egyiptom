<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./front/css/style.css">
    <title>Egyiptom - <?php echo $menu[$menu_number]->title ?></title>
</head>
<body>
    <header>
        <h1>Egyiptom</h1>
    </header>
		
    <nav>
		<div id="hambi" onclick="hambimenu()">&#9776;</div>
		<ul id="menulista">
<?php
    for ($i=0; $i<count($menu);$i++)
        echo "<li class='menupont'><a href='./?p=$i'>".$menu[$i]->menu."</a></li>";
?>
		</ul>
    </nav>
		<script src="./front/js/menu.js"></script>
 