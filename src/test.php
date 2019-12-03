<?php
echo "Test";
require('square_fuction.php');

$x=5;
$expect=25;

$answer=square($x);

echo "Result: ".$x."squared =".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed";
    exit(0); 
}
else
{
    echo "Test Failed";
    exit(1);
}
