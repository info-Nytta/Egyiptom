<?php
$menu_number=0;
$json = file_get_contents('./front/content.json');
$menu = json_decode($json);

if (isset($_GET["p"]) && $_GET["p"]>=0 && $_GET["p"]<count($menu))
	$menu_number=$_GET["p"];

$page="pages/".$menu[$menu_number]->fileName;

?>