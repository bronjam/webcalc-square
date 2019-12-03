<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('square_function.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0
);

$x = $_REQUEST['x'];


$answer=square($x)

$output['string']=$x."squared =" $answer;
$output['answer']=$answer;

echo json_encode($output);
exit();
