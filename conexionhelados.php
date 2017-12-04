<?php
$db = new mysqli('localhost','root','','helados');
if ($db->connect_errno) {
	print"ERROR al conectar con la BD " + $mysql->connect_errno;
	# code...
}
echo $db->host_info . "\n";
?>