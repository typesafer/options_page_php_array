<?php
$themename = "So";
$shortname = "se";

$options = array (
array( "name" => "the_firstname",
	"desc" => "The firstname of a person",
	"id" => $shortname."_the_firstname",
	"type" => "text",
	"value" => ""),	
	
array( "name" => "the_lastname",
	"desc" => "A persons lastname",
	"id" => $shortname."_the_lastname",
	"type" => "text",
	"value" => ""),
);

echo $options[0]['id']."<br/>";
?>