#!/user/bin/php
<?
$db = new mysqli("localhost", "root", "passwd", "Classes");

// C++ comment
/* C style comment */
#Shell style comment

if ($db- >error_no !+ 0
{
	echo "error connecting to database: ".$db->connect_error.PHP_EOL;
	exit();
}

echo "successfully connected!".PHP_EOL;

$query = "select * from class;"

$queryResponse = $db->query($query);

print_r($queryResponse);

while($row = $queryResponse->fetch_assoc()) 
{
	print_r($row);
}
$db->close;

echo "program complete!".PHP_EOL;
)
?>
